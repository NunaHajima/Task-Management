<?= $this->extend('layouts/admin/dashboard/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4"><b>Update Assign</b></h5>

            <form action="/assigntasks/<?= $item['id_assign'] ?>/update" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-product-name">Task Name</label>
                    <input type="text" class="form-control" id="taskname" aria-describedby="emailHelp" 
                        placeholder="Give Your Todo Name" value="<?= $item['taskname'] ?>"  name="taskname">
                </div>
                <div class="form-group">
                    <label for="example-product-name">Assigned To</label>
                    <input type="text" class="form-control" id="assignedto" aria-describedby="emailHelp" 
                        placeholder="Assigned From" value="<?= $item['assignedto'] ?>" name="assignedto">
                </div>
                <div class="form-group">
                    <label for="example-product-name">Date</label>
                    <input type="date" class="form-control" id="date" aria-describedby="emailHelp" 
                        placeholder="Deadline" value="<?= $item['date'] ?>" disabled="disabled" name="date">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Comments</label>
                    <textarea class="form-control" id="comment" rows="3"
                        placeholder="Enter Todo Comment"  name="comment"><?= $item['comment'] ?></textarea>  
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