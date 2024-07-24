<?php
// counter.php 文件内容
$filename = "counter.txt"; // 存储计数的文件

if(file_exists($filename)){
    $counter = file_get_contents($filename);
} else {
    $counter = 0;
}

$counter++; // 每次访问增加1

file_put_contents($filename, $counter); // 将更新后的计数写回文件

// 将计数器的值输出到前端页面
echo $counter;
?>
