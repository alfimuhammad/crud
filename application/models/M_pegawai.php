<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {
	public function select_all_pegawai() {
		$sql = "SELECT * FROM pegawai";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, pegawai.NIK AS NIK, pegawai.npp AS NPP, pegawai.id_jabatan AS id_jabatannkj, pegawai.grade AS grade,kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi, status.status AS status FROM pegawai, kota, kelamin, posisi, status WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND pegawai.id_status=status.id_status";

		$data = $this->db->query($sql);

		return $data->result();
	}


	public function select_export() {
		$sql = " SELECT pegawai.npp AS NPP, pegawai.telp AS telp, pegawai.NIK AS NIK, pegawai.nama AS nama, pegawai.jabatan_jm AS jabatan_jm, pegawai.grade AS grade, pegawai.kelompok_jabatan AS kelompok_jabatan, pegawai.tanggal_lahir AS tanggal_lahir, pegawai.tgl_kerja AS tanggal_kerja, pegawai.tgl_pensiun AS tanggal_pensiun, pegawai.pend_diakui AS pend_diakui, pegawai.id_jabatan AS jabatannkj, pegawai.jurusan AS jurusan, pegawai.agama AS agama, pegawai.bank AS nama_bank, pegawai.no_rek AS no_rek, pegawai.npwp AS npwp, pegawai.bpjs_tk AS bpjs_tk, pegawai.bpjs_kes AS bpjs_kes, kota.nama AS kota, kelamin.nama AS jeniskelamin, posisi.nama AS unitkerja, status.status AS status FROM pegawai, kota, kelamin, posisi, status WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND pegawai.id_status=status.id_status";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT pegawai.id AS id_pegawai, pegawai.NIK AS NIK, pegawai.npp AS npp, pegawai.nama AS nama, pegawai.jabatan_jm AS jabatan_jm, pegawai.grade AS grade, pegawai.kelompok_jabatan AS kelompok_jabatan, pegawai.tanggal_lahir AS tanggal_lahir, pegawai.tgl_kerja AS tanggal_kerja, pegawai.tgl_pensiun AS tanggal_pensiun, pegawai.pend_diakui AS pend_diakui, pegawai.jurusan AS jurusan, pegawai.agama AS agama, pegawai.bank AS nama_bank, pegawai.no_rek AS no_rek, pegawai.npwp AS npwp, pegawai.bpjs_tk AS bpjs_tk, pegawai.id_jabatan AS id_jabatan, pegawai.bpjs_kes AS bpjs_kes, pegawai.id_kota, pegawai.id_kelamin, pegawai.id_posisi, pegawai.id_jabatan, pegawai.id_status, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS jeniskelamin, posisi.nama AS posisi, status.status AS status FROM pegawai, kota, kelamin, posisi, status WHERE pegawai.id_kota = kota.id AND pegawai.id_status=status.id_status  AND pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_posisi($id) {
		$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_posisi = {$id}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	

	public function select_by_kota($id) {
		$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_kota = {$id}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE pegawai SET nama='" .$data['nama'] ."', tanggal_lahir='" .$data['tanggal_lahir'] ."', id_posisi=" .$data['posisi'] .", jabatan_jm='" .$data['jabatan_jm'] ."', id_jabatan='" .$data['jabatan'] ."', grade='" .$data['grade'] ."', id_status='" .$data['status'] ."', kelompok_jabatan='" .$data['kel_jab'] ."', id_kelamin='" .$data['jk'] ."', tgl_kerja='" .$data['tanggal_kerja'] ."', tgl_pensiun='" .$data['tanggal_pensiun'] ."', pend_diakui='" .$data['pend_diakui'] ."', jurusan='" .$data['jurusan'] ."', agama='" .$data['agama'] ."', no_rek='" .$data['no_rek'] ."', bank='" .$data['bank'] ."', npwp='" .$data['npwp'] ."', bpjs_tk='" .$data['bpjs_tk'] ."', bpjs_kes='" .$data['bpjs_kes'] ."', telp='" .$data['telp'] ."' WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM pegawai WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insertriwayat($data) {
		$sql = "INSERT INTO riwayat_pendidikan VALUES('','".$data['id']."','" .$data['nama'] ."','" .$data['jurusan'] ."','" .$data['lulus'] ."','" .$data['nomor'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO pegawai VALUES('','" .$data['NPP'] ."','" .$data['NIK'] ."','" .$data['tgllhr'] ."','" .$data['nama'] ."'," .$data['telp'] ."," .$data['kota'] ."," .$data['jk'] .",'" .$data['posisi'] ."','" .$data['status'] ."','" .$data['jabatan'] ."','" .$data['jabasli'] ."','" .$data['grade'] ."','" .$data['kel_jab'] ."','" .$data['tglkrj'] ."','" .$data['tglpensiun'] ."','" .$data['pend'] ."','" .$data['jrsn'] ."','" .$data['agama'] ."','" .$data['bank'] ."','" .$data['norek'] ."','" .$data['npwp'] ."','" .$data['bpjs_kt'] ."','" .$data['bpjs_kes'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('pegawai', $data);
		
		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}


}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */