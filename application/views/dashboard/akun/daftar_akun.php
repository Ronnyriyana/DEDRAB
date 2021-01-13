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

<!-- Sweet Alert-->
<link href="<?= base_url();?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<!-- Table datatable css -->
<link href="<?= base_url();?>assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url();?>assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<div class="row">
    <div class="col-8">
        <div class="card-box">
            <a href="#" data-toggle="modal" data-target=".tambahAkun" type="button" class="btn btn-info waves-effect waves-light"><span class="btn-label"><i class="mdi mdi-account-plus"></i></span>Tambah Akun</a>
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

<div id="modalber" class="modal fade tambahAkun" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myCenterModalLabel"><i class="mdi mdi-account-plus"></i> Tambah Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <form action="<?= site_url('dashboard_akun/tambahAkun');?>" method="POST" class="parsley-examples" data-parsley-validate novalidate>
            <div class="form-group">
                <label for="userName">User Name<span class="text-danger">*</span></label>
                <input type="text" name="username" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
            </div>
            <fieldset disabled>
            <div class="form-group">
                <label for="disabledSelect">Level Akun</label>
                <select id="disabledSelect" class="form-control">
                    <option>Kuwu</option>
                </select>
            </div>
            </fieldset>
            <div class="form-group">
                <label for="pass1">Password<span class="text-danger">*</span></label>
                <input id="pass1" type="password" name="password" placeholder="Password" required class="form-control">
            </div>
            <div class="form-group">
                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" id="passWord2">
            </div>

            <div class="form-group text-right mb-0">
                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    Submit
                </button>
                <button data-dismiss="modal" class="btn btn-secondary waves-effect">
                    Cancel
                </button>
            </div>
			</form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Sweet Alerts js -->
<script src="<?= base_url();?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script>
	//swal berhasil
	<?php if($this->session->flashdata('berhasil')){ ?>
        Swal.fire({title:"Good job!",text:"You clicked the button!",type:"success",confirmButtonColor:"#348cd4"})
	<?php } ?>

	 //swal gagal
	<?php if($this->session->flashdata('gagal')){ ?>
	    Swal.fire({title:"Bad",text:"You clicked the button!",type:"error",confirmButtonColor:"#348cd4"})
	<?php } ?>
</script>

<!-- Plugin js-->
<script src="<?= base_url();?>assets/libs/parsleyjs/parsley.min.js" defer></script>

<!-- Validation init js-->
<script src="<?= base_url();?>assets/js/pages/form-validation.init.js" defer></script>