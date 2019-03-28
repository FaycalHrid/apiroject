<?php

namespace App\Http\Controllers;

use App\ElasticEmailClient\ElasticEmailStatusRequest;
use Illuminate\Http\Request;

class ElasticEmailStatusRequestController extends Controller
{
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
     * @param  \App\ElasticEmailClient\ElasticEmailStatusRequest  $elasticEmailStatusRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ElasticEmailStatusRequest $elasticEmailStatusRequest)
    {
        $params = array('apiKey'=>'74b2e950-d5d8-4126-ad13-27f897aea6ed','apiUrl'=>'https://api.elasticemail.com/v2/');

        $request = new ElasticEmailStatusRequest('4c0f0932-3fe0-0182-a032-cf3b2e19db36',$params);

        echo $request->getResponse()->getRecipientsCount();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ElasticEmailClient\ElasticEmailStatusRequest  $elasticEmailStatusRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ElasticEmailStatusRequest $elasticEmailStatusRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ElasticEmailClient\ElasticEmailStatusRequest  $elasticEmailStatusRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElasticEmailStatusRequest $elasticEmailStatusRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ElasticEmailClient\ElasticEmailStatusRequest  $elasticEmailStatusRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElasticEmailStatusRequest $elasticEmailStatusRequest)
    {
        //
    }
}
