﻿<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>game</title>
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="ui">

  <div class="ui__background"></div>

  <div class="ui__game"></div>

  <div class="ui__texts">
    <h1 class="text text--title">
      <span>welcome to suctf</span>
    </h1>
    <div class="text text--note">
      双击即可开始
     <br></br>
  <span>can u find my secret?</span>
    </div>
    <div class="text text--timer">
      0:00
    </div>
    <div class="text text--complete">
      <span>Well done!</span>
    </div>
    <div class="text text--best-time">
      <icon trophy></icon>
      <span>Well done!，
	  <?php echo "here is your flag:ON2WG5DGPNUECSDBNBQV6RTBNMZV6RRRMFTX2===" ?>
	  </span>
    </div>
  </div>

  <div class="ui__prefs">
    <range name="flip" title="Flip Type" list="Swift&nbsp;,Smooth,Bounce"></range>
    <range name="scramble" title="Scramble Length" list="20,25,30"></range>
    <range name="fov" title="Camera Angle" list="Ortographic,Perspective"></range>
    <range name="theme" title="Color Scheme" list="Cube,Erno,Dust,Camo,Rain"></range>
  </div>

  <div class="ui__stats">
    <div class="stats" name="total-solves">
      <i>Total solves:</i><b>-</b>
    </div>
    <div class="stats" name="best-time">
      <i>Best time:</i><b>-</b>
    </div>
    <div class="stats" name="worst-time">
      <i>Worst time:</i><b>-</b>
    </div>
    <div class="stats" name="average-5">
      <i>Average of 5:</i><b>-</b>
    </div>
    <div class="stats" name="average-12">
      <i>Average of 12:</i><b>-</b>
    </div>
    <div class="stats" name="average-25">
      <i>Average of 25:</i><b>-</b>
    </div>
  </div>

  <div class="ui__buttons">
    <button class="btn btn--bl btn--stats">
      <icon trophy></icon>
    </button>
    <button class="btn btn--bl btn--prefs">
      <icon settings></icon>
    </button>
    <button class="btn btn--bl btn--back">
      <icon back></icon>
    </button>
    <button class="btn btn--br btn--pwa">
    </button>
  </div>

</div>
<script language="JavaScript">
setTimeout(function(){location.reload()},75000); 
alert("COME on,u canbe faster")
</script>
<script src='js/three.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>
