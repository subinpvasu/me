<?php

/* 
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  Author : SUBIN P VASU, Freelance Google Ads(AdWords) API Developer - PHP, Python
 *  Created On : 14-Aug-2020 
 */

?>
<html>
  <head>
    <title>Custom Search JSON API Example</title>
  </head>
  <body>
    <div id="content"></div>
    <script>
      function hndlr(response) {
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
        // in production code, item.htmlTitle should have the HTML entities escaped.
        document.getElementById("content").innerHTML += "<br>" + item.htmlTitle;
      }
    }
    </script>
    <script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyASylzQO1-V0gvPxwiUp5xC0k6im0PnA8k&cx=5a14381e4036be136&q=python&callback=hndlr">
    </script>
  </body>
</html>
