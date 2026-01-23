<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add to Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
        .cart-container {
            width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #f2f2f2;
        }
        img {
            width: 80px;
            border-radius: 5px;
        }
        .qty input {
            width: 60px;
            padding: 5px;
        }
        .price {
            color: #e91e63;
            font-weight: bold;
        }
        .total {
            text-align: right;
            font-size: 18px;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 18px;
            background: #e91e63;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }
        .btn.remove {
            background: #777;
        }
        .checkout {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="cart-container">
    <h1>Your Cart</h1>

    <table>
        <tr>
            <th>Product</th>
            <th>Image</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>Chocolate Birthday Cake</td>
            <td><img src="cake.jpg" alt="Cake"></td>
            <td class="price">₹599</td>
            <td class="qty"><input type="number" value="1" min="1"></td>
            <td class="price">₹599</td>
            <td><button class="btn remove">Remove</button></td>
        </tr>
    </table>

    <div class="total">
        <strong>Grand Total: ₹599</strong>
    </div>

    <div class="checkout">
        <button class="btn">Continue Shopping</button>
        <button class="btn">Checkout</button>
    </div>
</div>

</body>
</html>
