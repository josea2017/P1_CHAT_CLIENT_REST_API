
@php
{{
//use Twilio\Rest\Client;
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
//require_once '/path/to/vendor/autoload.php';
//require __DIR__ . '/Twilio/autoload.php';
//require __DIR__.'/../../../vendor/twilio/sdk/Twilio/autoload.php';
require_once __DIR__.'/../../../vendor/autoload.php';
require __DIR__.'/../../../vendor/twilio/sdk/Twilio/Rest/Client.php';
//use Twilio\Rest\Client;
/*
// Find your Account Sid and Auth Token at twilio.com/console
$sid    = "AC68e755f9b09bf542c5ae71b4cc2302dd";
$token  = "dc81fac28291f97f176f6dec305b5fc9";
//$twilio = new Client($sid, $token);
$twilio = new Twilio\Rest\Client($sid, $token);
$services = $twilio->chat->v2->services->read();
foreach ($services as $record) {
    print($record->sid);
}
*/
$sid    = "AC68e755f9b09bf542c5ae71b4cc2302dd";
$token  = "dc81fac28291f97f176f6dec305b5fc9";
$twilio = new Twilio\Rest\Client($sid, $token);
$service = $twilio->chat->v2->services("ISf3057fcd46c2488aa0a7882e464263a7")->fetch();
//print($service->friendlyName);
//var_dump($service);

}}
@endphp



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vista Administrador
                </div>
            </div>
        </div>
    </div>
</div>


 <script type="text/html" id="message-template">
      <div class="row no-margin">
        <div class="row no-margin message-info-row" style="">
          <div class="col-md-8 left-align"><p data-content="username" class="message-username"></p></div>
          <div class="col-md-4 right-align"><span data-content="date" class="message-date"></span></div>
        </div>
        <div class="row no-margin message-content-row">
          <div style="" class="col-md-12"><p data-content="body" class="message-body"></p></div>
        </div>
      </div>
    </script>
    <script type="text/html" id="channel-template">
      <div class="col-md-12">
        <p class="channel-element" data-content="channelName"></p>
      </div>
    </script>
    <script type="text/html" id="member-notification-template">
      <p class="member-status" data-content="status"></p>
    </script>
    <!-- JavaScript -->
    <script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.min.js"></script>
    <!-- Twilio Common helpers and Twilio Chat JavaScript libs from CDN. -->
    <script src="//media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js"></script>
    <script src="//media.twiliocdn.com/sdk/js/chat/v3.0/twilio-chat.min.js"></script>
    <script type="text/javascript" src="//media.twiliocdn.com/sdk/js/client/v1.6/twilio.min.js"></script>
    <script src="{{ asset('js/channels_list.js') }}"></script>

@endsection


    

