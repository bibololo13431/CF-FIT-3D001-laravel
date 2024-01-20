<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Customer: {{ $order->name }}</h2>
    <p>Email: {{ $order->email }}</p>
    <p>Phone: {{ $order->phone }}</p>
    <p>Address: {{ $order->address }}</p>
    <p>Payment Method: {{ $order->payment_method }}</p>
    <p>Seat Detail: {{ $order->seatdetail }}</p>
    <p>Total: ${{ number_format($order->total, 2) }}</p>
    <p>Status: {{ $order->status }}</p>
    <p>Purchase Data: {{ $order->created_at->format('d-m-Y H:i:s') }}</p>
</body>
</html>