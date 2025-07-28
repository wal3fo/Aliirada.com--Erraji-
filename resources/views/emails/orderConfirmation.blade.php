<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Confirmation</title>
</head>

<body>
    <h1>Thank You for Your Order!</h1>
    <p>Order #{{ $orderReference }}</p>

    <h2>Customer Details</h2>
    <p>Name: {{ $checkoutName }}</p>
    <p>Email: {{ $checkoutEmail }}</p>
    <p>Phone: {{ $checkoutPhone }}</p>

    <h2>Order Summary</h2>
    @foreach ($CartItems as $item)
        <p>
            • {{ $item['product']->Name }} x{{ $item['quantity'] }}
            @if($item['size'])
                Size: <b>{{ $item['size'] ?? 'Standard' }}</b>
            @endif
            Price: {{ number_format($item['product']->PriceOf * $item['quantity'], 2, ',', '.') ?? '0.00' }} MAD
        </p>
    @endforeach
    <p>Subtotal: {{ $SubTotal }} MAD</p>
    <p>Shipping: {{ $ShippingCost }} MAD</p>
    <p>Total: {{ $Total }} MAD</p>

    <h2>Payment Information</h2>
    <p>Payment Method: {{ $checkoutPaymentMethod }}</p>
    <p>Billing Address: {{ $checkoutAddress }}, {{ $checkoutCity }}, {{ $checkoutCountry }}</p>

    <h2>Shipping Information</h2>
    <p>Shipping Address: {{ $checkoutAddress }}, {{ $checkoutCity }}, {{ $checkoutCountry }}</p>
    <p>Shipping Method: {{ $checkoutShippingMethod ?? 'Standard Shipping' }}</p>
    <p>Estimated Delivery: {{ $estimatedDeliveryDate ?? '3–7 Business Days' }}</p>
</body>

</html>