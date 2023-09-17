<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use MercadoPago;

class WebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->all();
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.access_token'));

        // Aqui você pode processar os dados recebidos do webhook
        // e executar a lógica relacionada ao pagamento.

        // Exemplo: log dos dados recebidos do webhook
        Log::info('Webhook received:', $payload);

        // Retorne uma resposta JSON indicando que o webhook foi recebido com sucesso
        return response()->json(['message' => 'Webhook received successfully']);
    }
}
