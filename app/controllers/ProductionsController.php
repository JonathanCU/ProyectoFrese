<?php

class ProductionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /productions
	 *
	 * @return Response
	 */
	public function index()
	{
		$Productions = Production::all();
		$this->layout->content = View::make('Productions.index', compact('Productions'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /productions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /productions
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /productions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content=View::make('Productions.show', compact('Productions'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /productions/{id}/edit
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
	 * PUT /productions/{id}
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
	 * DELETE /productions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}