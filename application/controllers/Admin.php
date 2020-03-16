<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function petugas()
    {
        $data['petugas'] = $this->db->get('petugas')->result_array();
        $this->load->view('admin/petugas',$data);
    }

    public function tmbhPtgs()
    {
        $this->form_validation->set_rules('username','Username','required');
        if($this->form_validation->run() == false){
            $this->load->view('admin/tpetugas');
        }else{
            $data = [
                "username" => $this->input->post('username'),
                "password" => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                "nama_petugas" => $this->input->post('nama_petugas'),
                "role" => $this->input->post('role')
            ];
            $this->db->insert('petugas',$data);
            redirect('admin/petugas');
        }
    }

    public function hapusPetugas($id_petugas)
    {
        $this->db->where('id_petugas',$id_petugas);
        $this->db->delete('petugas');
        redirect('admin/petugas');
    }

    public function siswa()
    {
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $this->load->view('admin/siswa',$data);
    }

    public function tmbhsiswa()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        if($this->form_validation->run() == false){
            $this->load->view('admin/tsiswa');
        }else{
            $data = [
                "nis" => $this->input->post('nis'),
                "nama" => $this->input->post('nama'),
                "id_kelas" => $this->input->post('kelas'),
                "alamat" => $this->input->post('alamat'),
                "no_telp" => $this->input->post('notelp'),
                "id_spp" => $this->input->post('idspp'),
            ];
            $this->db->insert('siswa',$data);
            redirect('admin/siswa');
        }
    }

    public function hapussiswa($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('siswa');
        redirect('admin/siswa');
    }

    public function kelas()
    {
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $this->load->view('admin/kelas',$data);
    }

    public function spp()
    {
        $data['pembayaran'] = $this->db->get('pembayaran')->result_array();
        $this->load->view('admin/pembayaran',$data);
    }

    public function tmbhspp()
    {
        $this->form_validation->set_rules('nama_petugas','Nama Petugas','required');
        if($this->form_validation->run() == false){
            $this->load->view('admin/tspp');
        }else{
            $data = [
                "nama_petugas" => $this->input->post('nama_petugas'),
                "nama_siswa" => $this->input->post('nama_siswa'),
                "tgl_bayar" => $this->input->post('tglbyr'),
                "bulan_bayar" => $this->input->post('blnbyr'),
                "tahun_bayar" => $this->input->post('thnbyr'),
                "id_spp" => $this->input->post('idspp'),
                "jumlah_bayar" => $this->input->post('jmlbyr'),
            ];
            $this->db->insert('pembayaran',$data);
            redirect('admin/spp');
        }
    }

    public function hapusspp($id_pembayaran)
    {
        $this->db->where('id_pembayaran',$id_pembayaran);
        $this->db->delete('pembayaran');
        redirect('admin/spp');
    }

}