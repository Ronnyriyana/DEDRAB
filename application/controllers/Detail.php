<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Detail extends CI_Controller {
    public function __construct(){    
		parent::__construct();
        $this->load->library("template");
        $this->load->model("detail_m");
        if(!$this->session->has_userdata('user_logged')){
            redirect('home');
        }
    }
    
	public function index()
	{
        $data = array(
            "title_page" => "Home"
        );
		$this->template->F_Show("halaman/home");  
    }
    
    public function ded($id_desain,$kategori_harga = 1)
	{
        $this->session->set_userdata("id_desain",$id_desain);
        $data = array(
            "title_page" => "Detail DED",
            "ded" => $this->detail_m->GetDed($id_desain),
			"id_desain" => $id_desain
        );
		$this->template->F_Show("halaman/detail/ded",$data);  
    }
    
    public function rab($id_desain)
	{
        $this->session->set_userdata("id_desain",$id_desain);

        if(null !== $this->input->get("kategori_harga")){ 
            $id_kategori_harga = $this->input->get("kategori_harga"); 
            $this->session->set_userdata("id_kategori_harga",$id_kategori_harga);
        }else{
            $id_kategori_harga = 1;
            $this->session->set_userdata("id_kategori_harga",$id_kategori_harga);
        }

        $data = array(
            "title_page" => "Detail RAB",
            "kategori_harga" => $this->detail_m->GetKategoriHarga(),
            "rab_upah" => $this->detail_m->GetRabUpah($id_desain,$id_kategori_harga),
            "rab_material" => $this->detail_m->GetRabMaterial($id_desain,$id_kategori_harga),
            "harga_material" => $this->detail_m->GetHargaMaterial($id_desain,$id_kategori_harga),
            "harga_upah" => $this->detail_m->GetHargaUpah($id_desain,$id_kategori_harga),
            "pekerjaan" => $this->detail_m->GetPekerjaan($id_desain),
            "volume_pekerjaan" => $this->detail_m->GetVolumePekerjaan($id_desain),
            "boq_upah" => $this->detail_m->GetBOQ_upah($id_desain,$id_kategori_harga),
            "boq_material" => $this->detail_m->GetBOQ_material($id_desain),
			"id_desain" => $id_desain
        );
		$this->template->F_Show("halaman/detail/rab",$data);  
    }

    function export()
    {
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getProperties()
        ->setCreator("Dulurdesa.id")
        ->setTitle("Export Data RAB");

        $this->excel_rab($spreadsheet);

        $object_writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Coba_export.xls"');
        $object_writer->save('php://output');
    }

    private function excel_rab($spreadsheet){
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->getColumnDimension("A","B","C","D","E")->setAutoSize(true);
        $sheet->setTitle('RAB');//tab sheet excel
        /*set column names*/
        $table_columns = array("Uraian", "Volume", "Satuan", "Harga Satuan", "Jumlah");//nama kolom
        $column = 1;
        foreach ($table_columns as $field) {
            $sheet->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        //judul rab upah
        $sheet->mergeCells("A2:D2");
        $sheet->setCellValueByColumnAndRow(1, 2, "Belanja Upah");

        //data rab upah
        $rab_upah = $this->detail_m->GetRabUpah($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $excel_row = 3; //now from row 2
        foreach ($rab_upah as $row) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $row['nama_upah']);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $row['volume']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $row['satuan']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $row['harga']);
            $sheet->setCellValueByColumnAndRow(5, $excel_row, $row['jumlah']);
            $excel_row++;
        }

        //judul rab material
        $excel_row++; 
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Belanja Material");

        //data rab material
        $rab_material = $this->detail_m->GetRabMaterial($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $excel_row++; 
        foreach ($rab_material as $row) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $row['nama_material']);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $row['volume']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $row['satuan']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $row['harga']);
            $sheet->setCellValueByColumnAndRow(5, $excel_row, $row['jumlah']);
            $excel_row++;
        }

        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Jumlah Rencana Anggaran Biaya");

    }

}
