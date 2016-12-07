<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>UrSay The Gambia</title>

      <!-- Add to homescreen for Chrome on Android -->
      <meta name="mobile-web-app-capable" content="yes">
      <link rel="icon" sizes="192x192" href="images/android-desktop.png">

      <!-- Add to homescreen for Safari on iOS -->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="Material Design Lite">
      <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

      <!-- Tile icon for Win8 (144x144 + tile color) -->
      <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
      <meta name="msapplication-TileColor" content="#3372DF">

      <link rel="shortcut icon" href="images/favicon.png">

      <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
      <!--
      <link rel="canonical" href="http://www.example.com/">
      -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    </head>
    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
        <!-- Always shows a header, even in smaller screens. -->
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
              <header class="mdl-layout__header">
                  <!-- Tabs -->
                  <div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background-color: #1976D2;">
                      <!-- Title -->
                    {{-- <span class="mdl-layout-title">LOGO</span> --}}
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>

                      <a class="mdl-layout__tab" href="#latest">LATEST</a>
                      <a class="mdl-layout__tab is-active" href="#feed">FEED</a>
                      <a class="mdl-layout__tab" href="#top">POPULAR</a>
                        <!-- Add spacer, to align navigation to the right -->
                      <div class="mdl-layout-spacer"></div>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
                      <label class="mdl-button mdl-js-button mdl-button--icon"
                             for="fixed-header-drawer-exp">
                        <i class="material-icons">search</i>
                      </label>
                      <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample"
                               id="fixed-header-drawer-exp">
                      </div>

                  </div>
                </div>
              </header>
              {{-- Main Layout --}}
              <main class="mdl-layout__content">

              @include('includes/post')
              @include('includes/footer')
            </main>
            </div>
    </body>
</html>
