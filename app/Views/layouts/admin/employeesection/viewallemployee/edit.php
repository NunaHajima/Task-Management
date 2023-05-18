<?= $this->extend('layouts/admin/dashboard/base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
        <h5 class="mb-4"><b>Update Employee</b></h5>
            <form action="/addemployee/<?= $item['id_employee'] ?>/update" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-product-name">Employee Name</label>
                    <input type="text" class="form-control" disable id="employeename" aria-describedby="emailHelp" 
                        placeholder="Enter Employee Name" value="<?= $item['employeename'] ?>" name="employeename" >
                </div>

                <div class="form-group">
                    <label for="example-product-name">Employee Role</label>
                    <input type="text" class="form-control" id="employeerole" aria-describedby="emailHelp" 
                        placeholder="Enter Employee Role" value="<?= $item['employeerole'] ?>" name="employeerole">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Email Address</label>
                    <input type="text" class="form-control" id="emailaddress" aria-describedby="emailHelp" 
                        placeholder="Enter Email Address" value="<?= $item['emailaddress'] ?>" disabled="disabled" name="emailaddress">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Password</label>
                    <input type="text" class="form-control" id="password" aria-describedby="emailHelp" 
                        placeholder="Enter Password" value="<?= $item['passwordtampil'] ?>" disabled="disabled" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>