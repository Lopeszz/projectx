<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercadoPago\Item;
use MercadoPago\Preference;
use MercadoPago;

class CheckoutController extends Controller
{
    public function index()
    {
        // Configura as credenciais
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.access_token'));
        // Cria um item de compra
        $item = new Item();
        $item->title = 'Ingresso da Festa';
        $item->quantity = 1;
        $item->unit_price = 0.01;

        // Cria uma preferência de pagamento
        $preference = new Preference();
        $preference->items = [$item];

        $preference->payment_methods = [
            "excluded_payment_types" => [
                // ["id" => "credit_card"],
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

    public function success(Request $request)
    {
        $email = $request->input('email');
        if ($email) {
            $this->sendSuccessEmail([], $email);
        }

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
