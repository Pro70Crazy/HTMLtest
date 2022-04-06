<html>
  <head>
    <title>Pinging <?php echo $_POST['HostName'];?></title>
  </head>
  <body>
<?php
    // Inside this page
    echo "<h1>Pinging ". $_POST['HostName']. "</h1>";
    $Host = $_POST['HostName'];
    `ping $Host`;
?>
</body>
    
</html>
