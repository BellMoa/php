<?php
require __DIR__. '/model/photo.php';

$items = Photo_getAll();

include  __DIR__. '/view/index.php';