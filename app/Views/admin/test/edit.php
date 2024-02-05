<?= $this->extend('admin/layout')?>
<?= $this->section('title')?>
Edit Test
<?= $this->endSection()?>
<?= $this->section('content')?>
    <div class="row">
        <form method="POST" action="<?= base_url('admin/test/'.$Test['id']);?>">
            <?=csrf_field(); ?>
            <input type="hidden" name="_method" value="PUT">
            <div class="card">
                    <div class="card-header text-bg-primary">
                        <h3 class="card-title text-light">
                            Edit Test
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
                            <label for="name" class="form-label">Test</label>
                            <input type="text" name="name" class="form-control" value="<?= old('name',$Test['name']); ?>">
                        </div>
                        <div class="mb-2"> 
                            <label for="jabatan" class="form-label">jabatan</label>
                                <select name="jabatan" class="form-select">
                                    <option value="" <?= (old('jabatan', $Test['jabatan']) == '') ? 'selected' : ''?>>
                                    ==Pilih==</option>
                                    <option value="staff" <?= (old('jabatan', $Test['jabatan']) == 'staff') ? 'selected' : ''?>>
                                    staff</option>
                                    <option value="direktur" <?= (old('jabatan', $Test['jabatan']) == 'direktur') ? 'selected' : '' ?>>
                                    direktur</option>     
                                </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('admin/test'); ?>" class="btn btn-light">Back</a>
                        <button type="submit" class="btn btn-primary float-end">Edit</button>
                    </div>
                </div>
            </div>
        </form>

    <?= $this->endSection()?>