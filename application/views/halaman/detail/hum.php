<!-- Magnific -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/magnific-popup/magnific-popup.css"/>
<link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css"/>
<!-- Table datatable css -->
<link href="<?= base_url(); ?>assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><i class="mdi mdi-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Desain</a></li>
                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Detail</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
	<div class="col-12">
		<div class="row">
			<div class="col-5">
				<ul class="nav nav-pills" id="myTabalt" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="ded-tab1" data-toggle="tab" href="#ded"
							role="tab" aria-controls="ded" aria-expanded="true">DED</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="rab-tab1" data-toggle="tab" href="#rab"
							role="tab" aria-controls="rab">RAB</a>
					</li>
				</ul>
			</div>
			<div class="col-7 text-right">
				<!--button share/print/download-->
				<a href="whatsapp://send?text=<?= base_url('index.php/rab/hum/').$id_desain; ?>" type="button" class="btn waves-effect waves-light btn-info btn-lg"><i class="mdi mdi-whatsapp"></i></a>
				<button onClick="myPrint()" class="btn waves-effect waves-light btn-info btn-lg"><i class="mdi mdi-printer"></i></button>
				<a href="<?= base_url(''); ?>assets/8.RAB-POSYANDU.pdf" type="button" class="btn waves-effect waves-light btn-info btn-lg"><i class="mdi mdi-file-download-outline"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="tab-content text-muted" id="myTabaltContent">
					<div role="tabpanel" class="tab-pane fade in active show" id="ded" aria-labelledby="ded-tab">
						<!--DED--------------------------------------------------------------------------------------------------->
						<div class="port text-center mb-3">
							<div class="portfolioContainer row">
							<?php foreach($ded as $data){ ?>
								<div class="col-md-6 col-xl-4 natural personal">
									<div class="gallery-box">
										<a href="<?= base_url(); ?>assets/images/ded/<?= $data['foto'];?>" class="image-popup" title="Screenshot-1">
											<img src="<?= base_url(); ?>assets/images/ded/<?= $data['foto'];?>" class="thumb-img img-fluid" alt="work-thumbnail">
										</a>
										<div class="gal-detail p-3">
											<p class="text-muted mb-0"><?= $data['nama_ded'];?></p>
										</div>
									</div>
								</div>
							<?php } ?>
							</div><!-- end portfoliocontainer-->
						</div> <!-- End row -->
						<!--endDED------------------------------------------------------------------------------------------------>
					</div>
					<div class="tab-pane fade" id="rab" role="tabpanel" aria-labelledby="rab-tab">
						<!--RAB--------------------------------------------------------------------------------------------------->
						<div class="card">
							<div class="card-header">
								<!--Link-->
								<ul class="nav nav-tabs card-header-tabs" id="myTabalt" role="tablist">
									<li class="nav-item">
										<a class="nav-link" id="hm-tab1" data-toggle="tab" href="#hm"
											role="tab" aria-controls="hm">Harga Material</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="ahsp-tab1" data-toggle="tab" href="#ahsp"
											role="tab" aria-controls="ahsp">AHSP</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="hsp-tab1" data-toggle="tab" href="#hsp"
											role="tab" aria-controls="hsp">HSP</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="rekapitulasi-tab1" data-toggle="tab" href="#rekapitulasi"
											role="tab" aria-controls="rekapitulasi">Rekapitulasi</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="boq-tab1" data-toggle="tab" href="#boq"
											role="tab" aria-controls="boq">BOQ</a>
									</li>
								</ul>
							</div>
							<!--endLink-->
							<div class="card-body">
								<div class="tab-content text-muted" id="myTabaltContent">
									<div role="tabpanel" class="tab-pane fade in active show" id="hm" aria-labelledby="HM-tab">
										<img src="<?= base_url();?>assets/images/pdf/RAB-page-001-725x1024.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
										<img src="<?= base_url();?>assets/images/pdf/RAB-page-002-725x1024.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
										<img src="<?= base_url();?>assets/images/pdf/RAB-page-003-725x1024.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
									</div>
									<div class="tab-pane fade" id="ahsp" role="tabpanel" aria-labelledby="ahsp-tab">
										AHSP
									</div>
									<div class="tab-pane fade" id="hsp" role="tabpanel" aria-labelledby="hsp-tab">
										HSP
									</div>
									<div class="tab-pane fade" id="rekapitulasi" role="tabpanel" aria-labelledby="rekapitulasi-tab">
										Rekapitulasi
									</div>
									<div class="tab-pane fade" id="boq" role="tabpanel" aria-labelledby="boq-tab">
										<table id="datatable" class="table table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
											<thead style="background:silver;">
											<tr>
												<th>No.</th>
												<th>Nama Upah</th>
												<th>BOQ</th>
												<th>RAB</th>
											</tr>
											</thead>

											<tbody>
											<?php $no=1;foreach($boq_upah as $data){?>
											<tr>
												<td><?= $no++;?></td>
												<td><?= $data['nama_upah'];?></td>
												<td><?= $data['boq'];?></td>
												<td><?= $data['rab'];?></td>
											</tr>
											<?php } ?>
											</tbody>


											<thead style="background:silver;">
											<tr>
												<th>No.</th>
												<th>Nama Material</th>
												<th>BOQ</th>
												<th>RAB</th>
											</tr>
											</thead>
											<tbody>
											<?php $no=1;foreach($boq_material as $data){?>
											<tr>
												<td><?= $no++;?></td>
												<td><?= $data['nama_material'];?></td>
												<td><?= $data['boq'];?></td>
												<td><?= $data['rab'];?></td>
											</tr>
											<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!--endContent-->
						</div>
						<!--endRAB------------------------------------------------------------------------------------------------>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end row -->
<!-- Datatable plugin js -->
<script src="<?= base_url(); ?>assets/libs/datatables/jquery.dataTables.min.js" defer></script>
<script src="<?= base_url(); ?>assets/libs/datatables/dataTables.bootstrap4.min.js" defer></script>

<script src="<?= base_url(); ?>assets/libs/datatables/dataTables.responsive.min.js" defer></script>
<script src="<?= base_url(); ?>assets/libs/datatables/responsive.bootstrap4.min.js" defer></script>

<script src="<?= base_url(); ?>assets/libs/datatables/dataTables.buttons.min.js" defer></script>
<script src="<?= base_url(); ?>assets/libs/datatables/buttons.bootstrap4.min.js" defer></script>

<script src="<?= base_url(); ?>assets/libs/jszip/jszip.min.js" defer></script>
<script src="<?= base_url(); ?>assets/libs/pdfmake/pdfmake.min.js" defer></script>
<script src="<?= base_url(); ?>assets/libs/pdfmake/vfs_fonts.js" defer></script>

<script src="<?= base_url(); ?>assets/libs/datatables/buttons.html5.min.js" defer></script>
<script src="<?= base_url(); ?>assets/libs/datatables/buttons.print.min.js" defer></script>

<script src="<?= base_url(); ?>assets/libs/datatables/dataTables.keyTable.min.js" defer></script>
<script src="<?= base_url(); ?>assets/libs/datatables/dataTables.select.min.js" defer></script>

<!-- Datatables init -->
<script src="<?= base_url(); ?>assets/js/pages/datatables.init.js" defer></script>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
	function myPrint(){
	  printJS('<?= base_url(); ?>assets/8.RAB-POSYANDU.pdf');
	}
</script>
<!-- isotope filter plugin -->
<script src="<?= base_url(); ?>assets/libs/isotope/isotope.pkgd.min.js" defer></script>

<!-- Magnific -->
<script src="<?= base_url(); ?>assets/libs/magnific-popup/jquery.magnific-popup.min.js" defer></script>

<!-- Gallery Init-->
<script src="<?= base_url(); ?>assets/js/pages/gallery.init.js" defer></script>