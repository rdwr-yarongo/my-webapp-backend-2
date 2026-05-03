#!/bin/bash
sudo -n ifup ens33:1
sudo -n ifup ens33:2
sudo -n ifup ens33:3
sudo -n ifup ens33:4
sudo -n ifup ens33:5
curl https://10.100.0.51/config/AgPortOperTable/1/ -H 'Authorization: Basic YWRtaW46YWRtaW4=' -X PUT -k --data '{ "PortOperState":"1" }' --connect-timeout 1
curl https://10.100.0.51/config/AgPortOperTable/2/ -H 'Authorization: Basic YWRtaW46YWRtaW4=' -X PUT -k --data '{ "PortOperState":"1" }' --connect-timeout 1
curl https://10.100.0.51/config/AgPortOperTable/3/ -H 'Authorization: Basic YWRtaW46YWRtaW4=' -X PUT -k --data '{ "PortOperState":"1" }' --connect-timeout 1

curl https://10.100.0.52/config/AgPortOperTable/1/ -H 'Authorization: Basic YWRtaW46YWRtaW4=' -X PUT -k --data '{ "PortOperState":"1" }' --connect-timeout 1
curl https://10.100.0.52/config/AgPortOperTable/2/ -H 'Authorization: Basic YWRtaW46YWRtaW4=' -X PUT -k --data '{ "PortOperState":"1" }' --connect-timeout 1
curl https://10.100.0.52/config/AgPortOperTable/3/ -H 'Authorization: Basic YWRtaW46YWRtaW4=' -X PUT -k --data '{ "PortOperState":"1" }' --connect-timeout 1

