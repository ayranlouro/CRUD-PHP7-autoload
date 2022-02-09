<?php

namespace App\Entity;

// include_once __DIR__ . '/Database/db.php';

use \App\Database\Database;
use \PDO;

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

        return true;
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;
    }

    public static function getJobs($where = null, $order = null, $limit = null)
    {       
        // $obj = new Database('jobs');
        // return $obj;
        return (new Database('jobs'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
