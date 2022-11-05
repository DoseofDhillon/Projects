<?php

$childPage = new ChildPage('Title', 'Content', '09/18/1997', 'Breaking Bad');

echo $childPage->getSport();
echo '<br>';
echo $childPage->getVgame();
echo '<br>';
echo $childPage->getDate();
echo '<br>';
echo $childPage->getShow();

?>