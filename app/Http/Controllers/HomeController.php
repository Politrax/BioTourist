<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->middleware('SessionAuth');
        //$this->middleware('apiAdmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, Client $client)
    {
      $session = $request->session()->all();

      $data['idUser'] = config('api.api_admin_id');
      $data['api_token'] = config('api.api_admin_token');

      $query = $client->request('POST','http://localhost:8001/api/seller/testSelect', [
            'form_params' => $data
      ]);
      $response = json_decode($query->getBody()->getContents());

      $sellerByNotes = $response->sellerComments;

      if($request->session()->has('successReport')){
          return view('welcome')->with([
              'sellerByNotes'   => $sellerByNotes,
              'session'         => $session,
              'successReport'   => $request->session()->get('successReport')
              ]);
      }
      if (isset($session['user'])) {
        return view('welcome')->with([
            'sellerByNotes'   => $sellerByNotes,
            'session' => $session]);
      }

      //récupération des 5 sellers les mieux noté
      //récupération des 3 dernier articles
        return view('welcome')->with(['sellerByNotes' => $sellerByNotes]);
    }
}
