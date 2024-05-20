<?php
session_start(); // Start a session (if not already started)

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hardcoded credentials (for demonstration purposes)
    $validEmail = "sadabsiperkhan@gmail.com";
    $validPassword = "hydrogen";

    // Check if entered credentials match
    if ($email === $validEmail && $password === $validPassword) {
        // Authentication successful
        $_SESSION["authenticated"] = true; // Set session variable
        header("Location: index.php"); // Redirect to a welcome page
        exit(); // Terminate script execution
    } else {
        // Authentication failed
        $error = "Invalid email or password. Please try again.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		.container {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			padding: 20px;
			margin-top: 100px;
			max-width: 400px;
			margin-left: auto;
			margin-right: auto;
		}
		.form-group {
			margin-bottom: 20px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"],
		input[type="password"] {
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #4267B2;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #39579a;
		}
		.error {
			color: red;
			font-size: 14px;
			margin-top: 5px;
		}
	</style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
<script>
	var message = "Function Disabled!";

function clickIE4() {
    if (event.button == 2 || (event.ctrlKey && event.keyCode == 85)) {
        alert(message);
        return false;
    }
}

function clickNS4(e) {
    if (
        document.layers ||
        (document.getElementById && !document.all) ||
        e.ctrlKey
    ) {
        if (e.which == 2 || e.which == 3) {
            alert(message);
            return false;
        }
    }
}

if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS4;
} else if (document.all && !document.getElementById) {
    document.onmousedown = clickIE4;
}

document.oncontextmenu = new Function("alert(message);return false");
document.onkeydown = function (e) {
    if (e.ctrlKey && e.keyCode == 85) {
        alert(message);
        e.preventDefault(); // Prevent Ctrl+U
        return false;
    }
};
</script>
</html>
