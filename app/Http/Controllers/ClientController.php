<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{


    public function listClient()
    {
        $response = Http::get(env('URL_ASAAS') . "/api/v3/customers", [
            "Content-Type" => "application/json",
            "access_token" => env("CHAVE_API")
        ]);
        if ($response->object()) {
            $customers = collect();

            $list = $response->object()->data;
            foreach ($list as $value) {
                $customers->push($value);
            }
        };
        return view('list-client', ['customers' => $customers]);
    }

    public function listClientProcess($id)
    {
        $response = Http::get(env('URL_ASAAS') . "/api/v2/customers/$id/payments", [
            "Content-Type" => "application/json",
            "access_token" => env("CHAVE_API")
        ]);

        $payments = [];
        if ($response->object()) {
            $payments = collect();
            $list = $response->object()->data;
            foreach ($list as $value) {
                $payments->push($value);
            }
        };
        return view('list-client-process', ['payments' => $payments]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-client');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        try {
            $data = $request->all();
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "access_token" => env("CHAVE_API")
            ])->post(env('URL_ASAAS') . "/api/v3/customers", [
                $data
            ]);

            if (!empty($response->object()->errors)) {
                $messagem = null;
                foreach ($response->object()->errors as $value) {
                    $messagem[] = $value->description;
                }
                return redirect("/list-client")->withErrors($messagem);
            }

            return redirect('/list-client')->with('sucess', 'Cadastrado com sucesso');
        } catch (\Throwable $th) {

            return response()->json([
                'message' => 'Operation Failed!',
                'status' => 'error',
                'code' => 400
            ]);
        }
    }
}
