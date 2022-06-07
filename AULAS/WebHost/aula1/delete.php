<?php

if(file_exists("isset_post.txt")) {
    unlink('isset_post.txt');
}

//header('Location: index.php');
header ('index.php');
