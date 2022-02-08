<?php

namespace App\Entity;

include __DIR__ . '/Database/db.php';

use \App\Database\Database;

class Jobs
{
    public $id;
    public $title;
    public $description;
    public $status;
    public $date;

    public function insert()
    {
        $this->date = date('Y-m-d H:i:s');

        $objDatabase = new Database('jobs');

        $this->id = $objDatabase->insert([
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'date' => $this->date
        ]);

        echo "<pre>"; print_r($this); echo "</pre>"; exit;
    }
}
