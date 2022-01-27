<?php
$filename = './front-page.php';
if (file_exists($filename)) {
	require_once("./front-page.php");
} else {
	echo "ページが存在しません";
};