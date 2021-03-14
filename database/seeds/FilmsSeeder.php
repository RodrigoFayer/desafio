<?php

use App\Films;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $films =[];
        $client = new Client();

        $url = "https://swapi.dev/api/films/";
        $responseJson = $client->request('GET', $url)->getBody();
        $responseObj = json_decode($responseJson);
        $films = $responseObj->results;
        foreach($films as $film){
            Films::updateOrCreate([
                'url' => $film->url,
            ],);
        }
    }
}
