<?php  

// require __DIR__ . "/../public/" . basename($_GET['type']) . "/" . basename($_GET['file']);
if ($_GET['type'] === 'css'){
    header("Content-type: text/css; charset: UTF-8");
    echo require __DIR__ . "/../public/css/" . basename($_GET['file']);
} else {
    echo require __DIR__ . "/../public/" . basename($_GET['type']) . "/" . basename($_GET['file']);
}