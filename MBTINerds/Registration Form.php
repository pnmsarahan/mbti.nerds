<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      background-color: #f1f1f1;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #030228;
      border-radius: 5px;
      padding: 20px;
      width: 400px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border: 1px solid white;
    }

    .container h2 {
      text-align: center;
      color: #fff;
    }

    .container input[type="text"],
    .container input[type="email"],
    .container input[type="password"],
	.container input[type="cpassword"] {
      width: 95%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    .container button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      width: 100%;
    }

    .container button:hover {
      background-color: #45a049;
    }
	
	.container form > div {
	  display: flex;
	  flex-direction: column;
	  margin-bottom: 20px;
	}
	
	a {
		color: #fff;
	}

	a:hover {
	  color: #fff618;
	  cursor: pointer;
	}
  </style>
</head>

<body>
  <div class="container">
    <h2>Registration Form</h2>
    <form action="register.php" method="post">
      <div>
        <input type="text" name="name" placeholder="Name" required>
      </div>
      <div>
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div>
        <input type="password" name="cpassword" placeholder="Confirm Password" required>
      </div>
      <button type="submit" name="submit">Register</button>
	  <a href="The_MBTI_Nerds.html"><label><small><u>Click To Return Home</u></small></label></a>
    </form>
  </div>
</body>
</html>
