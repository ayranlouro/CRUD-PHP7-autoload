<?php

date_default_timezone_set('America/Sao_Paulo');

require_once __DIR__ . '/vendor/autoload.php';

include __DIR__ . '/Entity/Jobs.php';
include __DIR__ . '/Database/db.php';

use \App\Entity\Jobs;

$jobs = Jobs::getJobs();
// echo "<pre>"; print_r($jobs); echo "</pre>"; exit;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/forms.php';
include __DIR__ . '/includes/footer.php';
