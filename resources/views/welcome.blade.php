<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>UrSay Gambia</title>

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
                <div class="mdl-layout__header-row">
                  <!-- Title -->
                  <span class="mdl-layout-title">LOGO</span>
                  <!-- Add spacer, to align navigation to the right -->
                  <div class="mdl-layout-spacer"></div>
                  <!-- Navigation. We hide it in small screens. -->
                  <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">RECORDS</a>
                    <a class="mdl-navigation__link" href="">FEED</a>
                    <a class="mdl-navigation__link" href="">ARCHEIVE</a>
                  </nav>
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
              {{-- Post Card --}}
                <div class="mdl-layout__tab-panel is-active" id="overview">
                  <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <div class="mdl-card mdl-cell mdl-cell--12-col">
                      <div class="mdl-card__supporting-text flexed">
                        <a href="#" class="post-avatar">
                          <img src="https://assets.materialup.com/uploads/65f40866-ec7f-4f83-adfa-965f19db92a7/avatar.jpg" alt="Chris" width="55" height="55" class="avatar">
                          <h3 class="posted__by-text">Amiga tepasaleh</h3>
                        </a>
                        <p class="post-text">Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse. Pariatur occaecat nisi laboris tempor laboris eiusmod qui id Lorem esse commodo in. Exercitation aute dolore deserunt culpa consequat elit labore incididunt elit anim.</p>
                      </div>
                      <div class="mdl-card__actions">
                        <!-- Colored icon button -->
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                          <i class="material-icons">thumb_up</i>
                        </button>
                        <!-- Colored icon button -->
                        <button class="mdl-button mdl-js-button mdl-button--icon">
                          <i class="material-icons">thumb_down</i>
                        </button>
                      </div>
                    </div>
                  </section>
              </div>

              {{-- Footer stays here  --}}
              <footer class="mdl-mega-footer">
                <div class="mdl-mega-footer--middle-section">
                  <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Features</h1>
                    <ul class="mdl-mega-footer--link-list">
                      <li><a href="#">About</a></li>
                      <li><a href="#">Terms</a></li>
                      <li><a href="#">Partners</a></li>
                      <li><a href="#">Updates</a></li>
                    </ul>
                  </div>
                  <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Details</h1>
                    <ul class="mdl-mega-footer--link-list">
                      <li><a href="#">Spec</a></li>
                      <li><a href="#">Tools</a></li>
                      <li><a href="#">Resources</a></li>
                    </ul>
                  </div>
                  <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Technology</h1>
                    <ul class="mdl-mega-footer--link-list">
                      <li><a href="#">How it works</a></li>
                      <li><a href="#">Patterns</a></li>
                      <li><a href="#">Usage</a></li>
                      <li><a href="#">Products</a></li>
                      <li><a href="#">Contracts</a></li>
                    </ul>
                  </div>
                  <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">FAQ</h1>
                    <ul class="mdl-mega-footer--link-list">
                      <li><a href="#">Questions</a></li>
                      <li><a href="#">Answers</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
                  </div>
                </div>
                <div class="mdl-mega-footer--bottom-section">
                  <div class="mdl-logo">
                    More Information
                  </div>
                  <ul class="mdl-mega-footer--link-list">
                    <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Privacy and Terms</a></li>
                  </ul>
                </div>
              </footer>
            </main>
            </div>
    </body>
</html>
