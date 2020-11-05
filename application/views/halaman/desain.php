<style>
	.overlay {
    position:absolute;
    top:0;
    left:0;
    z-index:1;
	background:rgba(0,0,0,0.2);
	}	
	.overlay p {
	 color:white;
	 padding-left:5px;
	 padding-right:5px;
	}
</style>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><i class="mdi mdi-home"></i></a></li>
                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Desain</a></li>
                </ol>
            </div>
            <h4 class="page-title"><?= isset ($proyek)?$proyek:'' ?></i></h4>
        </div>
    </div>
</div>
<!-- end page title --> 

<div class="row">
    <div class="col-sm-12">

        <div class="row">
			<?php foreach($desain as $data){?>
            <div class="col-lg-9">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-7">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video width="320" height="240" controls muted>
                                <source src="<?php echo base_url(); ?>assets/videos/<?= $data['video'];?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
							<div class="overlay">
								<p><?= $data['nama_desain'];?></p>
							</div>
                        </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card-body py-2">
                                <h5 class="card-title">Spek :</h5>
                                <p class="card-text"><?= $data['spek']; ?></p>
                                <p class="card-text">
                                    <a href="whatsapp://send?text=<?= base_url('index.php/rab/hum/').$data['id_desain']; ?>" type="button" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-email-outline mr-1"></i> <span>Share</span></a>
                                    <a href="<?= base_url('index.php/rab/hum/').$data['id_desain']; ?>" type="button" class="btn btn-primary btn-rounded waves-effect waves-light" style="width:25%;">DED</a>
                                    <a href="<?= base_url('index.php/rab/hum/').$data['id_desain']; ?>" type="button" class="btn btn-primary btn-rounded waves-effect waves-light" style="width:25%;">RAB</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
			<?php } ?>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end row -->