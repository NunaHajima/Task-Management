<?= $this->extend('layouts/admin/dashboard/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4">Assign Task</h5>

        <form action="/assigntasks" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="example-product-name">Task Name</label>
                <input type="text" class="form-control" id="taskname" aria-describedby="emailHelp" 
                    placeholder="Give Your Todo Name" required name="taskname">
            </div>

            <div class="form-group">
                <label for="example-product-name">Assign To Employee</label>
                <input type="text" id="assignedto" aria-describedby="emailHelp" 
                >
                </br>

                <select name="category" id="category" >
                    <?php foreach ($dropdown as $row) { ?>
                        <option value="<?= $row['employeename'] ?>" ><?= $row['employeename'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="example-product-name">Date</label>
                <input type="date" class="form-control" id="date" aria-describedby="emailHelp" 
                    placeholder="Choose Your Employee" required name="date">
            </div>

            <div class="form-group">
                    <label for="example-product-name">Comments</label>
                    <textarea class="form-control" id="comment" rows="3"
                        placeholder="Enter Todo Comment" required name="comment"></textarea>  
                </div>
            

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>