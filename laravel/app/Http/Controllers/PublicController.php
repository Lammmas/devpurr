<?php
/**
 * Created by Renna Reemet on 6.4.15 15:57
 */

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class PublicController extends Controller {

	/**
	 * Create a new controller instance.

	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

}
