<?php
session_start(); // Session starts here.
?><!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PPLSI TS Workflow:Start New Caller</title>
  <meta name="description" content="TS Workflow:Start New Caller">
  <meta name="author" content="Brett Krumholz">

  <meta property="og:title" content="TS Workflow:Start New Caller">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
  <meta property="og:description" content="TS Workflow:Start New Caller">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="img/favicon.ico">
  <link rel="icon" href="img/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/form.css">

</head>

<body>
  <h1>PPLSI Technical Support Workflow</h1>
  <h2>New Caller Form</h2>
  <!--Form Start-->
  <div class="login-box">
      <h2>Collect User Info</h2>

  <form id="new_caller" method="post">
      <div class="user-box">
        <input type="text" id="fname" name="" required="">
        <label for="fname">First Name</label>
      </div>
      <div class="user-box">
        <input type="text" id="lname" name="" required="">  
        <label>Last Name:</label>
      </div>
      <div class="user-box">
        <input type="text" id="uname" name="" required="">
        <label for="uname">User Name:</label>
      </div>
      <div class="user-box">
        <input type="text" id="cbnum" name="" required="">
        <label for="cbnum">Callback Number:</label>
      </div>
      <!--<input type="submit" value="Next">-->
      <a href="#" onclick="submitForm()">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Next
        </a>
    
    

  </form>
  </div>
  <!--<script src="js/scripts.js"></script>-->
  <script>
    function submitForm() {
      let form = document.getElementByID("new_caller");
      form.submit();
    }
  </script>
</body>
</html>