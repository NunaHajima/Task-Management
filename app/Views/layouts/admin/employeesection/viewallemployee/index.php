<?= $this->extend('layouts/admin/dashboard/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4"><b>Registered Employees</b></h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Employee Name</th>
                        <th scope="col ">Role</th>
                        <th scope="col ">Email</th>
                        <th scope="col ">Password</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 0; ?>
                <?php foreach ($employee as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['employeename'] ?></td>
                        <td><?= $item['employeerole'] ?></td>
                        <td><?= $item['emailaddress'] ?></td>
                        <td><?= $item['password'] ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>