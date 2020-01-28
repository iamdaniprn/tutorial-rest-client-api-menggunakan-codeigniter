<?php
// extends class Model
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class M_movie extends CI_Model{


    // mengambil semua data mahasiswa
    public function cari_movie($film)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://www.omdbapi.com', [
            'query' => [
                'apikey' =>'7fa74e57',
                's' => $film
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['Search'];

    }

    // mengambil semua data mahasiswa
    public function detail_movie($imdbID)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://www.omdbapi.com', [
            'query' => [
                'apikey' =>'7fa74e57',
                'i' => $imdbID
            ]
        ]);

        // $result = json_decode($response->getBody(), true);
        $result = json_decode($response->getBody()->getContents(), true);
        // var_dump($result);
        // die;

        return $result;
    }
}
?>