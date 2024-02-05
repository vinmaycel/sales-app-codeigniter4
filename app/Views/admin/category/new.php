<?= $this->extend('admin/layout')?>
<?= $this->section('title')?>
Add Category
<?= $this->endSection()?>
<?= $this->section('content')?>
    <div class="row">
        <form method="POST" action="<?= base_url('/admin/category');?>">
            <div class="card">
                    <div class="card-header text-bg-primary">
                        <h3 class="card-title text-light">
                            Add category
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()):?>
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <?php foreach (validation_errors() as $error):?>
                                        <li>
                                            <?= $error ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>

                        <div class="mb-2">
                            <label for="name" class="form-label">Category*</label>
                            <input type="text" name="name" class =form-control placeholder="Enter Category">
                        </div>
                        <div class="mb-2"> 
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-select" id="1">
                                <option value="" selected>---pilih---</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('admin/category'); ?>" class="btn btn-light">Back</a>
                        <button type="submit" class="btn btn-primary float-end">Add</button>
                    </div>
                </div>
            </div>
        </form>

    <?= $this->endSection()?>