#!/bin/bash
expected="{ status:ok }"
sleep .5
echo `date` >> ifs.log
AlteonRest () {
    req=""
    while [[ $req != $expected ]]; do
        req=`curl -s https://$1/config/AgPortOperTable/$2/ -H 'Authorization: Basic YWRtaW46YWRtaW4=' -X PUT -k --data '{ "PortOperState":"'$3'" }' --connect-timeout 1 --trace-ascii 1.log | xargs` 2>&1
	date=`date`
        echo "$date  $req   $1 $2 $3" >> ifs.log
    done
}
case $1 in
    "up")
        sudo -n ifup ens33:1
        sudo -n ifup ens33:2
        sudo -n ifup ens33:3
        sudo -n ifup ens33:4
        sudo -n ifup ens33:5
        AlteonRest 10.100.0.51 1 1 &
        AlteonRest 10.100.0.51 2 1 &
        AlteonRest 10.100.0.51 3 1 &
        AlteonRest 10.100.0.52 1 1 &
        AlteonRest 10.100.0.52 2 1 &
        AlteonRest 10.100.0.52 3 1 &
        exit
        ;;
    "down")
        sudo -n ifdown ens33:1
        sudo -n ifdown ens33:2
        sudo -n ifdown ens33:3
        sudo -n ifdown ens33:4
        sudo -n ifdown ens33:5
        AlteonRest 10.100.0.51 1 2 &
        AlteonRest 10.100.0.51 2 2 &
        AlteonRest 10.100.0.51 3 2 &
        AlteonRest 10.100.0.52 1 2 &
        AlteonRest 10.100.0.52 2 2 &
        AlteonRest 10.100.0.52 3 2 &
        exit
        ;;
    "alt2-isp1-down")
        AlteonRest 10.100.0.52 2 2 &
        exit
        ;;
    "alt1-all-links-down")
        AlteonRest 10.100.0.51 1 2 &
        AlteonRest 10.100.0.51 2 2 &
        AlteonRest 10.100.0.51 3 2 &
        exit
        ;;
esac

