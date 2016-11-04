<?php
$page = $_GET['page'];

$people = array("index.html", "scalculus", "blockchain", "atrading","ptheory");

if (in_array($page, $people))
  {
  include($page);
  }
else
  {
  echo "Page not found";
  }

?>