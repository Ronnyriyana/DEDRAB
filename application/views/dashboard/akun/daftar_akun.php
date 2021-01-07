<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Akun</a></li>
                </ol>
            </div>
            <h4 class="page-title">Daftar Akun</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<!-- Table datatable css -->
<link href="<?= base_url();?>assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<div class="row">
    <div class="col-8">
        <div class="card-box">
            <a href="#" type="button" class="btn btn-info waves-effect waves-light"><span class="btn-label"><i class="mdi mdi-account-plus"></i></span>Tambah Akun</a>
            <p class="sub-header"> </p>
            <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th style="width:10%;">No.</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th style="width:10%;"><span class="mdi mdi-tools"></span></th>
                    </tr>
                </thead>


                <tbody>
                <?php $no=1;foreach($akun as $data){?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $data['username']; ?></td>
                    <td><?= $data['level']; ?></td>
                    <td class="text-center">
                        <div class="btn-group dropleft mr-1 mt-1">
                            <button type="button" class="btn btn-secondary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-chevron-left"></i> <i class="mdi mdi-tools"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><span class="mdi mdi-textbox-password"> Ganti Password</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><span class="mdi mdi-delete"> Hapus</span></a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php $no++;}?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Datatable plugin js -->
<script src="<?= base_url();?>assets/libs/datatables/jquery.dataTables.min.js" defer></script>
<script src="<?= base_url();?>assets/libs/datatables/dataTables.bootstrap4.min.js" defer></script>

<script src="<?= base_url();?>assets/libs/datatables/dataTables.responsive.min.js" defer></script>
<script src="<?= base_url();?>assets/libs/datatables/responsive.bootstrap4.min.js" defer></script>


<!-- Datatables init -->
<script src="<?= base_url();?>assets/js/pages/datatables.init.js" defer></script>