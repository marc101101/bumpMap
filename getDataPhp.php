<?php
  mysql_connect("webgo24-server19.de","web164_1","ironmann1");
  mysql_select_db("web164_db1");
  
  echo '"beitrag:" ';
  $q=mysql_query("SELECT title FROM onj7u_content");
  while($e=mysql_fetch_assoc($q))
  $output[]=$e;
 
  print(json_encode($output));
 
  mysql_close();
?>