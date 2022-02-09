<?php
$result = '';

foreach ($jobs as $job) {
    $result .= '<tr>
                        <td>' . $job->id . '</td>
                        <td>' . $job->title . '</td>
                        <td>' . $job->description . '</td>
                        <td>' . ($job->status == 'yes' ? 'Ative' : 'Inative') . '</td>
                        <td>' . date('d/m/Y à\s H:i:s', strtotime($job->date)) . '</td>
                        <td>
                            <a href="edit.php?id=' . $job->id . '"><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="delete.php?id=' . $job->id . '"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                        
                </tr>';
}
?>

<main>

    <section class="">
        <a href="insert.php">
            <button class="btn btn-success">Nova Vaga</button>
        </a>
    </section>

    <section>
        <table class="table mt-3 bg-light">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?= $result ?>
            </tbody>
        </table>
    </section>

</main>