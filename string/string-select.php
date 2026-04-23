<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>String Operation Result</title>
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
            max-width: 480px;
            text-align: center;
        }

        h2 {
            color: #4b0082;
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 1.9rem;
        }

        form {
            margin-bottom: 30px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 20px;
            border: 2px solid #4b0082;
            border-radius: 8px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        select:focus {
            outline: none;
            border-color: #8a2be2;
            box-shadow: 0 0 6px #8a2be2aa;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4b0082;
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-family: 'Times New Roman', Times, serif;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #6a1b9a;
        }

        .output h2 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #6a1b9a;
            margin: 12px 0;
        }

        .output h5 {
            font-size: 1.1rem;
            font-weight: bold;
            color: #4b0082;
            margin-bottom: 20px;
        }

        .output h1 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #4b0082;
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
    <h2>String Operations</h2>
    <form method="POST" action="">
        <label for="name">Enter String:</label>
        <input type="text" id="name" name="name" required />

        <label for="operation">Select Operation:</label>
        <select id="operation" name="operation" required>
            <option value="Trim">Trim</option>
            <option value="Ltrim">Left Trim</option>
            <option value="Rtrim">Right Trim</option>
            <option value="Lowercase">Lowercase</option>
            <option value="Uppercase">Uppercase</option>
            <option value="ucfirst">Uppercase First Letter</option>
            <option value="ucwords">Uppercase First Letter of Each Word</option>
            <option value="ord">ASCII of First Character</option>
            <option value="strlen">String Length</option>
            <option value="strrev">String Reverse</option>
            <option value="str_word_count">Word Count</option>
            <option value="strpos">Position of 'a'</option>
            <option value="strcmp">Compare with "saidha fathima" (case-sensitive)</option>
            <option value="strcasecmp">Compare with "saidha fathima" (case-insensitive)</option>
            <option value="Substr">Substring (First 4 Characters)</option>
        </select>

        <input type="submit" value="Perform Operation" />
    </form>

    <div class="output">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["name"];
            $operation = isset($_POST["operation"]) ? $_POST["operation"] : '';
            $compareWith = "saidha fathima";


            switch ($operation) {
                case "Trim":
                    echo "<h2><strong>Trimmed:</strong> " . htmlspecialchars(trim($input, "sa")) . "</h2>";
                    break;
                case "Ltrim":
                    echo "<h2><strong>Left Trimmed:</strong> " . htmlspecialchars(ltrim($input, "said")) . "</h2>";
                    break;
                case "Rtrim":
                    echo "<h2><strong>Right Trimmed:</strong> " . htmlspecialchars(rtrim($input, "ima")) . "</h2>";
                    break;
                case "Lowercase":
                    echo "<h2><strong>Lowercase:</strong> " . htmlspecialchars(strtolower($input)) . "</h2>";
                    break;
                case "Uppercase":
                    echo "<h2><strong>Uppercase:</strong> " . htmlspecialchars(strtoupper($input)) . "</h2>";
                    break;
                case "ucfirst":
                    echo "<h2><strong>Uppercase First Letter:</strong> " . htmlspecialchars(ucfirst($input)) . "</h2>";
                    break;
                case "ucwords":
                    echo "<h2><strong>Uppercase First Letter of Each Word:</strong> " . htmlspecialchars(ucwords($input)) . "</h2>";
                    break;
                case "ord":
                    if ($input !== "") {
                        echo "<h2><strong>ASCII value of first character:</strong> " . ord($input[0]) . "</h2>";
                    } else {
                        echo "<h2>Please enter at least one character.</h2>";
                    }
                    break;
                case "strlen":
                    echo "<h2><strong>String Length:</strong> " . strlen($input) . "</h2>";
                    break;
                case "strrev":
                    echo "<h2><strong>String Reverse:</strong> " . htmlspecialchars(strrev($input)) . "</h2>";
                    break;
                case "str_word_count":
                    echo "<h2><strong>Word Count:</strong> " . str_word_count($input) . "</h2>";
                    break;
                case "strpos":
                    $pos = strpos($input, "a");
                    if ($pos !== false) {
                        echo "<h2><strong>Position of 'a':</strong> $pos</h2>";
                    } else {
                        echo "<h2>'a' not found in the string.</h2>";
                    }
                    break;
                case "strcmp":
                    echo "<h2><strong>Compare with '$compareWith' (case-sensitive):</strong> " . strcmp($input, $compareWith) . "</h2>";
                    break;
                case "strcasecmp":
                    echo "<h2><strong>Compare with '$compareWith' (case-insensitive):</strong> " . strcasecmp($input, $compareWith) . "</h2>";
                    break;
                case "Substr":
                    echo "<h2><strong>Substring (first 4 characters):</strong> " . htmlspecialchars(substr($input, 0, 4)) . "</h2>";
                    break;
                default:
                    echo "<h2>No valid operation selected.</h2>";
                    break;
            }
        }
        ?>
    </div>
</div>

</body>
</html>