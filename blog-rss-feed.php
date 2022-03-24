<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>The Life of Calvin Blog RSS Feed</title>
   </head>
   <body>
     <div id="wrapper">
<div id="feed_div">
<?php
$rss = simplexml_load_file('https://pro70crazy.blogspot.com/feeds/posts/default');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item) 
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
 echo "<p class='desc'>" . $item->description . "</p>";
} 
?>
</div>
</div>
   </body>
</html>