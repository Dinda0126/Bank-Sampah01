<?php
class M_sampah extends CI_Model{

	function hapus_sampah($kode){
		$hsl=$this->db->query("DELETE FROM tbl_sampah where sampah_id='$kode'");
		return $hsl;
	}

	function update_sampah($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("UPDATE tbl_sampah SET sampah_nama='$nabar',sampah_satuan='$satuan',sampah_harpok='$harpok',sampah_harjul='$harjul',sampah_harjul_grosir='$harjul_grosir',sampah_stok='$stok',sampah_min_stok='$min_stok',sampah_tgl_last_update=NOW(),sampah_kategori_id='$kat',sampah_user_id='$user_id' WHERE sampah_id='$kobar'");
		return $hsl;
	}

	function tampil_sampah(){
		$hsl=$this->db->query("SELECT sampah_id,sampah_nama,sampah_satuan,sampah_harpok,sampah_harjul,sampah_harjul_grosir,sampah_stok,sampah_min_stok,sampah_kategori_id,kategori_nama FROM tbl_sampah JOIN tbl_kategori ON sampah_kategori_id=kategori_id");
		return $hsl;
	}

	function simpan_sampah($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("INSERT INTO tbl_sampah (sampah_id,sampah_nama,sampah_satuan,sampah_harpok,sampah_harjul,sampah_harjul_grosir,sampah_stok,sampah_min_stok,sampah_kategori_id,sampah_user_id) VALUES ('$kobar','$nabar','$satuan','$harpok','$harjul','$harjul_grosir','$stok','$min_stok','$kat','$user_id')");
		return $hsl;
	}
	function get_data($table){
		return $this->db->get($table);
	}

	function get_sampah($kobar){
		$hsl=$this->db->query("SELECT * FROM tbl_sampah where sampah_id='$kobar'");
		return $hsl;
	}

	function get_kobar(){
		$q = $this->db->query("SELECT MAX(RIGHT(sampah_id,6)) AS kd_max FROM tbl_sampah");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "BR".$kd;
	}

}