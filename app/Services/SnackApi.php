<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Storage;

class SnackApi
{
    public function __invoke()
    {
        try {
            // Set up API call
            $guzzle = new Client([
                'base_uri' => 'https://snackmaster.wiremockapi.cloud/snacks',
                'timeout' => 10,
            ]);

            // Apply beaer token
            $response = $guzzle->get('', [
                'headers' => [
                    'Authorization' => 'Bearer lj5iaSIZAhOFCk8dXfWrnjsUsAqKiePoblbh',
                ],
            ]);

            // Save data
            $data = $response->getBody()->getContents();

            // Store data locally : /storage/app/snacks.json
            Storage::disk('local')->put('snacks.json', $data);

        } catch (GuzzleException $e) {
            return $e->getMessage();
        }
    }
}
