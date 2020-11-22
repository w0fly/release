<?php
date_default_timezone_set('Europe/Istanbul');
$born_date = "22.11";
$this_date = date('d.m');
if ($born_date == $this_date){
  echo '
  <title> Welcome The 8-BIT World ! </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
  <center>
  <br>
  <br>
  <br>
  <a> Happy Birth Day ! </a>
  <br>
  <br>
  <br>
  <p>Insert The Coin</p>
  <br>
  <br>
  <br>
  <p>Play The Game !</p>


  </center>
  <div class="floor"></div>
<!-- thank you: https://woot.co.uk/ -->
<!-- thank you: http://loopable.files.wordpress.com/ -->
  <img src="http://www.woot.co.uk/images/bitdance.gif" class="woot-dance" width="328" height="272" alt="8-bit dancing guy">
  <iframe width="1" height="1" wmode="transparent" src="//www.youtube.com/embed/AZxYFcaDiuM?autoplay=1&loop=1&playlist=AZxYFcaDiuM" frameborder="0" allowfullscreen>
';
}
else{
  echo "Incoming day dude!";
}


?>
