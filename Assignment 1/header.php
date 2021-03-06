<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 15px 10px;
  background-image: url(img/header_index.png);
}

.header a {
  float: left;
  color: black;
  font-weight: bold;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  font-family:"Lucida Console", "Courier New", monospace;
}

.header a:hover {
  color: orange;
  font-weight: bold;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 300px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }

  .header-right {
    float: none;
  }
}
</style>
  <div >
</head>
<body>

<nav class="header">
  <a href="index.php" class="logo" style="transition-duration: 10.6s">Web Programming Project</a>
  <div class="header-right">
    <a href="home.php" style="transition-duration: 0.6s">Home</a>
    <a href="member.php" style="transition-duration: 0.6s">Members</a>
    <a href="clock.php" style="transition-duration: 0.6s">Clock</a>
    <a href="calculator.php" style="transition-duration: 0.6s">Calculator</a>
    <a href="../index.php" style="transition-duration: 0.6s">Car Rental</a>
    <!-- <a href="#about">About</a>  -->
  </div>
</nav>


</body>
</html>
