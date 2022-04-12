<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<title>ASL Flashcards</title>
<style>
#term {
  margin:  auto;
  border-radius: 25px;
  border: 2px solid #000000;
  background: #73AD21;
  padding: 20px;
  width: 250px;
  line-height: 100px;
  text-align: center;
  font-size: xx-large;
}
</style>
</head>
<body>
<?php
$rows = array_map('str_getcsv', file('asl.csv'));
$asl  = array();
foreach($rows as $r)
    $asl[$r[0]] = $r[1];
$a = array_rand($asl);
echo "<p id='term'>$a</p>
<p style='text-align: center'><a href='$asl[$a]' target='_blank'>(hint)</a></p>
<form action=''>
  <div style='text-align: center'><input type='submit' value='Another'></div>
</form>\n";
?>
</body>
</html>