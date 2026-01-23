<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Birthday Cake - Product View</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
        }
        .product-container {
            width: 900px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            display: flex;
            gap: 30px;
            border-radius: 8px;
        }
        .product-image img {
            width: 350px;
            border-radius: 8px;
        }
        .product-details h1 {
            margin: 0;
            color: #333;
        }
        .price {
            color: #e91e63;
            font-size: 24px;
            margin: 10px 0;
        }
        .description {
            color: #555;
            margin-bottom: 15px;
        }
        .quantity {
            margin-bottom: 15px;
        }
        .quantity input {
            width: 60px;
            padding: 5px;
        }
        .btn {
            padding: 10px 20px;
            background: #e91e63;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background: #d81b60;
        }
    </style>
</head>
<body>

<div class="product-container">
    
    <div class="product-image">

        <img  src="{{asset('upload/product/'.$product->image)}}" alt="Product Image">
    </div>

    <div class="product-details">
        <h1>{{ $product->name }}</h1>
        <p class="price">₹{{ $product->price }}</p>

        <p class="description">
        {{ $product->discription }}
        </p>

        <div class="quantity">
            <label>Quantity:</label>
            <input type="number" value="1" min="1">
        </div>

        

        <button class="btn">Add to Cart</button>
        
    </div>
</div>


</body>
</html>
