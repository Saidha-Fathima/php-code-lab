<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>String Operations (Buttons)</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            height: 100vh;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(45deg, #8ec5fc, #e0c3fc);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
        }

        .container {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            color: #4b0082;
            margin-bottom: 20px;
            font-size: 1.9rem;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 1.1rem;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 20px;
            border: 2px solid #4b0082;
            border-radius: 8px;
            font-size: 1.1rem;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #8a2be2;
            box-shadow: 0 0 6px #8a2be2aa;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 12px;
            background-color: #4b0082;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.95rem;
            font-weight: bold;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #6a1b9a;
        }

        .output h2 {
            font-size: 1.2rem;
            color: #6a1b9a;
            margin-top: 15px;
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

<div class="container">
    <h2>String Operations (Buttons)</h2>

    <form method="post" action="string-button-result.php">
        <label for="name">Enter String:</label>
        <input type="text" id="name" name="name" required>

        <div class="buttons">
            <input type="submit" name="operation" value="Trim">
            <input type="submit" name="operation" value="Ltrim">
            <input type="submit" name="operation" value="Rtrim">
            <input type="submit" name="operation" value="Lowercase">
            <input type="submit" name="operation" value="Uppercase">
            <input type="submit" name="operation" value="ucfirst">
            <input type="submit" name="operation" value="ucwords">
            <input type="submit" name="operation" value="ord">
            <input type="submit" name="operation" value="strlen">
            <input type="submit" name="operation" value="strrev">
            <input type="submit" name="operation" value="str_word_count">
            <input type="submit" name="operation" value="strpos">
            <input type="submit" name="operation" value="strcmp">
            <input type="submit" name="operation" value="strcasecmp">
            <input type="submit" name="operation" value="Substr">
        </div>
    </form>

    <div class="output">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["name"];
            $operation = $_POST["operation"];
            $compareWith = "saidha fathima";

            switch ($operation) {
                case "Trim":
                    echo "<h2>Trimmed: " . htmlspecialchars(trim($input, "sa")) . "</h2>";
                    break;
                case "Ltrim":
                    echo "<h2>Left Trimmed: " . htmlspecialchars(ltrim($input, "said")) . "</h2>";
                    break;
                case "Rtrim":
                    echo "<h2>Right Trimmed: " . htmlspecialchars(rtrim($input, "ima")) . "</h2>";
                    break;
                case "Lowercase":
                    echo "<h2>Lowercase: " . htmlspecialchars(strtolower($input)) . "</h2>";
                    break;
                case "Uppercase":
                    echo "<h2>Uppercase: " . htmlspecialchars(strtoupper($input)) . "</h2>";
                    break;
                case "ucfirst":
                    echo "<h2>Uppercase First Letter: " . htmlspecialchars(ucfirst($input)) . "</h2>";
                    break;
                case "ucwords":
                    echo "<h2>Uppercase Each Word: " . htmlspecialchars(ucwords($input)) . "</h2>";
                    break;
                case "ord":
                    echo "<h2>ASCII of First Character: " . ord($input[0]) . "</h2>";
                    break;
                case "strlen":
                    echo "<h2>String Length: " . strlen($input) . "</h2>";
                    break;
                case "strrev":
                    echo "<h2>Reversed String: " . htmlspecialchars(strrev($input)) . "</h2>";
                    break;
                case "str_word_count":
                    echo "<h2>Word Count: " . str_word_count($input) . "</h2>";
                    break;
                case "strpos":
                    $pos = strpos($input, "a");
                    echo ($pos !== false) 
                        ? "<h2>Position of 'a': $pos</h2>" 
                        : "<h2>'a' not found</h2>";
                    break;
                case "strcmp":
                    echo "<h2>Compare (case-sensitive): " . strcmp($input, $compareWith) . "</h2>";
                    break;
                case "strcasecmp":
                    echo "<h2>Compare (case-insensitive): " . strcasecmp($input, $compareWith) . "</h2>";
                    break;
                case "Substr":
                    echo "<h2>Substring: " . htmlspecialchars(substr($input, 0, 4)) . "</h2>";
                    break;
            }
        }
        ?>
    </div>
</div>

</body>
</html>