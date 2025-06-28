<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Confirmation</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid #dddddd;
            border-radius: 10px;
        }

        .header {
            text-align: center;
            /* padding: 20px; */
            border-bottom: 1px solid #ddd;
        }

        .header img {
            max-height: 50px;
        }

        .header h1 {
            margin: 15px 0 5px;
            font-size: 24px;
            text-transform: uppercase;
        }

        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            margin-top: 10px;
        }

        .section {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .section h2 {
            font-size: 18px;
            margin-bottom: 15px;
            text-align: center;
            text-transform: uppercase;
            color: #444;
        }

        .space-between {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        .info-block p {
            font-size: 14px;
            margin: 8px 0;
        }

        .info-block strong,
        .info-block div {
            display: inline-block;
            min-width: 5rem;
            margin-right: 1rem;
        }

        .title {
            color: #fff;
            padding: .0 .5rem;
            background: #000;
        }

        .item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            font-size: 14px;
            border-bottom: 1px solid #eee;
        }

        .totals {
            padding-top: 15px;
        }

        .totals p {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
            font-size: 14px;
        }

        .totals p:last-child {
            font-weight: bold;
            font-size: 16px;
            margin-top: 10px;
        }

        .cta {
            text-align: center;
            padding: 25px;
        }

        .cta a {
            background-color: #000;
            color: #fff !important;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            display: inline-block;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 13px;
            color: #666;
        }

        .social-links a {
            margin: 0 8px;
            color: #666;
            text-decoration: none;
        }

        .margin-left {
            margin-left: 10px;
        }

        @media (max-width: 600px) {
            .item {
                flex-direction: column;
                align-items: flex-start;
            }

            .info-block strong {
                display: block;
                margin-bottom: 4px;
            }

            .cta a {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- HEADER -->
        <div class="header">
            <!-- <img src="https://via.placeholder.com/150x50?text=LOGO" alt="Company Logo"> -->
            <h1>Thank You for Your Order!</h1>
            <p class="status-badge">Order #{{ $orderReference }}</p>
        </div>

        <!-- CUSTOMER DETAILS -->
        <div class="section">
            <h2>Customer Details</h2>
            <div class="info-block">
                <p><strong>Name:</strong> {{ $checkoutName }}</p>
                <p><strong>Email:</strong> {{ $checkoutEmail }}</p>
                <p><strong>Phone:</strong> {{ $checkoutPhone }}</p>
            </div>
        </div>

        <!-- ORDER SUMMARY -->
        <div class="section">
            <h2>Order Summary</h2>
            @foreach ($CartItems as $item)
            <div class="info-block">
                <p>
                    <strong class="title">• {{ $item['product']->Name }} </strong>
                    <span class="title">x<b>{{ $item['quantity'] }}</b></span>
                    @if($item['size'])
                    <span class="title">Size: <b>{{ $item['size'] ?? 'Standard' }}</b></span>
                    @endif
                    <span class="title">{{ $item['price'] ?? '0.00' }} <b>MAD</b></span>
                </p>
            </div>
            <hr style="border: none; border-top: 1px solid #eee; margin: 15px 0;">
            @endforeach

            <div class="info-block totals">
                <p><strong>Subtotal:</strong> {{ $SubTotal }}</p>
                <p><strong>Shipping:</strong> {{ $ShippingCost }}</p>
                <p><strong>Total:</strong> {{ $Total }}</p>
            </div>
        </div>

        <!-- PAYMENT INFO -->
        <div class="section">
            <h2>Payment Information</h2>
            <div class="info-block">
                <p><strong>Payment Method:</strong> {{ $checkoutPaymentMethod }}</p>
                <p><strong>Billing Address:</strong> {{ $checkoutAddress }}, {{ $checkoutCity }}, {{ $checkoutCountry }}
                </p>
            </div>
        </div>

        <!-- SHIPPING INFO -->
        <div class="section">
            <h2>Shipping Information</h2>
            <div class="info-block">
                <p><strong>Shipping Address:</strong> {{ $checkoutAddress }}, {{ $checkoutCity }}, {{ $checkoutCountry
                    }}</p>
                <p><strong>Shipping Method:</strong> {{ $checkoutShippingMethod ?? 'Standard Shipping' }}</p>
                <p><strong>Estimated Delivery:</strong> {{ $estimatedDeliveryDate ?? '3–7 Business Days' }}</p>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta">
            <a href="{{ $orderViewUrl ?? '#' }}" target="_blank">View Order</a>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p>Need help? Call us at {{ $supportPhone ?? '+212 600-000-000' }} or email <a
                    href="mailto:{{ $supportEmail ?? 'support@example.com' }}">{{ $supportEmail ?? 'support@example.com'
                    }}</a></p>
            <div class="social-links">
                <a href="#">Facebook</a> •
                <a href="#">Twitter</a> •
                <a href="#">Instagram</a>
            </div>
            <p><a href="{{ $unsubscribeUrl ?? '#' }}">Unsubscribe</a></p>
            <p>&copy; {{ date('Y') }} {{ Config::get('app.name') }} — All rights reserved.</p>
        </div>
    </div>
</body>

</html>