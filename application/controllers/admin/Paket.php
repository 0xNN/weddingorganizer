<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends Admin_Controller {

    public function index()
    {
        $data['paket'] = $this->db->get('paket');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/paket/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('nama_paket','Nama paket','required');
        $this->form_validation->set_rules('keterangan_paket','Keterangan','required');
        $this->form_validation->set_rules('harga_paket','Harga','required|numeric');
    }

    public function create()
    {
        $this->template('create');
    }

    public function store()
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            $this->template('create');
            return;
        } else {
            $data = array(
                'nama_paket' => $this->input->post('nama_paket'),
                'keterangan_paket' => $this->input->post('keterangan_paket'),
                'harga_paket' => $this->input->post('harga_paket')
            );

            // INSERT INTO DATABASE
            $this->db->insert('paket',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Data berhasil disimpan!');
            redirect(base_url() . 'admin/paket/');
        }
    }

    public function edit($id)
    {
        // jika id tidak ada maka halaman akan dialihkan
        if ($id == null) {
            redirect(base_url() . 'admin/paket');
        }

        // mengambil data dari table user berdasarkan id
        $result = $this->db->get_where('paket',['id_paket' => $id]);
        $data['paket'] = $result->row();
        $this->template('edit',$data);
    }

    public function update($id)
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            $this->template('edit');
            return;
        } else {
            $data = array(
                'nama_paket' => $this->input->post('nama_paket'),
                'keterangan_paket' => $this->input->post('keterangan_paket'),
                'harga_paket' => $this->input->post('harga_paket')
            );

            // INSERT INTO DATABASE
            $this->db->where('id_paket',$id);
            $this->db->update('paket',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Data berhasil diperbarui!');
            redirect(base_url() . 'admin/paket/');
        }
    }

    public function delete($id)
    {
        $this->db->where('id_paket',$id);
        $this->db->delete('paket');

        $this->session->set_flashdata('success','Data berhasil dihapus!');
        redirect(base_url() . 'admin/paket/');
    }
}

/* End of file Controllername.php */
