<?php

namespace App\Http\Controllers;

use ElasticEmailClient\ElasticEmailStatusRequest as ElasticEmailStatusRequest;
use Illuminate\Http\Request;

class ElasticEmailStatusRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \ElasticEmailClient\ElasticEmailStatusResponse
     */
    public function index()
    {

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
     * @param  \ElasticEmailClient\ElasticEmailStatusRequest  $elasticEmailStatusRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ElasticEmailStatusRequest $elasticEmailStatusRequest)
    {
        $request = new ElasticEmailStatusRequest('4c0f0932-3fe0-0182-a032-cf3b2e19db36');
        echo $request->getResponse()->getFailedCount();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ElasticEmailClient\ElasticEmailStatusRequest  $elasticEmailStatusRequest
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
     * @param  \ElasticEmailClient\ElasticEmailStatusRequest  $elasticEmailStatusRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElasticEmailStatusRequest $elasticEmailStatusRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ElasticEmailClient\ElasticEmailStatusRequest  $elasticEmailStatusRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElasticEmailStatusRequest $elasticEmailStatusRequest)
    {
        //
    }
}
