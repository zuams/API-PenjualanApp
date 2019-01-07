<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="./docs/swagger-ui.css" >
    <link rel="icon" type="image/png" href="./docs/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./docs/favicon-16x16.png" sizes="16x16" />
    <style>
      html
      {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
      }

      *,
      *:before,
      *:after
      {
        box-sizing: inherit;
      }

      body
      {
        margin:0;
        background: #fafafa;
      }
    </style>
  </head>

  <body>
    <div id="swagger-ui"></div>

    <script src="./docs/swagger-ui-bundle.js"> </script>
    <script src="./docs/swagger-ui-standalone-preset.js"> </script>
    <script>
      window.onload = function() {
        // Get current host
          //for localhost
          //host = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
          host = location.protocol+'//'+location.hostname;
        // Build a system
        const ui = SwaggerUIBundle({
          url: host + "/docs/api-docs.json",
          dom_id: '#swagger-ui',
          presets: [
            SwaggerUIBundle.presets.apis,
            SwaggerUIStandalonePreset
          ],
          plugins: [
            SwaggerUIBundle.plugins.DownloadUrl
          ],
          layout: "StandaloneLayout"
        })

        window.ui = ui
      }
    </script>
  </body>
</html>
