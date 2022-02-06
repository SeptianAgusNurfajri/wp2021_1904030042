<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title><?= $title; ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- CSS Data Tables -->
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/bootstrap/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/bootstrap/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/icons/material-design-iconic-font/css/materialdesignicons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>img/plugins/chartist/dist/chartist.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/custom.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Tabel Produk -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- column -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table user-table no-wrap" id="example">
                                    <h3 class="page-title mb-4 p-0" page-title>Tabel Produk</h3>
                                    <button type="button" class="btn mb-3 ml-3 btntambah" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i>&nbspTambah Produk</button>
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nama Produk</th>
                                            <th class="border-top-0">Foto</th>
                                            <th class="border-top-0">Harga</th>
                                            <th class="border-top-0">Diskon</th>
                                            <th class="border-top-0">Harga Diskon</th>
                                            <th class="border-top-0">Terjual</th>
                                            <th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($produk as $pd) : ?>
                                            <tr class="tr-produk">
                                                <td class="produk"><?= $i; ?></td>
                                                <td class="produk"><?= $pd['name']; ?></td>
                                                <td><img class="image-produk" src="<?= base_url('assets/img/item/' . $pd['image']); ?>" alt=""></td>
                                                <td class="produk"><?= $pd['disc2']; ?></td>
                                                <td class="produk"><?= $pd['disc']; ?></td>
                                                <td class="produk"><?= $pd['price']; ?></td>
                                                <td class="produk"><?= $pd['rating']; ?></td>
                                                <td class="produk">
                                                    <button type="button" class="badge badge-success ml-3 btn-edit" data-bs-toggle="modal" data-bs-target="#editModal<?= $pd['id']; ?>"><i class="fas fa-pencil-alt"></i></button>
                                                    <a href="<?= base_url(''); ?>crud/delete/<?= $pd['id']; ?>" class="badge badge-danger btn-delete"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Produk -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- <form action="tambah_produk" method="post"> -->
                        <?= form_open_multipart('crud'); ?>
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="text" class="form-control" id="image" name="image">
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                        <div class="form-group mb-3">
                            <label for="diskon" class="form-label">Diskon</label>
                            <input type="text" class="form-control" id="diskon" name="diskon">
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga_diskon" class="form-label">Harga Diskon</label>
                            <input type="text" class="form-control" id="harga_diskon" name="harga_diskon">
                        </div>
                        <div class="form-group mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="text" class="form-control" id="rating" name="rating">
                        </div>
                        <!-- </form> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal -->

        <!-- Modal Edit Produk -->
        <?php
        $no = 0;
        foreach ($produk as $pd) : $no++; ?>
            <div class="modal fade" id="editModal<?= $pd['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?= form_open_multipart('crud/edit'); ?>
                            <div class="form-group mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="hidden" name="id" value="<?= $pd['id']; ?>">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pd['name']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="text" class="form-control" id="image" name="image" value="<?= $pd['image']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" value="<?= $pd['price']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="diskon" class="form-label">Diskon</label>
                                <input type="text" class="form-control" id="diskon" name="diskon" value="<?= $pd['disc']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="harga_diskon" class="form-label">Harga Diskon</label>
                                <input type="text" class="form-control" id="harga_diskon" name="harga_diskon" value="<?= $pd['disc2']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="text" class="form-control" id="rating" name="rating" value="<?= $pd['rating']; ?>">
                            </div>
                            <!-- </form> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Akhir Modal -->

        <!-- ============================================================== -->
        <!-- End Tabel Produk -->
        <!-- ============================================================== -->
    </div>

    <!-- All Javascript -->
    <script src="<?= base_url('assets/'); ?>img/plugins/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/'); ?>img/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/app-style-switcher.js"></script>

    <!--Wave Effects -->
    <script src="<?= base_url('assets/'); ?>js/waves.js"></script>

    <!--Menu sidebar -->
    <script src="<?= base_url('assets/'); ?>js/sidebarmenu.js"></script>

    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/'); ?>js/custom.js"></script>

    <!--flot chart-->
    <script src="<?= base_url('assets/'); ?>img/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url('assets/'); ?>img/plugins/flot.tooltip/js/jquery.flot.tooltip.js"></script>
    <script src="<?= base_url('assets/'); ?>js/pages/dashboards/dashboard1.js"></script>

    <!-- Export Data -->
    <script src="<?= base_url('assets/'); ?>js/tables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/buttons.bootstrap5.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/jszip.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/tables/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: [{
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        },
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        },
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        },
                    },
                    'colvis'
                ],
                // columnDefs: [ {
                //     targets: -1,
                //     visible: false
                // } ]
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>