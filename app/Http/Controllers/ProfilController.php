<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

    private $sessionUser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('SessionAuth')->only('profil');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function profil(Client $client, Request $request)
    {
        $seller = [];
        $profil = [];
        $data = request()->all();
        if(!$request->session()->has('user')){

            return redirect('register');
        }
        $this->sessionUser = $request->session()->get('user');

        if (isset($this->sessionUser)) {
          $data['idUser'] = $this->sessionUser->idUser;
          $data['api_token'] = $this->sessionUser->api_token;
        }


        $query = $client->request('POST', 'http://localhost:8001/api/user/profil', ['form_params' => $data]);
        $response = json_decode($query->getBody()->getContents());

        $querySeller = $client->request('POST', 'http://localhost:8001/api/seller/getInformation', ['form_params' => $data]);
        $responseSeller = json_decode($querySeller->getBody()->getContents());

        if($responseSeller->status != '400'){
            $seller = $responseSeller->informations;
        }
        //dd($request->session()->all());
        if ($response->status != '400'){
            $profil = $response->profil[0];
        }

        return view('Profil', [
            'allProfils' => ['Tourist', 'Seller'],
            'profil' => $response->profil[0],
            'seller' => $seller[0]
        ]);
    }
}
