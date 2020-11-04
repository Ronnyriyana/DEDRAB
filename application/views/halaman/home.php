<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">&nbsp;</h4>
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
						<option> - Select - </option>
                        <?php foreach($proyek as $data){ ?>
                                <option value="<?= $data['id_proyek'];?>"><?= $data['nama_proyek'];?></option>
                        <?php } ?>
					</select>
				</div>
			<!--isi-->	
		</div>
	</div>
</div>
<!-- end row -->