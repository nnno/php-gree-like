<?php
require 'Gree/Like.php';

$url = 'http://blog.nnno.jp/';

$like = new Gree_Like();
echo $like->get_button($url);

