<html>
  <head>
    <title>Calculating <?php echo $_POST['addNumber1']. "+" .$_POST['addNumber2'];?></title>
  </head>
  <body>
    <?php
$NumberOne = $_POST['addNumber1'];
$NumberTwo = $_POST['addNumber2'];

if($NumberOne == "")
{
  echo "Error: Number is blank";
}
if($NumberTwo == "")
{
  echo "Error: Number is blank";
}
if(($NumberOne == "") and ($NumberTwo == ""))
{
  echo "Error: Number is blank";
}

else {
echo "$NumberOne + $NumberTwo = ", $NumberOne+$NumberTwo;
}
?>
  </body>
</html>
