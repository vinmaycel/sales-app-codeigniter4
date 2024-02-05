<?= $this->extend('admin/layout')?>
<?= $this->section('title')?>
Detail Test
<?= $this->endSection()?>
<?= $this->section('content')?>
    <div class="row">
        <form method="POST" action="<?= base_url('/admin/test');?>">
            <div class="card">
                    <div class="card-header text-bg-primary">
                        <h3 class="card-title text-light">
                            Detail Test
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="name" class="form-label">Test*</label>
                            <input type="text" name="name" class =form-control value="<?= $Test['name']; ?>" disabled>
                        </div>
                        <div class="mb-2"> 
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-select" disabled>
                                <option value="" selected>---pilih---</option>
                                <option value="staff" <?= (old('status', $Test['status']) == 'staff') ? 'selected' : ''?>>
                                staff</option>
                                <option value="direktur" <?= (old('status', $Test['status']) == 'direktur') ? 'selected' : '' ?>>
                                direktur</option>     
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('admin/test'); ?>" class="btn btn-light">Back</a>
                    </div>
                </div>
            </div>
        </form>

    <?= $this->endSection()?>