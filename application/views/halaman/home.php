<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active"><a href="javascript: void(0);"><i class="mdi mdi-home"></i></a></li>
                </ol>
            </div>
            <h4 class="page-title"><i class="mdi mdi-home"></i></h4>
        </div>
    </div>
</div>
<!-- end page title --> 

<div class="row justify-content-center">
	<div class="col-lg-6">
		<div class="card card-body text-center">
			<h5 class="card-title">Pilih Proyek</h5>
			<!--isi-->
                <form action="<?php echo base_url('index.php/desain/pilih_desain'); ?>" method="POST" enctype="multipart/form-data">
				<div>
					<select onchange="this.form.submit()" name="proyek" class="form-control" data-toggle="select2">
						<option>Select</option>
						<option value="01">Posyandu</option>
						<option value="03">Gedung Serba Guna</option>
						<option value="04">Balai Pertemuan Kampung</option>
						<option value="05">Kantor Babinsa/Trimitra</option>
						<option value="06">Kantor Bumdes</option>
						<option value="07">Jalan Lingkungan</option>
						<option value="08">Rabat Beton Gang Desa</option>
						<option value="09">Drainase Jalan Lingkungan</option>
					</select>
				</div>
			<!--isi-->	
		</div>
	</div>
</div>
<!-- end row -->