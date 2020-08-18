<!-- Begin Page Content -->
 
<div class="container-fluid">


    <!-- Page Heading -->
    <div class='row'>
        <div class='col-lg'>
            <div class="card">
                <h5 class="card-header text-white bg-primary"><?= $title; ?></h5>
                <div class="card-body ">

            
                    <a href="<?= base_url('tables') . '/add'; ?>" class="btn btn-success mb-3"> Add Form</a>
                    <div class="table-responsive">
                    <table id="dataTable" class="table table-hover table-bordered" >
                        <thead class="text-white bg-primary">
                            <tr>

                                <th scope="col">No</th>
                                <th scope="col">Kolom 1</th>
                                <th scope="col">Kolom 2</th>
                                <th scope="col">Kolom 3</th>
                                <th scope="col">Kolom 4</th>
                                <th scope="col">Kolom 5</th>
                                <th scope="col">Kolom 6</th>

                            </tr>
                        </thead>
                        <tbody>

                           
                                <tr>

                                    <td><?='Test'; ?></td>
                                    <td><?='Test'; ?></td>
                                    <td><?='Test'; ?></td>
                                    <td><?='Test'; ?></td>
                                    <td><?='Test'; ?></td>
                                    <td><?='Test'; ?></td>
                                    <td>
                                        <a href="<?= base_url('tables/edit/1')  ?>" class="btn btn-sm btn-success">edit</a>
                                        <a href="<?= base_url('tables/delete/1')  ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data');">delete</a>
                                    </td>
                                </tr>


                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Page level custom scripts -->
<script src="<?= base_url('assets') ?>/js/demo/datatables-demo.js"></script>