<?php

use App\People;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $people =[];
        $client = new Client();
        for($i=1;$i<10;$i++){

            $url = "https://swapi.dev/api/people/?page={$i}";
            $responseJson = $client->request('GET', $url)->getBody();
            $responseObj = json_decode($responseJson);
            foreach($responseObj->results as $person){
                array_push($people,$person);
            }
        }
        foreach($people as $person){
            People::updateOrCreate([
                'url' => $person->url,
                'homeworld' => $person->homeworld,
            ],);
        }

    }
}
