<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile - Cake Shop</title>
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

        /* Profile Card */
        .profile-container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .profile-card {
            background: #fff;
            width: 420px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .profile-card img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 3px solid #e75480;
            margin-bottom: 15px;
        }

        .profile-card h3 {
            margin: 10px 0 5px;
            color: #333;
        }

        .profile-card p {
            color: #777;
            font-size: 14px;
            margin-bottom: 20px;
        }

        /* Profile Details */
        .profile-details {
            text-align: left;
        }

        .profile-details label {
            font-size: 14px;
            color: #555;
        }

        .profile-details input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
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
        <a href="#">Logout</a>
    </div>

    <div class="profile-container">
        <div class="profile-card">
            <img src="https://via.placeholder.com/110" alt="User Profile">
            <h3>Disha Rathod</h3>
            <p>disharathod@example.com</p>

            <div class="profile-details">
                <label>Full Name</label>
                <input type="text" value="Disha Rathod">

                <label>Email</label>
                <input type="email" value="disharathod@example.com">

                <label>Phone</label>
                <input type="text" value="9876543210">

                <label>Address</label>
                <input type="text" value="Ahmedabad, India">

                <a href="/edit_profile/{{ $customer->id }}" class="btn">Update Profile</a>
            </div>
        </div>
    </div>

</body>
</html>
