<?= $this->extend('admin/layout')?>
<?= $this->section('title')?>
Add Test
<?= $this->endSection()?>
<?= $this->section('content')?>
    <div class="row">
        <form method="POST" action="<?= base_url('/admin/test');?>">
            <div class="card">
                    <div class="card-header text-bg-primary">
                        <h3 class="card-title text-light">
                            Add Test
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
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class =form-control placeholder="Enter Name">
                        </div>
                        <div class="mb-2"> 
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select name="jabatan" class="form-select" id="1">
                                <option value="" selected>---pilih---</option>
                                <option value="staff">Staff</option>
                                <option value="direktur">Direktur</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('admin/test'); ?>" class="btn btn-light">Back</a>
                        <button type="submit" class="btn btn-primary float-end">Add</button>
                    </div>
                </div>
            </div>
        </form>

    <?= $this->endSection()?>