<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\Item;
use MercadoPago\Preference;
use MercadoPago;

class CheckoutController extends Controller
{
    public function index()
    {
        // Configura as credenciais
        MercadoPago\SDK::setAccessToken('APP_USR-3800988944279872-091608-b8df341400640c48c804e2164e746251-326041310');

        // Cria um item de compra
        $item = new Item();
        $item->title = 'Produto de Exemplo';
        $item->quantity = 1;
        $item->unit_price = 100.00;

        // Cria uma preferência de pagamento
        $preference = new Preference();
        $preference->items = [$item];

        $preference->payment_methods = [
            "excluded_payment_types" => [
                ["id" => "credit_card"],
                ["id" => "debit_card"],
                ["id" => "ticket"],
                ["id" => "atm"]
            ],
            "excluded_payment_methods" => []
        ];
        $preference->back_urls = [
            'success' => route('checkout.success'),
            'failure' => route('checkout.failure'),
            'pending' => route('checkout.pending'),
        ];
        $preference->auto_return = 'approved';

        $preference->save();

        // Retorna a view com a preferência
        return view('index', ['preference' => $preference]);
    }

    public function success()
    {
        return view('checkout.success');
    }

    // Método para o URL de falha
    public function failure()
    {
        return view('checkout.failure');
    }

    // Método para o URL pendente
    public function pending()
    {
        return view('checkout.pending');
    }
}
