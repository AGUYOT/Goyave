<?php
//
use Services\Validation\ValidationDisplay;
//
ValidationDisplay::init();
//
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="./css/theme.css">
    <link rel="stylesheet" type="text/css" href="./css/animation.css">
    <link rel="stylesheet" type="text/css" href="./css/debugbar.css">
  </head>
  <body>
      <header class="header">
            <h1 class="title">Goyave Framework</h1>
            <div id="hamburger" class="hamburglar is-open">

            <div class="burger-icon">
              <div class="burger-container">
                <span class="burger-bun-top"></span>
                <span class="burger-filling"></span>
                <span class="burger-bun-bot"></span>
              </div>
            </div>
            
            <!-- svg ring containter -->
            <div class="burger-ring">
              <svg class="svg-ring">
                <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
              </svg>
            </div>
            <!-- the masked path that animates the fill to the ring -->
            
            <svg width="0" height="0">
                <mask id="mask">
            <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                </mask>
              </svg>
            <div class="path-burger">
              <div class="animate-path">
                <div class="path-rotation"></div>
              </div>
            </div>
          </div>
      </header>
      </div>
      <div class="container">
        <div class="card">

        </div>
      </div>
  </body>
  <script src="./js/jquery-3.4.1.js"></script>
  <script src="./js/theme.js"></script>
</html>

<?php
//
    ValidationDisplay::render();
//
?>