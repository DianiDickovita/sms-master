<?php session_start(); ?>
  <!-- Session Checking -->
  <?php
if(isset($_SESSION['student_id']))
{

}
else{
  header("location:login.php");
}

error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src https://*; child-src 'none';">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo "Welcome " . $_SESSION['student_name']; ?></title>
  </head>
  <style>
        header, .mufazmi, footer {
        padding-left: 300px;
      }
  
      @media only screen and (max-width : 992px) {
        header, .mufazmi, footer {
          padding-left: 0;
        }
      }
    </style>
  <body bgcolor="#ececec">