<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends Admin_Controller {

    public function index()
    {
        $data['pegawaies'] = $this->db->get('pegawai');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/pegawai/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('nama_pegawai','Nama pegawai','required');
        $this->form_validation->set_rules('no_telp','No Telp','required|numeric|max_length[13]');
        $this->form_validation->set_rules('email_pegawai','Email','required');
        $this->form_validation->set_rules('alamat_pegawai','Alamat','required');
        $this->form_validation->set_rules('tugas_pegawai','Tugas','required');
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
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'no_telp' => $this->input->post('no_telp'),
                'email_pegawai' => $this->input->post('email_pegawai'),
                'alamat_pegawai' => $this->input->post('alamat_pegawai'),
                'tugas_pegawai' => $this->input->post('tugas_pegawai')
            );

            // INSERT INTO DATABASE
            $this->db->insert('pegawai',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Data berhasil disimpan!');
            redirect(base_url() . 'admin/pegawai/');
        }
    }

    public function edit($id)
    {
        // jika id tidak ada maka halaman akan dialihkan
        if ($id == null) {
            redirect(base_url() . 'admin/pegawai');
        }

        // mengambil data dari table user berdasarkan id
        $result = $this->db->get_where('pegawai',['pegawai_id' => $id]);
        $data['pegawai'] = $result->row();
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
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'no_telp' => $this->input->post('no_telp'),
                'email_pegawai' => $this->input->post('email_pegawai'),
                'alamat_pegawai' => $this->input->post('alamat_pegawai'),
                'tugas_pegawai' => $this->input->post('tugas_pegawai')
            );

            // INSERT INTO DATABASE
            $this->db->where('pegawai_id',$id);
            $this->db->update('pegawai',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Data berhasil diperbarui!');
            redirect(base_url() . 'admin/pegawai/');
        }
    }

    public function delete($id)
    {
        $this->db->where('pegawai_id',$id);
        $this->db->delete('pegawai');

        $this->session->set_flashdata('success','Data berhasil dihapus!');
        redirect(base_url() . 'admin/pegawai/');
    }
}

/* End of file Controllername.php */
