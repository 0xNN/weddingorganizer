<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max-size'] = 10240;

        $this->load->library('upload',$config);
    }

    public function index()
    {
        $data['profil'] = $this->db->get('profil');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/profil/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('nama_perusahaan','Nama Perusahaan','required');
        $this->form_validation->set_rules('pemilik','Nama Pemilik','required');
        $this->form_validation->set_rules('no_tlp','Nomer Telepon','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('sejarah','Sejarah Perusahaan','required');
        $this->form_validation->set_rules('visi','Visi Perusahaan','required');
        $this->form_validation->set_rules('misi','Misi Perusahaan','required');
    }

    public function create()
    {
        $this->template('create');
    }

    public function store()
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            if (!$this->upload->do_upload('struktur_organisasi')) {
                $error = array('error' => $this->upload->display_errors());
            }
            else {
                $error = null;
            }
            $this->template('create',$error);
            return;
        } else {
            $data = array(
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'pemilik' => $this->input->post('pemilik'),
                'no_tlp' => $this->input->post('no_tlp'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'sejarah' => $this->input->post('sejarah'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi')
            );

            // UPLOAD IMAGE
            $this->upload->do_upload('struktur_organisasi');
            $data['struktur_organisasi'] = $this->upload->data('file_name');

            // INSERT INTO DATABASE
            $this->db->insert('profil',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Data berhasil disimpan!');
            redirect(base_url() . 'admin/profil/');
        }
    }

    public function edit($id)
    {
        // jika id tidak ada maka halaman akan dialihkan
        if ($id == null) {
            redirect(base_url() . 'admin/profil');
        }

        // mengambil data dari table user berdasarkan id
        $result = $this->db->get_where('profil',['profil_id' => $id]);
        $data['profil'] = $result->row();
        $this->template('edit',$data);
    }

    public function update($id)
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            if ($this->input->post('struktur_organisasi') != null) {
                if (!$this->upload->do_upload('struktur_organisasi')) {
                    $error = array('error' => $this->upload->display_errors());
                }
                else {
                    $error = null;
                }
            }
            $this->template('edit',$error);
            return;
        } else {
            $data = array(
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'pemilik' => $this->input->post('pemilik'),
                'no_tlp' => $this->input->post('no_tlp'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'sejarah' => $this->input->post('sejarah'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi')
            );

            if ($this->input->post('struktur_organisasi') != null) {
                // UPLOAD IMAGE
                $this->upload->do_upload('struktur_organisasi');
                $data['struktur_organisasi'] = $this->upload->data('file_name');
            }

            // INSERT INTO DATABASE
            $this->db->where('profil_id',$id);
            $this->db->update('profil',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Data berhasil diperbarui!');
            redirect(base_url() . 'admin/profil/');
        }
    }

    public function delete($id)
    {
        $data = $this->db->get_where('profil',['profil_id' => $id])->row();

        // DELETING IMAGE
        if ($data->struktur_organisasi != '') {
          unlink('uploads/' . $data->struktur_organisasi);
        }

        $this->db->delete('profil',['profil_id' => $id]);

        $this->session->set_flashdata('success','Data berhasil dihapus!');
        redirect(base_url() . 'admin/profil/');
    }
}

/* End of file Controllername.php */
