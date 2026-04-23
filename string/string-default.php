<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Task</title>
    <style>
	body {
            font-family: times new roman;
            background: linear-gradient(135deg, #e0c3fc, #8ec5fc);
            display: flex;
            justify-content: center;
            align-items: center;
	    height: 100vh;
        }

        form {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color:   #4b0082;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 8px;
            color:  #6a0dad;
            font-weight: bold;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #6a0dad;
            border-radius: 5px;
            font-size: 16px;
        }

	input[type="submit"] {
   	background-color: #6a0dad;
    	color: white;
    	padding: 10px;
    	width: 100%;
    	border: none;
    	border-radius: 5px;
    	font-size: 16px;
    	cursor: pointer;
    	transition: background-color 0.3s ease;
	}

	input[type="submit"]:hover {
   	 background-color: #4b0082;
	}


.back-button {
    position: fixed;
    top: 20px;
    left: 20px;
    background: #4b0082;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 10px;
}
.back-button:hover {
    background: #6a1b9a;
}
</style>

</head>

<body>

<a href="string-index.php" class="back-button">Home</a>
 

        <form method="POST" action="string-default-result.php">
	<h1>String Task</h1>
            <label for="name">Enter a name:</label>
            <input type="text" id="name" name="name" required>
            <input type="submit" value="OK">
        </form>

</body>
</html>
