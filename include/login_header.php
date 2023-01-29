<?php
  $userAgent = $_SERVER['HTTP_USER_AGENT'];
  if (preg_match('/^.*(curl|wget|python).*$/', $userAgent)) {
    // block the request
    die("Bad user agent");
  }
  // continue processing the request
?>
<?php
  
  /*setcookie('PHPSESSID', 'l1nb4urbicei5c24avabje5bp6', time() + (86400 * 30), "/", "", false, true); */

  /*setcookie('PHPSESSID', 'dh4lk0c7gfaht9jouns6f0lsuv', [
    'expires' => time() + (86400 * 30),
    'path' => '/',
    'domain' => '',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
  ]);*/


  if (strtolower(getenv('APP_ENV')) === 'production') {
    error_reporting(0);

    function customErrorHandler($errno, $errstr, $errfile, $errline) {
        header("HTTP/1.1 500 Internal Server Error");
        echo "An error has occurred. Please try again later.";
        exit();
    }

    set_error_handler("customErrorHandler");
  } else {
    error_reporting(E_ALL);
  }
  header("Server: Custom");
  header('Server:');
  header_remove("X-Powered-By");
  header('X-Content-Type-Options: nosniff');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" 
    content="default-src 'self' data: gap: 'unsafe-eval' ws:;
    style-src 'self' 'unsafe-inline';
    script-src *;
    media-src *;
    font-src *;
    connect-src *; 
    img-src 'self' data: content:; child-src 'none';">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" href="css/materialize.min.css" rel="stylesheet" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <?php
    // session_start();
  ?>
