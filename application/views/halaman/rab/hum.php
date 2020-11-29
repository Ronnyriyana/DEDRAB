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
										<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
											<thead>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
											</tr>
											</thead>


											<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>2011/04/25</td>
												<td>$320,800</td>
											</tr>
											<tr>
												<td>Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>63</td>
												<td>2011/07/25</td>
												<td>$170,750</td>
											</tr>
											<tr>
												<td>Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
												<td>2009/01/12</td>
												<td>$86,000</td>
											</tr>
											<tr>
												<td>Cedric Kelly</td>
												<td>Senior Javascript Developer</td>
												<td>Edinburgh</td>
												<td>22</td>
												<td>2012/03/29</td>
												<td>$433,060</td>
											</tr>
											<tr>
												<td>Airi Satou</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>33</td>
												<td>2008/11/28</td>
												<td>$162,700</td>
											</tr>
											<tr>
												<td>Brielle Williamson</td>
												<td>Integration Specialist</td>
												<td>New York</td>
												<td>61</td>
												<td>2012/12/02</td>
												<td>$372,000</td>
											</tr>
											<tr>
												<td>Herrod Chandler</td>
												<td>Sales Assistant</td>
												<td>San Francisco</td>
												<td>59</td>
												<td>2012/08/06</td>
												<td>$137,500</td>
											</tr>
											<tr>
												<td>Rhona Davidson</td>
												<td>Integration Specialist</td>
												<td>Tokyo</td>
												<td>55</td>
												<td>2010/10/14</td>
												<td>$327,900</td>
											</tr>
											<tr>
												<td>Colleen Hurst</td>
												<td>Javascript Developer</td>
												<td>San Francisco</td>
												<td>39</td>
												<td>2009/09/15</td>
												<td>$205,500</td>
											</tr>
											<tr>
												<td>Sonya Frost</td>
												<td>Software Engineer</td>
												<td>Edinburgh</td>
												<td>23</td>
												<td>2008/12/13</td>
												<td>$103,600</td>
											</tr>
											<tr>
												<td>Jena Gaines</td>
												<td>Office Manager</td>
												<td>London</td>
												<td>30</td>
												<td>2008/12/19</td>
												<td>$90,560</td>
											</tr>
											<tr>
												<td>Quinn Flynn</td>
												<td>Support Lead</td>
												<td>Edinburgh</td>
												<td>22</td>
												<td>2013/03/03</td>
												<td>$342,000</td>
											</tr>
											<tr>
												<td>Charde Marshall</td>
												<td>Regional Director</td>
												<td>San Francisco</td>
												<td>36</td>
												<td>2008/10/16</td>
												<td>$470,600</td>
											</tr>
											<tr>
												<td>Haley Kennedy</td>
												<td>Senior Marketing Designer</td>
												<td>London</td>
												<td>43</td>
												<td>2012/12/18</td>
												<td>$313,500</td>
											</tr>
											<tr>
												<td>Tatyana Fitzpatrick</td>
												<td>Regional Director</td>
												<td>London</td>
												<td>19</td>
												<td>2010/03/17</td>
												<td>$385,750</td>
											</tr>
											<tr>
												<td>Michael Silva</td>
												<td>Marketing Designer</td>
												<td>London</td>
												<td>66</td>
												<td>2012/11/27</td>
												<td>$198,500</td>
											</tr>
											<tr>
												<td>Paul Byrd</td>
												<td>Chief Financial Officer (CFO)</td>
												<td>New York</td>
												<td>64</td>
												<td>2010/06/09</td>
												<td>$725,000</td>
											</tr>
											<tr>
												<td>Gloria Little</td>
												<td>Systems Administrator</td>
												<td>New York</td>
												<td>59</td>
												<td>2009/04/10</td>
												<td>$237,500</td>
											</tr>
											<tr>
												<td>Bradley Greer</td>
												<td>Software Engineer</td>
												<td>London</td>
												<td>41</td>
												<td>2012/10/13</td>
												<td>$132,000</td>
											</tr>
											<tr>
												<td>Dai Rios</td>
												<td>Personnel Lead</td>
												<td>Edinburgh</td>
												<td>35</td>
												<td>2012/09/26</td>
												<td>$217,500</td>
											</tr>
											<tr>
												<td>Jenette Caldwell</td>
												<td>Development Lead</td>
												<td>New York</td>
												<td>30</td>
												<td>2011/09/03</td>
												<td>$345,000</td>
											</tr>
											<tr>
												<td>Yuri Berry</td>
												<td>Chief Marketing Officer (CMO)</td>
												<td>New York</td>
												<td>40</td>
												<td>2009/06/25</td>
												<td>$675,000</td>
											</tr>
											<tr>
												<td>Caesar Vance</td>
												<td>Pre-Sales Support</td>
												<td>New York</td>
												<td>21</td>
												<td>2011/12/12</td>
												<td>$106,450</td>
											</tr>
											<tr>
												<td>Doris Wilder</td>
												<td>Sales Assistant</td>
												<td>Sidney</td>
												<td>23</td>
												<td>2010/09/20</td>
												<td>$85,600</td>
											</tr>
											<tr>
												<td>Angelica Ramos</td>
												<td>Chief Executive Officer (CEO)</td>
												<td>London</td>
												<td>47</td>
												<td>2009/10/09</td>
												<td>$1,200,000</td>
											</tr>
											<tr>
												<td>Gavin Joyce</td>
												<td>Developer</td>
												<td>Edinburgh</td>
												<td>42</td>
												<td>2010/12/22</td>
												<td>$92,575</td>
											</tr>
											<tr>
												<td>Jennifer Chang</td>
												<td>Regional Director</td>
												<td>Singapore</td>
												<td>28</td>
												<td>2010/11/14</td>
												<td>$357,650</td>
											</tr>
											<tr>
												<td>Brenden Wagner</td>
												<td>Software Engineer</td>
												<td>San Francisco</td>
												<td>28</td>
												<td>2011/06/07</td>
												<td>$206,850</td>
											</tr>
											<tr>
												<td>Fiona Green</td>
												<td>Chief Operating Officer (COO)</td>
												<td>San Francisco</td>
												<td>48</td>
												<td>2010/03/11</td>
												<td>$850,000</td>
											</tr>
											<tr>
												<td>Shou Itou</td>
												<td>Regional Marketing</td>
												<td>Tokyo</td>
												<td>20</td>
												<td>2011/08/14</td>
												<td>$163,000</td>
											</tr>
											<tr>
												<td>Michelle House</td>
												<td>Integration Specialist</td>
												<td>Sidney</td>
												<td>37</td>
												<td>2011/06/02</td>
												<td>$95,400</td>
											</tr>
											<tr>
												<td>Suki Burks</td>
												<td>Developer</td>
												<td>London</td>
												<td>53</td>
												<td>2009/10/22</td>
												<td>$114,500</td>
											</tr>
											<tr>
												<td>Prescott Bartlett</td>
												<td>Technical Author</td>
												<td>London</td>
												<td>27</td>
												<td>2011/05/07</td>
												<td>$145,000</td>
											</tr>
											<tr>
												<td>Gavin Cortez</td>
												<td>Team Leader</td>
												<td>San Francisco</td>
												<td>22</td>
												<td>2008/10/26</td>
												<td>$235,500</td>
											</tr>
											<tr>
												<td>Martena Mccray</td>
												<td>Post-Sales support</td>
												<td>Edinburgh</td>
												<td>46</td>
												<td>2011/03/09</td>
												<td>$324,050</td>
											</tr>
											<tr>
												<td>Unity Butler</td>
												<td>Marketing Designer</td>
												<td>San Francisco</td>
												<td>47</td>
												<td>2009/12/09</td>
												<td>$85,675</td>
											</tr>
											<tr>
												<td>Howard Hatfield</td>
												<td>Office Manager</td>
												<td>San Francisco</td>
												<td>51</td>
												<td>2008/12/16</td>
												<td>$164,500</td>
											</tr>
											<tr>
												<td>Hope Fuentes</td>
												<td>Secretary</td>
												<td>San Francisco</td>
												<td>41</td>
												<td>2010/02/12</td>
												<td>$109,850</td>
											</tr>
											<tr>
												<td>Vivian Harrell</td>
												<td>Financial Controller</td>
												<td>San Francisco</td>
												<td>62</td>
												<td>2009/02/14</td>
												<td>$452,500</td>
											</tr>
											<tr>
												<td>Timothy Mooney</td>
												<td>Office Manager</td>
												<td>London</td>
												<td>37</td>
												<td>2008/12/11</td>
												<td>$136,200</td>
											</tr>
											<tr>
												<td>Jackson Bradshaw</td>
												<td>Director</td>
												<td>New York</td>
												<td>65</td>
												<td>2008/09/26</td>
												<td>$645,750</td>
											</tr>
											<tr>
												<td>Olivia Liang</td>
												<td>Support Engineer</td>
												<td>Singapore</td>
												<td>64</td>
												<td>2011/02/03</td>
												<td>$234,500</td>
											</tr>
											<tr>
												<td>Bruno Nash</td>
												<td>Software Engineer</td>
												<td>London</td>
												<td>38</td>
												<td>2011/05/03</td>
												<td>$163,500</td>
											</tr>
											<tr>
												<td>Sakura Yamamoto</td>
												<td>Support Engineer</td>
												<td>Tokyo</td>
												<td>37</td>
												<td>2009/08/19</td>
												<td>$139,575</td>
											</tr>
											<tr>
												<td>Thor Walton</td>
												<td>Developer</td>
												<td>New York</td>
												<td>61</td>
												<td>2013/08/11</td>
												<td>$98,540</td>
											</tr>
											<tr>
												<td>Finn Camacho</td>
												<td>Support Engineer</td>
												<td>San Francisco</td>
												<td>47</td>
												<td>2009/07/07</td>
												<td>$87,500</td>
											</tr>
											<tr>
												<td>Serge Baldwin</td>
												<td>Data Coordinator</td>
												<td>Singapore</td>
												<td>64</td>
												<td>2012/04/09</td>
												<td>$138,575</td>
											</tr>
											<tr>
												<td>Zenaida Frank</td>
												<td>Software Engineer</td>
												<td>New York</td>
												<td>63</td>
												<td>2010/01/04</td>
												<td>$125,250</td>
											</tr>
											<tr>
												<td>Zorita Serrano</td>
												<td>Software Engineer</td>
												<td>San Francisco</td>
												<td>56</td>
												<td>2012/06/01</td>
												<td>$115,000</td>
											</tr>
											<tr>
												<td>Jennifer Acosta</td>
												<td>Junior Javascript Developer</td>
												<td>Edinburgh</td>
												<td>43</td>
												<td>2013/02/01</td>
												<td>$75,650</td>
											</tr>
											<tr>
												<td>Cara Stevens</td>
												<td>Sales Assistant</td>
												<td>New York</td>
												<td>46</td>
												<td>2011/12/06</td>
												<td>$145,600</td>
											</tr>
											<tr>
												<td>Hermione Butler</td>
												<td>Regional Director</td>
												<td>London</td>
												<td>47</td>
												<td>2011/03/21</td>
												<td>$356,250</td>
											</tr>
											<tr>
												<td>Lael Greer</td>
												<td>Systems Administrator</td>
												<td>London</td>
												<td>21</td>
												<td>2009/02/27</td>
												<td>$103,500</td>
											</tr>
											<tr>
												<td>Jonas Alexander</td>
												<td>Developer</td>
												<td>San Francisco</td>
												<td>30</td>
												<td>2010/07/14</td>
												<td>$86,500</td>
											</tr>
											<tr>
												<td>Shad Decker</td>
												<td>Regional Director</td>
												<td>Edinburgh</td>
												<td>51</td>
												<td>2008/11/13</td>
												<td>$183,000</td>
											</tr>
											<tr>
												<td>Michael Bruce</td>
												<td>Javascript Developer</td>
												<td>Singapore</td>
												<td>29</td>
												<td>2011/06/27</td>
												<td>$183,000</td>
											</tr>
											<tr>
												<td>Donna Snider</td>
												<td>Customer Support</td>
												<td>New York</td>
												<td>27</td>
												<td>2011/01/25</td>
												<td>$112,000</td>
											</tr>
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
<script>
	$(#datatable).DataTable();
</script>

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