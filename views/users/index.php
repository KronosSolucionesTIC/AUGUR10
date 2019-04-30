<?php
define('HOMEDIR', __DIR__);

include '../header2.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'users';
if (isset($_POST['btnSearch'])) {
    $search     = true;
    $dataSearch = $_POST['dataSearch'];
}
include $page . '.php';
include '../footer2.php';
