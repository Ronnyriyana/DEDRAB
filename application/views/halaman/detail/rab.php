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
						<a class="nav-link" href="<?= site_url('detail/ded/').$id_desain; ?>">DED</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">RAB</a>
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
					<div class="tab-pane fade in active show" id="rab" role="tabpanel" aria-labelledby="rab-tab">
						<!--RAB--------------------------------------------------------------------------------------------------->
						<div class="card">
							<div class="card-header">
								<!--Link-->
								<ul class="nav nav-tabs card-header-tabs" id="myTabalt" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="rabt-tab1" data-toggle="tab" href="#rabt"
											role="tab" aria-controls="rabt">RAB</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="hm-tab1" data-toggle="tab" href="#hm"
											role="tab" aria-controls="hm">Harga Upah Material</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="ahsp-tab1" data-toggle="tab" href="#ahsp"
											role="tab" aria-controls="ahsp">AHSP</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="volume-tab1" data-toggle="tab" href="#volume"
											role="tab" aria-controls="volume">Volume Pekerjaan</a>
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
									<div class="tab-pane fade in active show" id="rabt" role="tabpanel" aria-labelledby="rabt-tab">
									<h3 class="text-center">Racangan Anggaran Biaya <?= $_SESSION['nama_proyek'];?></h3>
										<form action="<?= base_url('index.php/detail/rab/').$this->session->userdata('id_desain'); ?>" method="GET" enctype="multipart/form-data">
											<div class="col-md-4">
												<select onchange="this.form.submit()" name="kategori_harga" class="form-control" data-toggle="select2">
													<option> - Select - </option>
													<?php foreach($kategori_harga as $data){?>
															<option value="<?= $data['id_kategori_harga'];?>" <?= ($data['id_kategori_harga'] == $this->session->userdata('id_kategori_harga') ? 'selected': '')?>><?= $data['nama_kategori_harga'];?></option>
													<?php } ?>
												</select>
											</div>
											<div class="clearifx">&nbsp;</div>
										</form>
										<table class="table table-bordered">							
											<thead class="thead-light">
											<tr>
												<th>Uraian</th>
												<th>Volume</th>
												<th>Satuan</th>
												<th>Harga Satuan</th>
												<th>Jumlah</th>
											</tr>
											</thead>
											<tbody>
												<tr>
													<td colspan="5"><b>Belanja Upah</b></td>
												</tr>
												<?php $sum1=0;foreach($rab_upah as $data){ ?>
												<tr>
													<td><?= $data['nama_upah'];?></td>
													<td><?= $data['volume'];?></td>
													<td><?= $data['satuan'];?></td>
													<td>Rp. <?= number_format($data['harga'],2,',','.');?></td>
													<td>Rp. <?= number_format($data['jumlah'],2,',','.');?></td>
												</tr>
												<?php $sum1+=$data['jumlah'];} ?>
												<tr>
													<td colspan="5"></td>
												</tr>


												<tr>
													<td colspan="5"><b>Belanja Material</b></td>
												</tr>
												<?php $sum2=0;foreach($rab_material as $data){ ?>
												<tr>
													<td><?= $data['nama_material'];?></td>
													<td><?= $data['volume'];?></td>
													<td><?= $data['satuan'];?></td>
													<td>Rp. <?= number_format($data['harga'],2,',','.');?></td>
													<td>Rp. <?= number_format($data['jumlah'],2,',','.');?></td>
												</tr>
												<?php $sum2+=$data['jumlah'];} 
													$jumlah = $sum1+$sum2;
													$ppn = ($sum1+$sum2)*10/100;
													$pph = ($sum1+$sum2)*1.5/100;
													$total = $jumlah+$ppn+$pph;
												?>
												<tr>
													<td colspan="4"><b>Jumlah Rencana Anggaran Biaya</b></td>
													<td>Rp. <?= number_format($jumlah,2,',','.');?></td>
												</tr>
												<tr>
													<td colspan="4"><b>PPN 10%</b></td>
													<td>Rp. <?= number_format($ppn,2,',','.');?></td>
												</tr>
												<tr>
													<td colspan="4"><b>PPh 1,5%</b></td>
													<td>Rp. <?= number_format($pph,2,',','.');?></td>
												</tr>
												<tr>
													<td colspan="4"><b>Biaya Kegiatan</b></td>
													<td>Rp. <?= number_format($total,2,',','.');?></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="hm" role="tabpanel" aria-labelledby="HM-tab">
										<h3 class="text-center">Harga Upah & Material <?= $_SESSION['nama_proyek'];?></h3>
										<form action="<?= base_url('index.php/detail/rab/').$this->session->userdata('id_desain'); ?>" method="GET" enctype="multipart/form-data">
											<div class="col-md-4">
												<select onchange="this.form.submit()" name="kategori_harga" class="form-control" data-toggle="select2">
													<option> - Select - </option>
													<?php foreach($kategori_harga as $data){ ?>
															<option value="<?= $data['id_kategori_harga'];?>" <?= ($data['id_kategori_harga'] == $this->session->userdata('id_kategori_harga') ? 'selected': '')?>><?= $data['nama_kategori_harga'];?></option>
													<?php } ?>
												</select>
											</div>
											<div class="clearifx">&nbsp;</div>
										</form>
										<table class="table table-bordered">							
											<thead class="thead-light">
											<tr>
												<th>No.</th>
												<th>Uraian Bahan</th>
												<th>Satuan</th>
												<th>Harga Satuan</th>
											</tr>
											</thead>
											<tbody>
												<tr>
													<td colspan="4"><b>Harga Material</b></td>
												</tr>
												<?php $no=1;foreach($harga_material as $data){ ?>
												<tr>
													<td><?= $no++;?></td>
													<td><?= $data['nama_material'];?></td>
													<td><?= $data['satuan'];?></td>
													<td>Rp. <?= number_format($data['harga'],2,',','.');?></td>
												</tr>
												<?php } ?>
											</tbody>
											<tbody>
												<tr>
													<td colspan="4"><b>Harga Upah</b></td>
												</tr>
												<?php $no=1;foreach($harga_upah as $data){ ?>
												<tr>
													<td><?= $no++;?></td>
													<td><?= $data['nama_upah'];?></td>
													<td><?= $data['satuan'];?></td>
													<td>Rp. <?= number_format($data['harga'],2,',','.');?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="ahsp" role="tabpanel" aria-labelledby="ahsp-tab">
										<h3 class="text-center">Analisis Harga Satuan Pekerjaan <?= $_SESSION['nama_proyek'];?></h3>
										<table class="table table-bordered">							
											<thead class="thead-light">
											<tr>
												<th>No.</th>
												<th>Uraian</th>
												<th>Satuan</th>
												<th>Koefisien</th>
											</tr>
											</thead>
											<tbody>
                                                <?php $no=1;foreach($pekerjaan as $data){?>
                                                <tr>
                                                    <td rowspan="<?= $data['rowspan']; ?>"><?= $no++; ?></td>
                                                    <td colspan="3"><b><?= $data['nama_pekerjaan'];?></b></td>
                                                </tr>
                                                <?= $data['upah'];?>
                                                <?= $data['material'];?>
                                                <?php } ?>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="volume" role="tabpanel" aria-labelledby="volume-tab">
									<h3 class="text-center">Volume Pekerjaan <?= $_SESSION['nama_proyek'];?></h3>	
									<table class="table table-bordered">							
											<thead class="thead-light">
											<tr>
												<th>No.</th>
												<th>Uraian Pekerjaan</th>
												<th>Volume Pekerjaan</th>
												<th>Satuan</th>
											</tr>
											</thead>
											<tbody>
												<?php $no=1;foreach($volume_pekerjaan as $data){ ?>
												<tr>
													<td><?= $no++;?></td>
													<td><?= $data['nama_pekerjaan'];?></td>
													<td><?= $data['volume'];?></td>
													<td><?= $data['satuan'];?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="boq" role="tabpanel" aria-labelledby="boq-tab">
										<h3 class="text-center">Build Of Quality <?= $_SESSION['nama_proyek'];?></h3>
										<table id="boq-table" class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
											<thead class="thead-light">
											<tr>
												<th colspan="2">Kebutuhan Upah</th>
											</tr>
											</thead>

											<tbody>
											<?php $no=1;foreach($boq_upah as $data){?>
											<tr>
												<td><?= $data['nama_upah'];?></td>
												<td><?= $data['boq'];?></td>
											</tr>
											<?php } ?>
											</tbody>


											<thead class="thead-light">
											<tr>
												<th colspan="2">Kebutuhan Material</th>
											</tr>
											</thead>
											<tbody>
											<?php foreach($boq_material as $data){?>
											<tr>
												<td><?= $data['nama_material'];?></td>
												<td><?= $data['boq'];?></td>
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

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
	function myPrint(){
	  printJS('<?= base_url(); ?>assets/8.RAB-POSYANDU.pdf');
	}
</script>