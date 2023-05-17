<?= $this->extend('layouts/users/dashboardU/base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
<div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4">My Todo Task List</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Task Name</th>
                        <th scope="col ">Assigned From</th>
                        <th scope="col ">Date</th>
                        <th scope="col ">Comments</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 0; ?>
                <?php foreach ($users as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['taskname'] ?></td>
                        <td><?= $item['assignedfrom'] ?></td>
                        <td><?= $item['date'] ?></td>
                        <td><?= $item['comments'] ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>