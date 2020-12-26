<?php 
class Export{
    protected $ci;
    
    function __construct(){
        $this->ci = &get_instance();
        $this->ci->load->model("detail_m");
        $this->detail_m = $this->ci->detail_m; 
    }

    function style($style){
        switch ($style) {
            case "title":
                return $styleArray = [
                    'font' => [
                        'bold' => true,
                        'size' => 14
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ]
                ];
                break;
            case "headerTable":
                return $styleArray = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'color' => array('rgb' => 'E5E4E2' )
                    ],
                ];
                break;
            case "bold":
                return $styleArray = [
                    'font' => [
                        'bold' => true
                    ],
                ];
                break;
            case "satu_tabel":
                return $styleArray = [
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN ] //fine border
                    ],
                ];
                break;
            case "rata_tengah":
                return $styleArray = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ]
                ];
                break;
            case "uang":
                return $styleArray = [
                    'numberFormat' => [
                        'formatCode' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
                    ]
                ];
                break;
            default:
                echo "Bar\n";
                break;
        }
    }

    public function excel_rab($spreadsheet){
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('RAB');//tab sheet excel

        //judul atas
        $excel_row = 2;
        $sheet->mergeCells("A".$excel_row.":E".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Rancangan Anggaran Biaya");
        $sheet->getStyle("A".$excel_row.":E".$excel_row)->applyFromArray($this->style("title"));

        //$sheet->getDefaultColumnDimension()->setWidth(1);
        //$sheet->getColumnDimension("A","B","C","D","E")->setAutoSize(true);//Column auto width
        foreach(range('A','E') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);//Column auto width
        }
        
        $excel_row = $excel_row + 2;
        $sheet->getStyle("A".$excel_row.":E".$excel_row)->applyFromArray($this->style("headerTable"));//header style
        /*set column names*/
        $table_columns = array("Uraian", "Volume", "Satuan", "Harga Satuan", "Jumlah");//nama kolom
        $column = 1;
        foreach ($table_columns as $field) {
            $sheet->setCellValueByColumnAndRow($column, $excel_row, $field);
            $column++;
        }

        //judul rab upah
        $excel_row++;
        $sheet->mergeCells("A".$excel_row.":E".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Belanja Upah");
        $sheet->getStyle("A".$excel_row.":E".$excel_row)->applyFromArray($this->style("bold"));//header style

        //data rab upah
        $rab_upah = $this->detail_m->GetRabUpah($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $jumlah = 0;
        $excel_row++; //now from row 3
        foreach ($rab_upah as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $data['nama_upah']);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['volume']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $data['satuan']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $data['harga']);
            $sheet->setCellValueByColumnAndRow(5, $excel_row, $data['jumlah']);
            $jumlah+=$data['jumlah'];
            $excel_row++;
        }
        $sheet->getStyle("B6:C".$excel_row)->getAlignment()->setHorizontal('center');

        //judul rab material
        $excel_row++; 
        $sheet->mergeCells("A".$excel_row.":E".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Belanja Material");
        $sheet->getStyle("A".$excel_row.":E".$excel_row)->applyFromArray($this->style("bold"));//header style

        //data rab material
        $rab_material = $this->detail_m->GetRabMaterial($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $excel_row++; $Cell_rata=$excel_row;
        foreach ($rab_material as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $data['nama_material']);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['volume']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $data['satuan']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $data['harga']);
            $sheet->setCellValueByColumnAndRow(5, $excel_row, $data['jumlah']);
            $jumlah+=$data['jumlah'];
            $excel_row++;
        }
        $sheet->getStyle("B".$Cell_rata.":C".$excel_row)->getAlignment()->setHorizontal('center');
        
        $untuk_bawah = $excel_row;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Jumlah Rencana Anggaran Biaya");
        $sheet->setCellValueByColumnAndRow(5, $excel_row, $jumlah);

        $excel_row++;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "PPN 10%");
        $sheet->setCellValueByColumnAndRow(5, $excel_row, ($jumlah*10/100));

        $excel_row++;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "PPN 10%");
        $sheet->setCellValueByColumnAndRow(5, $excel_row, ($jumlah*1.5/100));

        $excel_row++;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Biaya Kegiatan");
        $sheet->setCellValueByColumnAndRow(5, $excel_row, (($jumlah*1.5/100)+($jumlah*10/100)+($jumlah*1.5/100)));
        $sheet->getStyle("A".$untuk_bawah.":D".$excel_row)->applyFromArray($this->style("bold"));//bold style

        $sheet->getStyle("A4:E".$excel_row)->applyFromArray($this->style("satu_tabel"));//table style
        //$sheet->getStyle('B','C')->getAlignment()->setHorizontal($this->style("rata_tengah"));
        $sheet->getStyle("D6:E".$excel_row)->applyFromArray($this->style("uang"));
    }

    public function excel_harga_upah_material($spreadsheet){
        $spreadsheet->createSheet();
        // Zero based, so set the second tab as active sheet
        $spreadsheet->setActiveSheetIndex(1);
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Harga Upah Material');//tab sheet excel

        //judul atas
        $excel_row = 2;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Harga Upah Dan Material");
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("title"));
        
        $excel_row = $excel_row + 2;
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("headerTable"));//header style
        /*set column names*/
        $table_columns = array("No.", "Uraian Bahan", "Satuan", "Harga Satuan");//nama kolom
        $column = 1;
        foreach ($table_columns as $field) {
            $sheet->setCellValueByColumnAndRow($column, $excel_row, $field);
            $column++;
        }

        //judul rab material
        $excel_row++; 
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Belanja Upah");
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("bold"));//header style

        //data rab material
        $rab_material = $this->detail_m->GetRabUpah($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $no=1;
        $excel_row++; 
        foreach ($rab_material as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $no);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['nama_upah']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $data['satuan']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $data['harga']);
            $no++;
            $excel_row++;
        }
        $sheet->getStyle("A6:A".$excel_row)->getAlignment()->setHorizontal('center');

        //judul rab upah
        $excel_row++;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Harga Material");
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("bold"));//header style

        //data rab upah
        $rab_upah = $this->detail_m->GetRabMaterial($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $no = 1;
        $excel_row++; $Cell_rata=$excel_row;
        foreach ($rab_upah as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $no);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['nama_material']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $data['satuan']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $data['harga']);
            $no++;
            $excel_row++;
        }
        $sheet->getStyle("A".$Cell_rata.":A".$excel_row)->getAlignment()->setHorizontal('center');

        $sheet->getStyle("A4:D".$excel_row)->applyFromArray($this->style("satu_tabel"));//tabel style
        //$sheet->getColumnDimension('D')->setWidth(12);
        foreach(range('A','D') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);//Column auto width
        }
       // $sheet->getStyle("C")->getAlignment()->setHorizontal($this->style("rata_tengah"));
        $sheet->getStyle("C4:C".$excel_row)->getAlignment()->setHorizontal('center');
        $sheet->getStyle("D6:D".$excel_row)->applyFromArray($this->style("uang"));
    }

    public function excel_ahsp($spreadsheet){
        $spreadsheet->createSheet();
        // Zero based, so set the second tab as active sheet
        $spreadsheet->setActiveSheetIndex(2);
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('AHSP');//tab sheet excel

        //judul atas
        $excel_row = 2;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Analisis Harga Satuan Pekerjaan");
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("title"));
        
        $excel_row = $excel_row + 2;
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("headerTable"));//header style
        /*set column names*/
        $table_columns = array("No.", "Uraian Bahan", "Satuan", "Koefisien");//nama kolom
        $column = 1;
        foreach ($table_columns as $field) {
            $sheet->setCellValueByColumnAndRow($column, $excel_row, $field);
            $column++;
        }

        //judul rab material
        $excel_row++; 
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Belanja Upah");
        $sheet->getStyle("B".$excel_row.":D".$excel_row)->applyFromArray($this->style("bold"));//header style

        //data rab material
        $rab_material = $this->detail_m->GetRabUpah($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $no=1;
        $excel_row++; 
        foreach ($rab_material as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $no);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['nama_upah']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $data['satuan']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $data['harga']);
            $no++;
            $excel_row++;
        }
        $sheet->getStyle("A6:A".$excel_row)->getAlignment()->setHorizontal('center');

        //judul rab upah
        $excel_row++;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Harga Material");
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("bold"));//header style

        //data rab upah
        $rab_upah = $this->detail_m->GetRabMaterial($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $no = 1;
        $excel_row++; $Cell_rata=$excel_row;
        foreach ($rab_upah as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $no);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['nama_material']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $data['satuan']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $data['harga']);
            $no++;
            $excel_row++;
        }
        $sheet->getStyle("A".$Cell_rata.":A".$excel_row)->getAlignment()->setHorizontal('center');

        $sheet->getStyle("A4:D".$excel_row)->applyFromArray($this->style("satu_tabel"));//tabel style
        foreach(range('A','D') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);//Column auto width
        }
       // $sheet->getStyle("C")->getAlignment()->setHorizontal($this->style("rata_tengah"));
        $sheet->getStyle("C4:C".$excel_row)->getAlignment()->setHorizontal('center');
        $sheet->getStyle("D6:D".$excel_row)->applyFromArray($this->style("uang"));
    }

    public function excel_volume_pekerjaan($spreadsheet){
        $spreadsheet->createSheet();
        // Zero based, so set the second tab as active sheet
        $spreadsheet->setActiveSheetIndex(3);
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Volume Pekerjaan');//tab sheet excel

        //judul atas
        $excel_row = 2;
        $sheet->mergeCells("A".$excel_row.":D".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Volume Pekerjaan");
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("title"));
        
        $excel_row = $excel_row + 2;
        $sheet->getStyle("A".$excel_row.":D".$excel_row)->applyFromArray($this->style("headerTable"));//header style
        /*set column names*/
        $table_columns = array("No.", "Uraian Pekerjaan", "Volume Pekerjaan", "Satuan");//nama kolom
        $column = 1;
        foreach ($table_columns as $field) {
            $sheet->setCellValueByColumnAndRow($column, $excel_row, $field);
            $column++;
        }

        //data volume Pekerjaan
        $rab_material = $this->detail_m->GetVolumePekerjaan($_SESSION['id_desain']); //get your data from model
        $no=1;
        $excel_row++; 
        foreach ($rab_material as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $no);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['nama_pekerjaan']);
            $sheet->setCellValueByColumnAndRow(3, $excel_row, $data['volume']);
            $sheet->setCellValueByColumnAndRow(4, $excel_row, $data['satuan']);
            $no++;
            $excel_row++;
        }
        $sheet->getStyle("A5:A".$excel_row)->getAlignment()->setHorizontal('center');

        $sheet->getStyle("A4:D".$excel_row)->applyFromArray($this->style("satu_tabel"));//tabel style
        foreach(range('A','D') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);//Column auto width
        }
    }

    public function excel_boq($spreadsheet){
        $spreadsheet->createSheet();
        // Zero based, so set the second tab as active sheet
        $spreadsheet->setActiveSheetIndex(4);
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Build Of Quantity');//tab sheet excel

        //judul atas
        $excel_row = 2;
        $sheet->mergeCells("A".$excel_row.":B".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Build Of Quantity");
        $sheet->getStyle("A".$excel_row.":B".$excel_row)->applyFromArray($this->style("title"));
        
        $excel_row = $excel_row + 2;
        $sheet->mergeCells("A".$excel_row.":B".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Kebutuhan Upah");
        $sheet->getStyle("A".$excel_row)->applyFromArray($this->style("headerTable"));//header style
        //data boq upah
        $rab_material = $this->detail_m->GetBOQ_upah($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $excel_row++; 
        foreach ($rab_material as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $data['nama_upah']);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['boq']);
            $excel_row++;
        }

        $sheet->mergeCells("A".$excel_row.":B".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "Kebutuhan Material");
        $sheet->getStyle("A".$excel_row)->applyFromArray($this->style("headerTable"));//header style
        //data boq
        $rab_material = $this->detail_m->GetBOQ_material($_SESSION['id_desain'],$_SESSION['id_kategori_harga']); //get your data from model
        $excel_row++; 
        foreach ($rab_material as $data) {
            $sheet->setCellValueByColumnAndRow(1, $excel_row, $data['nama_material']);
            $sheet->setCellValueByColumnAndRow(2, $excel_row, $data['boq']);
            $excel_row++;
        }

        $sheet->getStyle("A4:B".$excel_row)->applyFromArray($this->style("satu_tabel"));//tabel style
        foreach(range('A','D') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);//Column auto width
        }
    }

    public function excel_ded($spreadsheet){
        $spreadsheet->createSheet();
        // Zero based, so set the second tab as active sheet
        $spreadsheet->setActiveSheetIndex(5);
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('DED');//tab sheet excel

        //judul atas
        $excel_row = 2;
        $sheet->mergeCells("A".$excel_row.":J".$excel_row);
        $sheet->setCellValueByColumnAndRow(1, $excel_row, "DED");
        $sheet->getStyle("A".$excel_row.":J".$excel_row)->applyFromArray($this->style("title"));
        
        $excel_row = $excel_row + 2;
        //data boq upah
        $ded = $this->detail_m->GetDed($_SESSION['id_desain']); //get your data from model
        foreach ($ded as $data) {
            $this->addImage($data['foto'], 'A'.$excel_row, $spreadsheet->getActiveSheet(5));
            $excel_row = $excel_row + 22;
        }
    }

    function addImage($name,$coordinates,$worksheet){
        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setName($name);
        $drawing->setPath('assets/images/ded/'.$name);
        $drawing->setCoordinates($coordinates);
        $drawing->setHeight(400);
        $drawing->setWorksheet($worksheet);
    }
}