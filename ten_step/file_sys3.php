<?php


echo fileperms("sajjad");//40755
echo "<br>";
clearstatcache();
chmod("sajjad",0700);
echo "<br>";
echo fileperms("sajjad");//40755
