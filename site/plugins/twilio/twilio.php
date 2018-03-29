<?php

// Get the PHP helper library from twilio.com/docs/php/install
require_once 'Twilio/autoload.php'; // Loads the library

use Twilio\Rest\Client;

function sendSMS($receiver, $message) {

  $account_sid = c::get('account_sid');
  $auth_token = c::get('auth_token');
  $client = new Client($account_sid, $auth_token);

  // Use the client to do fun stuff like send text messages!
  $client->messages->create(
      // the number you'd like to send the message to
      $receiver,
      array(
          // A Twilio phone number you purchased at twilio.com/console
          'from' => c::get('twilio_number'),
          // the body of the text message you'd like to send
          'body' => $message
      )
  );
}
