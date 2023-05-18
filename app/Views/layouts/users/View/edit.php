<?= $this->extend('layouts/users/dashboardU/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4"><b>Update My Todo</b></h5>

            <form action="/create/<?= $item['id_users'] ?>/update" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-product-name">Task Name</label>
                    <input type="text" class="form-control" id="taskname" aria-describedby="emailHelp" 
                        placeholder="Give Your Todo Name" value="<?= $item['taskname'] ?>"  name="taskname">
                </div>
                <div class="form-group">
                    <label for="example-product-name">Assigned From</label>
                    <input type="text" class="form-control" id="assignedfrom" aria-describedby="emailHelp" 
                        placeholder="Assigned From" value="<?= $item['assignedfrom'] ?>" disabled="disabled" name="assignedfrom">
                </div>
                <div class="form-group">
                    <label for="example-product-name">Date</label>
                    <input type="date" class="form-control" id="date" aria-describedby="emailHelp" 
                        placeholder="Deadline" value="<?= $item['date'] ?>" disabled="disabled" name="date">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Comments</label>
                    <textarea class="form-control" id="comments" rows="3"
                        placeholder="Enter Todo Comment"  name="comments"><?= $item['comments'] ?></textarea>  
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>