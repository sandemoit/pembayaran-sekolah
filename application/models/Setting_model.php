<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting_model extends CI_Model
{
    public function getSetting()
    {
        return $this->db->get('setting')->row_array();
    }

    public function editSetting()
    {
        $data = [
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'alamat_sekolah' => $this->input->post('alamat_sekolah'),
            'nama_kota' => $this->input->post('nama_kota'),
            'nohp' => $this->input->post('nohp'),
            'email_sekolah' => $this->input->post('email_sekolah'),
            'kepsek' => $this->input->post('kepsek'),
            'nip_kepsek' => $this->input->post('nip_kepsek'),
            'bendahara' => $this->input->post('bendahara'),
            'nip_bendahara' => $this->input->post('nip_bendahara'),
        ];

        // jika ada gambar yang akan diupload
        $image = $_FILES['logo']['name'];
        if ($image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $old_image = $data['setting']['logo'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('logo', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->update('setting', $data);
    }
}
