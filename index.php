<html>
  <head>
    <title>
      App Simulator
    </title>
    <script language="javascript">
      function myPopup(url, windowname, w, h, x, y)
      {
          window.open(url, windowname, "resizable=no, toolbar=no, scrollbars=no, menubar=no, status=no, directories=no, width=" + w + ", height=" + h + ", left=" + x + ", top=" + y);
      }
      </script>
  </head>
  <body>
    <button onclick="myPopup('index.html','App Simulator',390,844,0,0)">
      Launch App Simulator
    </button>
  </body>
</html>