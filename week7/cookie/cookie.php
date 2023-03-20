<?php
if(!isset($_COOKIE['user'])) {
  setcookie('user', 'Dora', time() + (60 * 60 * 24), "/"); // 1 day
  echo "Cookie named 'user' was just set!";
} else {
  echo "Cookie 'user' is set!<br>";
  echo "Value is: " . $_COOKIE['user'];
}

echo "<hr>";
show_source(__FILE__); 


////// ilk defa girince set cokie oraya yerlesiyor
//// cokie den gorebiliyoruz develepor seceneginden
/// cokie gectikten sonra farki  display yapiyor  condition ona gore ayarladik.
/// time dedigimiz sureßini ayarliyoruz expire