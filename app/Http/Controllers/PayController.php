<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PayBoletoRequest;
use App\Http\Requests\PayCardRequest;
use Exception;
use Illuminate\Support\Facades\Http;

class PayController extends Controller
{

    public function createPay($id)
    {
        $formasPagamentos = ['BOLETO' => 'Boleto', 'CREDIT_CARD' => 'Cartão de crédito', "PIX" => "Pix"];
        return view('pay', ['formasPagamentos' => $formasPagamentos]);
    }

    public function createPayBoleto($customer)
    {
        return view('pay-boleto', ['customer' => $customer]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePayBoleto(PayBoletoRequest $request)
    {
        try {
            $data = $request->all();
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "access_token" => env("CHAVE_API")
            ])->post(env('URL_ASAAS') . "/api/v3/payments", [
                $data
            ]);

            if (!empty($response->object()->errors)) {
                $messagem = null;

                foreach ($response->object()->errors as $value) {
                    $messagem[] = $value->description;
                }
                return redirect("/list-client-process/$request->customer")->withErrors($messagem);
            }

            return redirect("/list-client-process/$request->customer")->with('sucess', 'Cadastrado com sucesso');
        } catch (\Throwable $th) {
            return redirect("/list-client-process/$request->customer")->with('errors', 'Operation Failed!');
        }
    }


    public function createPayPix($customer)
    {
        return view('pay-pix', ['customer' => $customer]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePayPix(PayBoletoRequest $request)
    {
        try {
            $data = $request->all();
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "access_token" => env("CHAVE_API")
            ])->post(env('URL_ASAAS') . "/api/v3/payments", [
                $data
            ]);

            if (!empty($response->object()->errors)) {
                $messagem = null;

                foreach ($response->object()->errors as $value) {
                    $messagem[] = $value->description;
                }
                return redirect("/list-client-process/$request->customer")->withErrors($messagem);
            }

            return redirect("/list-client-process/$request->customer")->with('sucess', 'Cadastrado com sucesso');
        } catch (\Throwable $th) {
            return redirect("/list-client-process/$request->customer")->with('errors', 'Operation Failed!');
        }
    }



    public function showPayPix($pay)
    {
        try {
            $pix = null;
            $response = Http::get(env('URL_ASAAS') . "/api/v3/payments/$pay/pixQrCode", [
                "Content-Type" => "application/json",
                "access_token" => env("CHAVE_API")
            ]);

            if ($response->object()->success === true) {
                $pix = $response->object();
            }

            return view('show-pix', ['pix' => $pix]);
        } catch (\Throwable $th) {
            return redirect("/list-client-process/1")->with('errors', 'Operation Failed!');
        }
    }


    public function createPayCard($customer)
    {
        return view('pay-card', ['customer' => $customer]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePayCard(PayCardRequest $request)
    {
        try {
            $data = $request->all();
            $value = [
                "customer" => $request->customer ? $request->customer : null,
                "billingType" => $request->billingType ? $request->billingType : null,
                "dueDate" => $request->dueDate ? $request->dueDate : null,
                "value" => $request->value ? $request->value : null,
                "description" => $request->description ? $request->description : null,
                "externalReference" => $request->externalReference ? $request->externalReference : null,
                "creditCard" => [
                    "holderName" => $request->holderName ? $request->holderName : null,
                    "number" => $request->number ? $request->number : null,
                    "expiryMonth" => $request->expiryMonth ? $request->expiryMonth : null,
                    "expiryYear" => $request->expiryYear ? $request->expiryYear : null,
                    "ccv" => $request->ccv ? $request->ccv : null
                ],
                "creditCardHolderInfo" => [
                    "name" => $request->name ? $request->name : null,
                    "email" => $request->email ? $request->email : null,
                    "cpfCnpj" => $request->cpfCnpj ? $request->cpfCnpj : null,
                    "postalCode" => $request->postalCode ? $request->postalCode : null,
                    "addressNumber" => $request->addressNumber ? $request->addressNumber : null,
                    "addressComplement" => $request->addressComplement ? $request->addressComplement : null,
                    "phone" => $request->phone ? $request->phone : null,
                    "mobilePhone" => $request->mobilePhone ? $request->mobilePhone : null
                ]
            ];
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "access_token" => env("CHAVE_API")
            ])->post(env('URL_ASAAS') . "/api/v3/payments", [
                $value
            ]);

            if (!empty($response->object()->errors)) {
                $messagem = null;

                foreach ($response->object()->errors as $value) {
                    $messagem[] = $value->description;
                }
                return redirect("/list-client-process/$request->customer")->withErrors($messagem);
            }
            return redirect("/list-client-process/$request->customer")->with('sucess', 'Cadastrado com sucesso');
        } catch (\Throwable $th) {
            return redirect("/list-client-process/$request->customer")->with('errors', 'Operation Failed!');
        }
    }
}
