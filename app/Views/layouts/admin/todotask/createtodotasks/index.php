<?= $this->extend('layouts/admin/dashboard/base') ?>
<?= $this->section('content') ?>
<div class="container mt-3">
    <div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4"><b>Create Todo Tasks</b></h5>

            <form action="/createtodotasks" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="example-product-name">Task Name</label>
                    <input type="text" class="form-control" id="taskname" aria-describedby="emailHelp" 
                        placeholder="Give Your Todo Name" required name="taskname">
                </div>
                <div class="form-group">
                    <label for="example-product-name">Assigned From</label>
                    <input type="text" class="form-control" id="assignedfrom" aria-describedby="emailHelp" 
                        placeholder="Assigned From" required name="assignedfrom">
                </div>
                <div class="form-group">
                    <label for="example-product-name">Date</label>
                    <input type="date" class="form-control" id="date" aria-describedby="emailHelp" 
                        placeholder="Deadline" required name="date">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Comments</label>
                    <textarea class="form-control" id="comments" rows="3"
                        placeholder="Enter Todo Comment" required name="comments"></textarea>  
                </div>
                <div class="form-group">
                    <label for="example-product-name">Status</label>
                    </br>
                    <select class="form-control"name="status" id="status" required>
                        <option value="On Progress">On Progress</option>
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                    </select>
                 </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>