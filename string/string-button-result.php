<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            max-width: 500px;
            text-align: center;
        }

        h2 {
            color: #4b0082;
            margin-bottom: 15px;
        }

        .output p {
            font-size: 1.1rem;
            margin: 10px 0;
            color: #4b0082;
            font-weight: 600;
        }

        .output span {
            color: #333;
            font-weight: normal;
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

<a href="string-button.php" class="back-button">Back</a>

<div class="container">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = $_POST["name"];
    $operation = isset($_POST["operation"]) ? $_POST["operation"] : '';
    $compareWith = "Sharina";

    echo "<h2>String Operation Result</h2>";

    echo "<div class='output'>";
    echo "<p><strong>Date & Time:</strong> <span>" . date("d-F-Y (l) h:ia") . "</span></p>";
    echo "<p><strong>Original Input:</strong> <span>" . htmlspecialchars($input) . "</span></p>";

    switch ($operation) {

        case "Trim":
            echo "<p><strong>Trimmed:</strong> <span>" . htmlspecialchars(trim($input, "sna")) . "</span></p>";
            break;

        case "Ltrim":
            echo "<p><strong>Left Trimmed:</strong> <span>" . htmlspecialchars(ltrim($input, "s")) . "</span></p>";
            break;

        case "Rtrim":
            echo "<p><strong>Right Trimmed:</strong> <span>" . htmlspecialchars(rtrim($input, "na")) . "</span></p>";
            break;

        case "Lowercase":
            echo "<p><strong>Lowercase:</strong> <span>" . htmlspecialchars(strtolower($input)) . "</span></p>";
            break;

        case "Uppercase":
            echo "<p><strong>Uppercase:</strong> <span>" . htmlspecialchars(strtoupper($input)) . "</span></p>";
            break;

        case "ucfirst":
            echo "<p><strong>Uppercase First Letter:</strong> <span>" . htmlspecialchars(ucfirst($input)) . "</span></p>";
            break;

        case "ucwords":
            echo "<p><strong>Uppercase Each Word:</strong> <span>" . htmlspecialchars(ucwords($input)) . "</span></p>";
            break;

        case "ord":
            if ($input !== "") {
                echo "<p><strong>ASCII Value:</strong> <span>" . ord($input[0]) . "</span></p>";
            } else {
                echo "<p>Please enter at least one character.</p>";
            }
            break;

        case "strlen":
            echo "<p><strong>String Length:</strong> <span>" . strlen($input) . "</span></p>";
            break;

        case "strrev":
            echo "<p><strong>Reversed String:</strong> <span>" . htmlspecialchars(strrev($input)) . "</span></p>";
            break;

        case "str_word_count":
            echo "<p><strong>Word Count:</strong> <span>" . str_word_count($input) . "</span></p>";
            break;

        case "strpos":
            $pos = strpos($input, "a");
            if ($pos !== false) {
                echo "<p><strong>Position of 'a':</strong> <span>$pos</span></p>";
            } else {
                echo "<p>'a' not found in the string.</p>";
            }
            break;

        case "strcmp":
            echo "<p><strong>Compare (case-sensitive):</strong> <span>" . strcmp($input, $compareWith) . "</span></p>";
            break;

        case "strcasecmp":
            echo "<p><strong>Compare (case-insensitive):</strong> <span>" . strcasecmp($input, $compareWith) . "</span></p>";
            break;

        case "Substr":
            echo "<p><strong>Substring (first 3 characters):</strong> <span>" . htmlspecialchars(substr($input, 0, 3)) . "</span></p>";
            break;

        default:
            echo "<p>No valid operation selected.</p>";
            break;
    }

    echo "</div>";

} else {
    echo "<div class='container'><p>No input received.</p></div>";
}
?>

</div>

</body>
</html>