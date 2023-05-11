<?= $this->extend('layouts/admin/todotask/viewmytodo/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4">Assign Task</h5>

        <form action="/product" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="example-product-name">Task Name</label>
                <input type="text" class="form-control" id="taskname" aria-describedby="emailHelp" 
                    placeholder="Give Your Todo Name" required name="taskname">
            </div>

            <div class="form-group">
                <label for="example-product-name">Comments</label>
                <input type="text" class="form-control" id="comments" aria-describedby="emailHelp" 
                    placeholder="Enter Todo Comment" required name="comments">
            </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>