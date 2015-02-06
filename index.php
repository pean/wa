<?php

ini_set('html_errors', false);
require 'vendor/autoload.php';

// Init Wash - the tiny url shortener
$wash = new Pean\Wash(require 'config.php');

?>
<html>
  <head>
    <title>wa.se</title>
    <meta name="verify-v1" content="eGchW6EG0uAlH1BvLHO2kJzB7J0b/b39Raf4YDjFsRE=" />
    <style type="text/css">
      body {
          margin:0px;
          background-color:#49760f;
          background-image:url('grass.png');
          background-repeat:repeat-x;
          background-position:top left;
      }
    </style>
  </head>
  <body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-589741-8', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>