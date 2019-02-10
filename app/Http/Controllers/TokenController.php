<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\ChatGrant;

class TokenController extends Controller
{

    public function generate(Request $request, AccessToken $accessToken, ChatGrant $chatGrant)
    {
        $appName = "TwilioChat";
        $deviceId = $request->input("device");
        $identity = $request->input("identity");
        $TWILIO_CHAT_SERVICE_SID = config('services.twilio')['chatServiceSid'];
        $endpointId = $appName . ":" . $identity . ":" . $deviceId;
        $accessToken->setIdentity($identity);
        $chatGrant->setServiceSid($TWILIO_CHAT_SERVICE_SID);
        $chatGrant->setEndpointId($endpointId);
        $accessToken->addGrant($chatGrant);
        $response = array(
            'identity' => $identity,
            'token' => $accessToken->toJWT()
        );
        return response()->json($response);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
