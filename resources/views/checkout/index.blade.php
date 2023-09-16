<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
</head>

<body>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('APP_USR-13f9187c-8f54-45ed-bf7e-357d21ad11bd');
        const bricksBuilder = mp.bricks();
    </script>

    <div id="wallet_container"></div>

    <script>
        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: "{{ $preference->id }}",
            },
        });
    </script>
</body>

</html>
