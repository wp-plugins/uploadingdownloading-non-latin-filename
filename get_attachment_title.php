<?php
include '../../../wp-blog-header.php';
include 'functions.php';
$filename_for_download = get_filename_for_download($_GET['id']);
echo $filename_for_download;