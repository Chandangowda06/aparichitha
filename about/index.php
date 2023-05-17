<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../CSS/index.css">
  <link rel="stylesheet" href="../CSS/Navbar.css">
  <link rel="stylesheet" href="../CSS/footer.css">
  <link rel="stylesheet" href="../CSS/about.css">
  <link rel="stylesheet" href="../CSS/myjourney.css">
  <link rel="stylesheet" href="../CSS/aboutme.css">
  <link rel="stylesheet" href="../CSS/education.css">
  <link rel="stylesheet" href="../CSS/outside.css">
  <link rel="stylesheet" href="../CSS/footer.css">
  <script src="../javascript/Menu.js"></script>
  <title>About</title>
</head>
<body>
  <div id="about">
    <?php
    include '../HTML/header.php';?>
    <div class="img-a">
      <div class="img-txt">
        <h1>Chandan Gowda</h1>
        <p><em>But you can call me chandu</em></p>
        <p>Pleased to meet you! I'm a web developer who combines technical expertise with a creative mindset to build immersive digital solutions</p>
      </div>
      <img src="../images/img-af.jpg" class="img-wlcm"alt="Chandu"/>
      <?php include '../HTML/myjourney.php'?>
      <?php include '../HTML/aboutme.php'?>
      <?php include '../HTML/education.php'?>
      <?php include '../HTML/outside.php'?>
      <?php include '../HTML/footer.php'?>
    </div>
</div>
</body>
</html>