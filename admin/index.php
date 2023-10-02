<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #222;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .login-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .login-container h1 {
            margin: 0 0 20px;
            color: #333;
        }

        .login-container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #555;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .custom-button {
		    background-color: #666;
		    color: #fff;
		    padding: 10px 20px;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}
		.custom-button:hover {
			background-color: #222;
		}

        .error-msg {
        	width: 90%;
        	background-color: transparent;
            color: red;
            border-radius: 4px;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .login-container {
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <div class="error-msg">
            <?php 
            include "../inc/config.php";
            $jml = 0;
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $pass = md5($_POST['password']);
                $sqlCek = mysqli_query($mysqli, "SELECT * FROM user where username='$_POST[username]' AND password='$pass' AND aktif='Y'");
                $jml = mysqli_num_rows($sqlCek);
                $d = mysqli_fetch_array($sqlCek);
                
                if ($jml > 0) {
                    session_start();
                    $_SESSION['login'] = TRUE;
                    $_SESSION['id'] = $d['id'];
                    $_SESSION['username'] = $d['username'];
                    $_SESSION['nama'] = $d['nama_lengkap'];
                    $_SESSION['upload_gambar'] = TRUE;
                    
                    header('location:dashboard.php');
                } else {
                    echo "Username dan password salah!";
                }
            }
            ?>
        </div>
        <form action="" method="post" name="login">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            
            <input type="submit" value="Login">
            <button type="submit" class="custom-button" onclick="redirectToIndex()">Home</button>
        </form>
    </div>

    <script>
		function redirectToIndex() {
		    window.location.href = '../index.php';
		}
    </script>	
</body>
</html>