<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;
use GuzzleHttp\Client;

class AdminController extends Controller
{
    private $sessionUser;

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Client $client)
    {
        $errorContact = $request->input('errorContact');
        $successContact = $request->input('successContact');
        $errorReport = $request->input('errorReport');
        $successReport = $request->input('successReport');
        $contacts = null;
        $reports = null;

        $this->sessionUser = $request->session()->get('user');

        $data['idUser'] = $this->sessionUser->idUser;
        $data['api_token'] = $this->sessionUser->api_token;

        $queryContact= $client->request('POST','http://localhost:8001/api/contact/admin/all',
            ['form_params' => $data]);

        $responseContact = json_decode($queryContact->getBody()->getContents());

        $queryReport = $client->request('POST','http://localhost:8001/api/admin/report/all',
            ['form_params' => $data]);

        $responseReport = json_decode($queryReport->getBody()->getContents());

        if($responseContact->status == '200'){

            $contacts = $responseContact->contacts;
        }

        if($responseReport->status == '200'){

            $reports = $responseReport->reportByDateDesc;
        }

        return view('admin.admin')->with([
            'errorContact' => $errorContact,
            'successContact' => $successContact,
            'errorReport' => $errorReport,
            'successReport' => $successReport,
            'contacts' => $contacts,
            'reports' => $reports
        ]);
    }

    public function showChecks(Request $request, Client $client)
    {
        $this->sessionUser = $request->session()->get('user');

        $data['idUser'] = $this->sessionUser->idUser;
        $data['api_token'] = $this->sessionUser->api_token;

        $query = $client->request('POST','http://localhost:8001/api/check/allUnDone',
            ['form_params' => $data]);

        $response = json_decode($query->getBody()->getContents());


        return view('admin.check')->with('checks',$response->checks);
    }

}