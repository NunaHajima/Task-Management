<?= $this->extend('layouts/admin/employeesection/viewallemployee/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4">Daftar Produk</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Employee Name</th>
                        <th scope="col ">Role</th>
                        <th scope="col ">Email</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>