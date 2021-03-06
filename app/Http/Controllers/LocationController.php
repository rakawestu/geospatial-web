<?php namespace App\Http\Controllers;

use App\Tes;
use App\Location;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class LocationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$urls = Location::get();
 
		return response()->json(array(
			'error' => false,
			'locations' => $urls->toArray()),
			200
		);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$url = new Location;
		$url->name = Request::get('name');
		$url->longitude = Request::get('longitude');
		$url->latitude = Request::get('latitude');
	 
		// Validation and Filtering is sorely needed!!
		// Seriously, I'm a bad person for leaving that out.
	 
		$url->save();
	 
		return Response::json(array(
			'error' => false,
			'urls' => $urls->toArray()),
			200
		);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
