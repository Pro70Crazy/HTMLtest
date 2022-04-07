<html>
  <head>
    <title>Here is your File Info</title>
  </head>
  <body>
    <h1>File Reader 3000</h1>
    <h3>Here is your File Info:</h3>
<?php
echo "File Name: ". $_FILES['FileName']['name'] . "<br>";
echo "File Type: ". $_FILES['FileName']['type'] . "<br>";
echo "File Size: ". $_FILES['FileName']['size']; 
echo " bytes";
?>
<br><br>
<a href="index.html">Check another File</a>
</html>
