<?php

namespace App\Http\Controllers;

use App\Announce;
use App\Message;
use App\Repositories\AnnounceRepository;
use App\Repositories\MessageRepository;
use DateTime;
use DateTimeZone;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $sessionUser;

    public function __construct()
    {
        $this->middleware('SessionAuth')->only(
            'store'
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
    }


    public function store(Request $request, Client $client)
    {
        $this->sessionUser = $request->session()->get('user');
        $data = request()->all();
        $data['idUser']     = $this->sessionUser->idUser;
        $data['api_token']  = $this->sessionUser->api_token;
        $query = $client->request('POST','http://localhost:8001/api/message/store',
            ['form_params' => $data]);
        $response = json_decode($query->getBody()->getContents());

        if ($request->session()->get('active_status')->status_user_label == 'Seller'){
            return redirect('message/show/seller');
        }
        return redirect('message/show/User');

    }

    public function block(Request $request, Client $client)
    {
        $this->sessionUser = $request->session()->get('user');
        $data = request()->all();
        $data['idUser']     = $this->sessionUser->idUser;
        $data['api_token']  = $this->sessionUser->api_token;
        $query = $client->request('POST','http://localhost:8001/api/message/block',
            ['form_params' => $data]);
        $response = json_decode($query->getBody()->getContents());




        if ($request->session()->get('active_status')->status_user_label == 'Seller'){
            return redirect('message/show/seller');
        }
        return redirect('message/show/User');

    }

    public function showMessagesOfATouristController(Request $request, Client $client)
    {
        $conversations = [];
        $this->sessionUser = $request->session()->get('user');

        $data['idUser']     = $this->sessionUser->idUser;
        $data['api_token']  = $this->sessionUser->api_token;
        $query = $client->request('POST','http://localhost:8001/api/message/showMessagesOfATouristController',
            ['form_params' => $data]);
        $response = json_decode($query->getBody()->getContents());

        if($response->status != 400){
            $conversations = $response->conversations;
        }

        return view('message',["response" => $conversations]);
    }

    public function showMessagesOfASeller(Request $request, Client $client)
    {
        $conversations = [];
        $this->sessionUser = $request->session()->get('user');

        $data['idUser']     = $this->sessionUser->idUser;
        $data['api_token']  = $this->sessionUser->api_token;

        $query = $client->request('POST','http://localhost:8001/api/message/showMessagesOfASeller',
            ['form_params' => $data]);
        $response = json_decode($query->getBody()->getContents());

        if($response->status != 400){
            $conversations = $response->conversations;
        }
        return view('message',["response" => $conversations]);
    }

    private function utilePourPlusTardNePasSupprimer(){
        $date = date('Y-m-d h-i-s');
        $format = 'Y-m-d h-i-s';
        $dateTime = DateTime::createFromFormat($format, $date,new DateTimeZone('Europe/Paris'));
        //ce passe dans le client
        $dateTime->setTimezone(new DateTimeZone(date_default_timezone_get()));
        dd($dateTime);
    }
}
