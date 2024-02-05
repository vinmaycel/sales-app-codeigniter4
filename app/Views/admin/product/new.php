<?= $this->extend('admin/layout')?>
<?= $this->section('title')?>
Add Category
<?= $this->endSection()?>
<?= $this->section('content')?>
    <div class="row">
        <form method="POST" action="<?= base_url('/admin/product');?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card">
                    <div class="card-header text-bg-primary">
                        <h3 class="card-title text-light">
                            Add Product
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
                        <div class=row>
                            <div class = "col-md-6">
                                <div class="mb-2">
                                    <label class="form-label "for="category_id">Categories</label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <option>Choose Category</option>
                                        <?php foreach ($categories as $category): ?>
                                            <option value="<?= $category['id']; ?>"<?= (old('category_id')==$category['id']) ? 'selected' :'' ?>>
                                            <?= $category['name']?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="name">Nama</label>
                                    <input type="text" name="name" id="name" class ="form-control" placeholder="Enter Name"
                                        value="<?= old('name'); ?>">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="price">Price</label>
                                    <input type="number" name="price" id="price" class ="form-control" placeholder="Enter Price"
                                        value="<?= old('price'); ?>">
                                </div>
                            </div>
                        <div class = "col-md-6">
                            <div class="mb-2">
                                    <label class="form-label" for="sku">SKU</label>
                                    <input type="text" name="sku" id="sku" class ="form-control" placeholder="Enter SKU"
                                        value="<?= old('sku'); ?>">
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="status">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="active" <?= (old('status')=='active') ? 'selected' : ''?>>Active
                                    </option>
                                    <option value="inactive" <?= (old('status')=='inactive') ? 'selected' : ''?>>Inactive
                                    </option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class = "col-12">
                            <label class="form-label" for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter Description" rows = 5><?= old('description'); ?></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('admin/product'); ?>" class="btn btn-light">Back</a>
                        <button type="submit" class="btn btn-primary float-end">Add Product</button>
                    </div>
                </div>
            </div>
        </form>

    <?= $this->endSection()?>