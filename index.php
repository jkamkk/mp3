<?php
// 这个变量存放了你的仓库的根目录，你可以根据你的仓库名和用户名修改
$root = "https://jkamkk.github.io/mp3/";

// 这个函数用来获取仓库中所有的mp3文件的路径，返回一个数组
function getMp3s($root) {
  $mp3s = glob("*.mp3");
  foreach ($mp3s as &$mp3) {
    $mp3 = $root . $mp3;
  }
  return $mp3s;
}

// 这个函数用来从数组中随机选择一个元素并返回
function randomChoice($arr) {
  $index = array_rand($arr);
  return $arr[$index];
}

// 这个函数用来重定向到一个随机的mp3文件的URL
function redirectToMp3($root) {
  $mp3s = getMp3s($root);
  $mp3 = randomChoice($mp3s);
  header("Location: $mp3");
}

// 调用这个函数
redirectToMp3($root);
?>
