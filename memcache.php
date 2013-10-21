<?php

echo '<pre>';
$memcache = new Memcache;
$memcache->connect('localhost', 11211);
print_r($memcache->getStats());
