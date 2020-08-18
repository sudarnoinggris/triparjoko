<div class="container">
    <div class="row mt-3">
        <div class="col-md">
            <div class="card">
                <h5 class="card-header text-white bg-success"><?= $subtitle ?></h5>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <?php //foreach ($users as $data) : ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="userid">userid</label>
                                <input type="text" class="form-control" id="userid" name="userid" value="">
                                <small class="form-text text-danger"> <?= form_error('userid') ?></small>
                            </div>

                            <div class=" form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="">
                                <small class="form-text text-danger"> <?= form_error('nama') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="text" class="form-control" id="password" name="password" value="">
                                <small class=" form-text text-danger"> <?= form_error('password') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" name="email" value="">
                                <small class=" form-text text-danger"> <?= form_error('email') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="telp">telp</label>
                                <input type="text" class="form-control" id="telp" name="telp" value="">
                                <small class=" form-text text-danger"> <?= form_error('telp') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="">
                                <small class=" form-text text-danger"> <?= form_error('alamat') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="level">level</label>
                                <input type="text" class="form-control" id="level" name="level" value="">
                                <small class=" form-text text-danger"> <?= form_error('level') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="is_active">is_active</label>
                                <input type="text" class="form-control" id="is_active" name="is_active" value="">
                                <small class=" form-text text-danger"> <?= form_error('is_active') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="image">image</label>
                                <input type="text" class="form-control" id="image" name="image" value="">
                                <small class=" form-text text-danger"> <?= form_error('image') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="tglbuat">tglbuat</label>
                                <input type="text" class="form-control" id="tglbuat" name="tglbuat" value="">
                                <small class=" form-text text-danger"> <?= form_error('tglbuat') ?></small>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    <?php //endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>