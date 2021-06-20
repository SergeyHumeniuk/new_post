<?php
require_once('../newPost/new_post.php');

use NewPostDelivery\NewPostApi;

$key = '0e48471e6ad3317b9454b05f7c3e6f82';
$np = new NewPostApi();
$result = $np->getDel($key);
$res = json_decode($result);
var_dump($res->data[0]->Ref);
