<?php
define("ROOT_FOLDER", dirname(__DIR__));
const CV_FILE = 'linkedIn-clean.json';

$data = file_get_contents(ROOT_FOLDER . '/data/'. CV_FILE);
$data = json_decode($data, true);


$langs = array_keys($data['profiles']);

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

$lang = in_array($lang, $langs) ? $lang : $langs[0];

$profile = $data['profiles'][$lang];

$navigation = [
    'Home' => '#home',
    'Profile' => '#profile',
    'Resume' => '#resume',
    'Connect' => '#contact',
];