<?php
// extends class Model
use GuzzleHttp\Client;

class M_mahasiswa extends CI_Model{

    private $_client;

    public function __construct()
    {
        // tentukan url yang menjadi server data yang akan diambil datanya
        $this->_client = new Client([

            'base_uri' => 'http://localhost/belajar_restfull_api/index.php/'

        ]);
    }

    // mengambil semua data mahasiswa
    public function all_mahasiswa()
    {

        $response = $this->_client->request('GET', 'mahasiswa');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['Mahasiswa'];
    }

    public function lihat_mahasiswa($id_mahasiswa)
    {

        $response = $this->_client->request('GET', 'mahasiswa/detail/'.$id_mahasiswa);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['Mahasiswa'];
    }

    public function simpan_mahasiswa($data)
    {
        $client = new Client();

        $response = $this->_client->request('POST', 'mahasiswa/tambah', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function edit_mahasiswa($id_mahasiswa)
    {

        $response = $this->_client->request('GET', 'mahasiswa/detail/'.$id_mahasiswa);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['Mahasiswa'];
    }

    public function update_mahasiswa($data)
    {
        $client = new Client();

        $response = $this->_client->request('PUT', 'mahasiswa/update', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapus_mahasiswa($id_mahasiswa)
    {
        $response = $this->_client->request('DELETE', 'mahasiswa/hapus', [
            'form_params' => [
                'id_mahasiswa' => $id_mahasiswa
            ],
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }




    // response jika field ada yang kosong
    public function empty_response()
    {
        $response['status']  = 502;
        $response['error']   = true;
        $response['message'] = 'Field tidak boleh kosong';
        return $response;
    }


    // public function simpan_mahasiswa($nama, $jenis_kelamin, $no_hp)
    // {
    //     $client = new Client();

    //      $response = $this->_client->request('POST', 'mahasiswa/tambah', [
    //         'form_params' => [
    //             'nama' => $nama,
    //             'jenis_kelamin' => $jenis_kelamin,
    //             'no_hp' => $no_hp
    //         ],
    //     ]);

    //     $result = json_decode($response->getBody()->getContents(), true);

    //     return $result;
    // }

}
?>