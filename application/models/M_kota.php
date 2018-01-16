<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kota extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('kota');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT pegawai.id AS id_pegawai, pegawai.NIK AS NIK, pegawai.npp AS npp, pegawai.nama AS nama, pegawai.jabatan_jm AS jabatan_jm, pegawai.grade AS grade, pegawai.kelompok_jabatan AS kelompok_jabatan, pegawai.tanggal_lahir AS tanggal_lahir, pegawai.tgl_kerja AS tanggal_kerja, pegawai.tgl_pensiun AS tanggal_pensiun, pegawai.pend_diakui AS pend_diakui, pegawai.jurusan AS jurusan, pegawai.agama AS agama, pegawai.bank AS nama_bank, pegawai.no_rek AS no_rek, pegawai.npwp AS npwp, pegawai.bpjs_tk AS bpjs_tk, pegawai.id_jabatan AS id_jabatan, pegawai.bpjs_kes AS bpjs_kes, pegawai.id_kota, pegawai.id_kelamin, pegawai.id_posisi, pegawai.id_jabatan, pegawai.id_status, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS jeniskelamin, posisi.nama AS posisi, status.status AS status FROM pegawai, kota, kelamin, posisi, status WHERE pegawai.id_kota = kota.id AND pegawai.id_status=status.id_status  AND pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_pegawai($id) {
		$sql = "SELECT pegawai.id AS id_pegawai, pegawai.NIK AS NIK, pegawai.npp AS npp, pegawai.nama AS nama, pegawai.jabatan_jm AS jabatan_jm, pegawai.grade AS grade, pegawai.kelompok_jabatan AS kelompok_jabatan, pegawai.tanggal_lahir AS tanggal_lahir, pegawai.tgl_kerja AS tanggal_kerja, pegawai.tgl_pensiun AS tanggal_pensiun, pegawai.pend_diakui AS pend_diakui, pegawai.jurusan AS jurusan, pegawai.agama AS agama, pegawai.bank AS nama_bank, pegawai.no_rek AS no_rek, pegawai.npwp AS npwp, pegawai.bpjs_tk AS bpjs_tk, pegawai.id_jabatan AS id_jabatan, pegawai.bpjs_kes AS bpjs_kes, pegawai.id_kota, pegawai.id_kelamin, pegawai.id_posisi, pegawai.id_jabatan, pegawai.id_status, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS jeniskelamin, posisi.nama AS posisi, status.status AS status FROM pegawai, kota, kelamin, posisi, status WHERE pegawai.id_kota = kota.id AND pegawai.id_status=status.id_status  AND pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id={$id}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function selectpendidikan($id) {
		$sql = "SELECT * FROM riwayat_pendidikan WHERE nik ={$id}  ORDER BY lulus ASC";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$sql = "INSERT INTO kota VALUES('','" .$data['kota'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('kota', $data);
		
		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE kota SET nama='" .$data['kota'] ."' WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM kota WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('kota');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('kota');

		return $data->num_rows();
	}
}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */