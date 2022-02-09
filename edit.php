<?php

require __DIR__ . '/vendor/autoload.php';

include __DIR__ . '/Entity/Jobs.php';

include __DIR__ . '/Database/db.php';

use \App\Entity\Jobs;

use \App\Database\Database;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}else{
    header('location: index.php?edit=ok');
    exit;
}

$obj = Jobs::getJobs($_GET['id']);

echo "<pre>"; print_r($obj); echo "</pre>"; exit;

if (isset($_POST['title'], $_POST['description'], $_POST['status'])) {
    $newJob = new Jobs;
    $newJob->title = $_POST['title'];
    $newJob->description = $_POST['description'];
    $newJob->status = $_POST['status'];
    $newJob->insert();

    header('location: index.php?status=success');
    exit;
}

// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/insert.inc.php';
include __DIR__ . '/includes/footer.php';
