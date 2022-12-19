<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Hi {{ $order->firstname }} {{ $order->lastname }}</p>
    <p>Your order has been successfully placed.</p>
    <br/>
    <ul>
        <li><img src="{{ asset('images/projects') }}/{{ $order->image }}" width="100" alt="{{ $order->name }}"></li>
        <li>{{ $order->name }}</li>
        <li>UGx{{ $order->price }}</li>
    </ul>

    <br/>
    <p>Thank you for choosing our service.</p>
    <p>We look forward to promptly attending to your request.</p>
    <hr/>
    <h3>DITHER TECHNOLOGIES</h3>
    <p>For more inquiries you can reach us on: <span>+256 787045644 / +256 703950394</span></p>
    <p>Thank you</p>
</body>
</html>
