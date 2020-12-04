<!-- Magnific -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/magnific-popup/magnific-popup.css"/>
<link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css"/>
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
						<a class="nav-link active" href="#">DED</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('detail/rab/').$id_desain; ?>">RAB</a>
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
						
							<div class="portfolioContainer">
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
						<!-- End row -->
						<!--endDED------------------------------------------------------------------------------------------------>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end row -->

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