<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile - Cake Shop</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff5f7;
        }

        /* Header */
        .header {
            background: #e75480;
            color: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            margin: 0;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }

        /* Form */
        .form-container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .edit-profile {
            background: #fff;
            width: 420px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .edit-profile h3 {
            text-align: center;
            color: #e75480;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 6px 0 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        textarea {
            resize: none;
            height: 70px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #e75480;
            border: none;
            color: #fff;
            font-size: 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background: #d64570;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>🍰 Cake Shop</h2>
        <a href="profile.html">Back to Profile</a>
    </div>

    <div class="form-container">
        <form action="/update_profile/{{ $customer->id }}" method="post" class="edit-profile">
            @csrf
            <h3>Edit Profile</h3>

            <label>Full Name</label>
            <input type="text" name="name" value="{{ $customer->name }}">   
            <label>Email</label>
            <input type="email" name="email" value="{{ $customer->email }}">

            <label>Phone</label>
            <input type="number" name="mobile" value="{{ $customer->mobile }}">

            <label>Address</label>
            <textarea name="address">{{ $customer->address }}</textarea>

            <button type="submit" class="btn">Save Changes</button>
        </form>
    </div>

</body>
</html>
