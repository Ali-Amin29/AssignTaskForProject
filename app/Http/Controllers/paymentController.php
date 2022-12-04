<?php

namespace App\Http\Controllers;
use URWay\Client;
use Illuminate\Http\Request;


class paymentController
{
    public function paymentMethod(){ $client = new Client();



        $client->setTrackId('15')
        ->setCustomerEmail('ali.gamal@yahoo.com')
        ->setCustomerIp('127.0.0.10')
        ->setCurrency('USD')
        ->setCountry('EG')
        ->setAmount(800)
        ->setRedirectUrl('https://www.google.com');



        $redirect_url = $client->pay();

        return redirect()->url($redirect_url);
    }
}



// // Replace presented attributes with the given array.
// $client->setAttributes([
//     '...' => '...'
// ]);

// // Merge presented attributes the given array.
// $client->mergeAttributes([
// '...' => '...'
// ]);

// // Replace one of presented attributes with the new value.
// $client->setAttribute('...', '...');

// // Remove one of attributes.
// $client->removeAttribute('...');

// // Determine whether an attribute exists.
// $client->hasAttribute('...'); // returns boolean (true, or false)
