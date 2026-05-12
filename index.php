<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Info</title>
  <style>
    :root {
      --bg: #f4f6f8;
      --card: #ffffff;
      --text: #1f2937;
      --muted: #6b7280;
      --border: #e5e7eb;
      --primary: #d71920;
      --primary-dark: #b31318;
      --warning: #f59e0b;
      --danger: #dc2626;
      --success: #16a34a;
      --shadow: 0 6px 18px rgba(15, 23, 42, 0.06);
      --radius: 12px;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: linear-gradient(135deg, #f8fafc 0%, var(--bg) 100%);
      color: var(--text);
      min-height: 100vh;
    }

    .page {
      width: min(1100px, 94vw);
      margin: 0 auto;
      padding: 18px 0 28px;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 16px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .brand img {
      width: 120px;
      height: 32px;
      object-fit: contain;
      background: white;
      border-radius: 8px;
      padding: 4px 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .brand-title h1 {
      margin: 0;
      font-size: 20px;
      line-height: 1.2;
    }

    .brand-title p {
      margin: 4px 0 0;
      color: var(--muted);
      font-size: 12px;
    }

    .status-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 7px 10px;
      border: 1px solid var(--border);
      background: var(--card);
      border-radius: 999px;
      box-shadow: 0 6px 18px rgba(15, 23, 42, 0.06);
      font-size: 12px;
      white-space: nowrap;
    }

    .status-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--success);
      box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.12);
    }

    .grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 14px;
      align-items: start;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
    }

    .card-header {
      padding: 12px 16px;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
    }

    .card-header h2 {
      margin: 0;
      font-size: 15px;
    }

    .card-header span {
      color: var(--muted);
      font-size: 12px;
    }

    .info-table {
      width: 100%;
      border-collapse: collapse;
    }

    .info-table tr:not(:last-child) {
      border-bottom: 1px solid var(--border);
    }

    .info-table td {
      padding: 8px 16px;
      vertical-align: top;
      font-size: 13px;
    }

    .info-table td:first-child {
      width: 32%;
      color: var(--muted);
      font-weight: 600;
    }

    .info-value {
      font-family: Consolas, Monaco, monospace;
      word-break: break-word;
    }

    .actions {
      padding: 18px;
      display: grid;
      gap: 12px;
    }

    .action-button {
      width: 100%;
      border: 0;
      border-radius: 12px;
      padding: 14px 16px;
      font-size: 14px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
      transition: transform 0.15s ease, box-shadow 0.15s ease, opacity 0.15s ease;
      text-align: left;
    }

    .action-button:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 18px rgba(15, 23, 42, 0.16);
    }

    .action-button:active {
      transform: translateY(0);
      opacity: 0.9;
    }

    .danger { background: var(--danger); }
    .warning { background: var(--warning); }
    .primary { background: var(--primary); }
    .success { background: var(--success); }

    details {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      margin-top: 22px;
      overflow: hidden;
    }

    summary {
      cursor: pointer;
      padding: 18px 22px;
      font-weight: 700;
      list-style: none;
      border-bottom: 1px solid transparent;
    }

    summary::-webkit-details-marker {
      display: none;
    }

    details[open] summary {
      border-bottom-color: var(--border);
    }

    .headers-wrap {
      max-height: 300px;
      overflow: auto;
    }

    .cards-compact {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
      margin-top: 14px;
    }

    .rewrite-marker {
      margin-top: 14px;
      padding: 16px 18px;
      border: 2px dashed var(--primary);
      border-radius: var(--radius);
      background: #fff5f5;
      box-shadow: var(--shadow);
    }

    .rewrite-marker h2 {
      margin: 0 0 6px;
      font-size: 15px;
    }

    .rewrite-marker-code {
      display: inline-block;
      margin-top: 6px;
      padding: 6px 10px;
      border-radius: 10px;
      background: #1f2937;
      color: #ffffff;
      font-family: Consolas, Monaco, monospace;
      font-size: 18px;
      font-weight: 700;
      letter-spacing: 0.06em;
    }

    .message-form {
      padding: 20px 22px;
    }

    textarea {
      width: 100%;
      min-height: 120px;
      resize: vertical;
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 12px 14px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 14px;
      outline: none;
    }

    textarea:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 4px rgba(215, 25, 32, 0.12);
    }

    .submit-button {
      margin-top: 12px;
      border: 0;
      border-radius: 12px;
      padding: 12px 18px;
      background: var(--primary);
      color: #fff;
      font-weight: 700;
      cursor: pointer;
    }

    .footer {
      margin-top: 28px;
      text-align: center;
      color: var(--muted);
      font-size: 13px;
    }

    @media (max-width: 820px) {
      .header,
      .grid,
      .cards-compact {
        grid-template-columns: 1fr;
      }

      .header {
        align-items: flex-start;
        flex-direction: column;
      }

      .status-pill {
        white-space: normal;
      }
    }
  </style>
</head>
<body onload="ProtocolVer();">
  <?php
    function randStr($length = 20) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $string = '';
      for ($i = 0; $i < $length; $i++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
      }
      return $string;
    }
    if (!isset($_COOKIE['ServerCookie'])) { setcookie("ServerCookie", randStr()); }
  ?>

  <main class="page">
    <header class="header">
      <div class="brand">
        <img src="images/rad.jpg" alt="Radware" />
        <div class="brand-title">
          <h1>TCP/IP Web Info</h1>
          <p>Traffic visibility dashboard</p>
        </div>
      </div>
      <div class="status-pill">
        <span class="status-dot"></span>
        <span>Served by Apache</span>
      </div>
    </header>

    <section class="grid">
      <div class="card">
        <div class="card-header">
          <div>
            <h2>Connection Details</h2>
            <span>Live request and server information</span>
          </div>
        </div>

        <table class="info-table">
          <tr>
            <td>Protocol Version</td>
            <td class="info-value" id="ProtocolVer">Detecting...</td>
          </tr>
          <?php
            $headers = array();
            echo '<tr><td>Client IP</td><td class="info-value">' . getenv('REMOTE_ADDR') . '</td></tr>';
            echo '<tr><td>Client Source Port</td><td class="info-value">' . getenv('REMOTE_PORT') . '</td></tr>';

            $host = getenv('HTTP_HOST');
            if (strpos($host, 'scenario3') !== false) {
              if (getenv('SERVER_ADDR') == '10.100.3.11') {
                echo '<tr><td>Server Type</td><td class="info-value">Development</td></tr>';
              } elseif (getenv('SERVER_ADDR') == '10.100.3.12' || getenv('SERVER_ADDR') == '10.100.3.13') {
                echo '<tr><td>Server Type</td><td class="info-value">Staging</td></tr>';
              } else {
                echo '<tr><td>Server Type</td><td class="info-value">Production</td></tr>';
              }
            }

            $srv_ip = getenv('SERVER_ADDR');
            if ($srv_ip == '10.100.3.11') { $srv = "Server1"; }
            elseif ($srv_ip == '10.100.3.12') { $srv = "Server2"; }
            elseif ($srv_ip == '10.100.3.13') { $srv = "Server3"; }
            elseif ($srv_ip == '10.100.3.14') { $srv = "Server4"; }
            elseif ($srv_ip == '10.100.3.15') { $srv = "Server5"; }
            else { $srv = "Server0"; }

            echo '<tr><td>Server</td><td class="info-value">' . $srv . '</td></tr>';
            echo '<tr><td>Server IP</td><td class="info-value">' . getenv('SERVER_ADDR') . '</td></tr>';
            echo '<tr><td>Server Destination Port</td><td class="info-value">' . getenv('SERVER_PORT') . '</td></tr>';

            $ip = getenv('REMOTE_ADDR');
            if (getenv('REMOTE_ADDR') == '10.100.3.150') {
              echo '<tr><td>Served By</td><td class="info-value">Site A - Alteon 1</td></tr>';
            } elseif (getenv('REMOTE_ADDR') == '10.100.3.151') {
              echo '<tr><td>Served By</td><td class="info-value">Site A - Alteon 2</td></tr>';
            }
          ?>
        </table>
      </div>

      
    </section>

    <div class="cards-compact">
    <div class="card">
      <div class="card-header">
        <div>
          <h2>Request Headers Received By Server</h2>
          <span>Headers observed by the application for the current page request</span>
        </div>
      </div>
      <div class="headers-wrap">
        <table class="info-table">
          <?php
            echo '<tr><td>Request URI</td><td class="info-value">' . getenv('REQUEST_URI') . '</td></tr>';
            foreach ($_SERVER as $name => $value) {
              if (strpos($name, 'HTTP_') === 0) {
                $headers = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($name, 5)))));
                if ($headers === 'X-Forwarded-For') { $ip = $value; }
                echo '<tr><td nowrap>' . $headers . '</td><td class="info-value">' . $value . '</td></tr>';
              }
            }
            header("IP: $ip");
          ?>
        </table>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <div>
          <h2>Response Headers Generated/Exposed By Server</h2>
          <span>Headers visible to the application/server for the current page request</span>
        </div>
      </div>
      <div class="headers-wrap">
        <table class="info-table">
          <?php
            $responseHeaders = array();
            foreach (headers_list() as $headerLine) {
              $parts = explode(':', $headerLine, 2);
              $name = trim($parts[0]);
              $value = isset($parts[1]) ? trim($parts[1]) : '';
              if ($name !== '') {
                $responseHeaders[$name] = $value;
              }
            }

            if (function_exists('apache_response_headers')) {
              foreach (apache_response_headers() as $name => $value) {
                if ($name !== '') {
                  $responseHeaders[$name] = $value;
                }
              }
            }

            $statusCode = http_response_code();
            $statusTexts = array(
              200 => 'OK',
              201 => 'Created',
              204 => 'No Content',
              301 => 'Moved Permanently',
              302 => 'Found',
              304 => 'Not Modified',
              400 => 'Bad Request',
              401 => 'Unauthorized',
              403 => 'Forbidden',
              404 => 'Not Found',
              500 => 'Internal Server Error',
              502 => 'Bad Gateway',
              503 => 'Service Unavailable'
            );
            $statusText = isset($statusTexts[$statusCode]) ? $statusTexts[$statusCode] : '';
            $responseHeaders = array_merge(
              array('Status' => trim($statusCode . ' ' . $statusText)),
              $responseHeaders
            );

            if (!isset($responseHeaders['Server'])) {
              $responseHeaders['Server'] = getenv('SERVER_SOFTWARE') ?: 'Apache';
            }

            foreach ($responseHeaders as $name => $value) {
              echo '<tr><td>' . htmlspecialchars($name) . '</td><td class="info-value">' . htmlspecialchars($value) . '</td></tr>';
            }
          ?>
        </table>
        <p style="margin:12px 16px 0;color:#6b7280;font-size:12px;">
          This page shows headers visible to the application/server for the current page request.
          Browser devtools may show additional transport headers not exposed to PHP.
        </p>
      </div>
    </div>
    </div>

    <section class="rewrite-marker" aria-label="ADC rewrite test marker">
      <h2>ADC Rewrite Test</h2>
      <p>This marker is intentionally static for body-rewrite validation.</p>
      <div class="rewrite-marker-code">ADC_TEST_APACHE</div>
    </section>

    <details>
      <summary>Post a Message</summary>
      <form class="message-form" action="echo.php" method="post">
        <textarea id="Msg" name="Msg" placeholder="Type a message to echo back..."></textarea>
        <br />
        <input class="submit-button" type="submit" name="Go!" value="Submit" />
      </form>
    </details>

    <p class="footer">Served by Apache</p>
  </main>

  <script>
    function ProtocolVer() {
      const protocolElement = document.getElementById("ProtocolVer");
      const navEntry = performance.getEntriesByType("navigation")[0] || performance.getEntries()[0];
      protocolElement.innerHTML = navEntry && navEntry.nextHopProtocol ? navEntry.nextHopProtocol : "Unavailable";
    }
  </script>
</body>
</html>
