<?= $this->extend('layouts/admin/dashboard/base') ?>
<?= $this->section('content') ?>
<div class="container mt-3">
<div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4"><b>My Employee's Task List</b></h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Task Name</th>
                        <th scope="col ">Assigned To</th>
                        <th scope="col ">Date</th>
                        <th scope="col ">Comments</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 0; ?>
                <?php foreach ($assign as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['taskname'] ?></td>
                        <td><?= $item['assignedto'] ?></td>
                        <td><?= $item['date'] ?></td>
                        <td><?= $item['comment'] ?></td>
                        <td>
                           //
                            
                        </td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                    <form action="/assigntasks/<?= $item['id_assign'] ?>"  method="post" onsubmit="return confirm(`Are you sure?`)">
                                        <a href="/assigntasks/<?= $item['id_assign'] ?>/edit" class="btn btn-info text-white "><i class="fas fa-pencil-alt"></i></a>
                                        <input  type="hidden" name="_method" value="delete" />
                                        <button class="btn btn-danger text-white "  type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <?= $pager->links('assign', 'custom_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>