<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cake Shop Signup</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signup-box {
            background: #fff;
            padding: 30px;
            width: 340px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .signup-box h2 {
            margin-bottom: 20px;
            color: #e75480;
        }

        .signup-box input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .signup-box button {
            width: 100%;
            padding: 10px;
            background: #e75480;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .signup-box button:hover {
            background: #d64570;
        }

        .signup-box p {
            margin-top: 15px;
            font-size: 14px;
        }

        .signup-box a {
            color: #e75480;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="signup-box">
        <h2>🍰 Cake Shop Signup</h2>
        
        <form method="POST" action="/add_signup">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="mobile" placeholder="Mobile Number" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="/login">Login</a></p>
    </div>
     @include('sweetalert::alert')
</body>
</html>
