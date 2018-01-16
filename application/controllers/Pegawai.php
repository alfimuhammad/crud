<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
		$this->load->model('M_status');
		$this->load->model('M_jabatan');
		$this->load->model('M_jeniskelamin');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataPegawai'] = $this->M_pegawai->select_all();
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['dataStatus'] = $this->M_status->select_all();
		$data['dataJabatan'] = $this->M_jabatan->select_all();

		$data['page'] = "pegawai";
		$data['judul'] = "Data Pegawai";
		$data['deskripsi'] = "Manage Data Pegawai";

		$data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('pegawai/home', $data);
	}

	public function tampil() {
		$data['dataPegawai'] = $this->M_pegawai->select_all();
		$this->load->view('pegawai/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('grade', 'Grade', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pegawai->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Pegawai Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataPegawai'] = $this->M_pegawai->select_by_id($id);
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['dataJenis'] = $this->M_jeniskelamin->select_all();
		$data['dataJabatan'] = $this->M_jabatan->select_all();
		$data['dataStatus'] = $this->M_status->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_pegawai', 'update-pegawai', $data);
	}

	public function tambahriwayat() {
		$id = trim($_POST['id']);

		$data['dataPegawai'] = $this->M_pegawai->select_by_id($id);
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['dataJenis'] = $this->M_jeniskelamin->select_all();
		$data['dataJabatan'] = $this->M_jabatan->select_all();
		$data['dataStatus'] = $this->M_status->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_tambah_riwayat', 'tambah-riwayat', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pegawai->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function prosesTambahriwayat() {
		$this->form_validation->set_rules('nama', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('lulus', 'Tahun Kelulusan', 'trim|required');
		$this->form_validation->set_rules('nomor', 'Nomor Ijazah Kelamin', 'trim|required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pegawai->insertriwayat($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_pegawai->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Pegawai Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Pegawai Gagal dihapus', '20px');
		}
	}

	public function export() {
		error_reporting(E_ALL);
    
		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_pegawai->select_export();

		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0); 
		$rowCount = 1; 

		$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, "NPP");
		$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, "NIK");
		$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, "Nama");
		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "Nomor Telepon");
		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "Jabatan di JM");
		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "Grade di JM");
		$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, "Jabatan PT NKJ");
		$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, "Unit Kerja");
		$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, "Status");
		$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, "Kelompok Jabatan");
		$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, "Gender (L/P)");
		$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, "Tanggal Lahir");
		$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, "Tanggal Kerja");
		$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, "Masa Kerja");
		$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, "Tanggal Pensiun");
		$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, "Pendidikan Diakui");
		$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, "Jurusan");
		$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, "Agama");
		$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, "Usia");
		$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, "Nama Bank");
		$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount, "No Rekening");
		$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount, "NPWP");
		$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount, "BPJS Tk");
		$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount, "BPJS Kes");
		$rowCount++;

		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->NPP); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->NIK);
		    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $value->nama); 
		    $objPHPExcel->getActiveSheet()->setCellValueExplicit('D'.$rowCount, $value->telp, PHPExcel_Cell_DataType::TYPE_STRING);
		    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->jabatan_jm); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->grade); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->jabatannkj); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $value->unitkerja);
		    $objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $value->status); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $value->kelompok_jabatan);
		    $objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, $value->jeniskelamin);
		    $objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, $value->tanggal_lahir);
		    $objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, $value->tanggal_kerja);
		    $objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, $value->tanggal_kerja);
		    $objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, $value->tanggal_pensiun);
		    $objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, $value->pend_diakui);
		    $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, $value->jurusan);
		    $objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, $value->agama);
		    $objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, $value->tanggal_lahir);
		    $objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, $value->nama_bank);
		    $objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount, $value->no_rek);
		    $objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount, $value->npwp);
		    $objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount, $value->bpjs_tk);
		    $objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount, $value->bpjs_kes);
		    $rowCount++; 
		} 

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
		$objWriter->save('./assets/excel/Data Pegawai.xlsx'); 

		$this->load->helper('download');
		force_download('./assets/excel/Data Pegawai.xlsx', NULL);
	}

	public function import() {
		$this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {
			$this->session->set_flashdata('msg', 'File harus diisi');
		} else {
			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('excel')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data = $this->upload->data();
				
				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' .$data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

				$index = 0;
				foreach ($sheetData as $key => $value) {
					if ($key != 1) {
						$id = md5(DATE('ymdhms').rand());
						$check = $this->M_pegawai->check_nama($value['B']);

						if ($check != 1) {
							$resultData[$index]['id_kota'] = '1';
							$resultData[$index]['npp'] = ucwords($value['A']);
							$resultData[$index]['NIK'] = ucwords($value['B']);
							$resultData[$index]['nama'] = ucwords($value['C']);
							$resultData[$index]['telp'] = ucwords($value['D']);
							$resultData[$index]['jabatan_jm'] = ucwords($value['E']);
							$resultData[$index]['grade'] = ucwords($value['F']);
							$resultData[$index]['id_jabatan'] = ucwords($value['G']);
							if($value['H']==='Komisaris'){
							$resultData[$index]['id_posisi'] = '1';	
							}
							if($value['H']=='SDM dan Umum'){
							$resultData[$index]['id_posisi'] = '2';	
							}
							if($value['H']=='Keuangan'){
							$resultData[$index]['id_posisi'] = '3';	
							}
							if($value['H']=='Teknik'){
							$resultData[$index]['id_posisi'] = '7';	
							}
							if($value['H']=='Proyek'){
							$resultData[$index]['id_posisi'] = '8';	
							}
							if($value['H']=='Keuangan & Administrasi'){
							$resultData[$index]['id_posisi'] = '10';	
							}
							if($value['H']=='Direksi'){
							$resultData[$index]['id_posisi'] = '11';	
							}
							if($value['I']=='Penugasan JM'){
							$resultData[$index]['id_status'] = '1';	
							}
							if($value['I']=='Penugasan WTR'){
							$resultData[$index]['id_status'] = '2';	
							}
							if($value['I']=='PKWT'){
							$resultData[$index]['id_status'] = '3';	
							}
							$resultData[$index]['kelompok_jabatan'] = ucwords($value['J']);
							if($value['K']=='L'){
							$resultData[$index]['id_kelamin'] = '1';	
							}
							if($value['K']=='P'){
							$resultData[$index]['id_kelamin'] = '2';	
							}
							$resultData[$index]['tanggal_lahir'] = ucwords($value['L']);
							$resultData[$index]['tgl_kerja'] = ucwords($value['M']);
							$resultData[$index]['tgl_pensiun'] = ucwords($value['O']);
							$resultData[$index]['pend_diakui'] = ucwords($value['P']);
							$resultData[$index]['jurusan'] = ucwords($value['Q']);
							$resultData[$index]['agama'] = ucwords($value['R']);
							$resultData[$index]['bank'] = ucwords($value['T']);
							$resultData[$index]['no_rek'] = ucwords($value['U']);
							$resultData[$index]['npwp'] = ucwords($value['V']);
							$resultData[$index]['bpjs_tk'] = ucwords($value['W']);
							$resultData[$index]['bpjs_kes'] = ucwords($value['X']);
							
							
							
							
							
							
							
							
							





							
						}
					}
					$index++;
				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_pegawai->insert_batch($resultData);
					if ($result > 0) {
						$this->session->set_flashdata('msg', show_succ_msg('Data Pegawai Berhasil diimport ke database'));
						redirect('Pegawai');
					}
				} else {
					$this->session->set_flashdata('msg', show_msg('Data Pegawai Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('Pegawai');
				}

			}
		}
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */