<html>
<head>
    <title>String Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: linear-gradient(135deg, #e0c3fc, #8ec5fc);
        }
        h1 {
            color: #4b0082;
	    font-family:Times New Roman;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }
        th, td {
            border: 3px solid #4b0082;
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #6a0dad;;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
	p{
	margin-top: 30px;
	text-align: right; 
	font-size: 16px;	
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

<a href="string-default.php" class="back-button">Back</a>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $compareWith = "Sharina";
    $substring = "a";

    echo "<p>Current Date & Time: " . date("d-F-Y-l h:ia") . "</p>";

    echo "<center><h1>Original: $name</h1>";

    echo "<table>";
    echo "<tr><th>Operation</th><th>Result</th></tr>";


    echo "<tr><td>Trim</td><td>" . trim($name, "sna") . "</td></tr>";
    echo "<tr><td>Left Trim </td><td>" . ltrim($name, "s") . "</td></tr>";
    echo "<tr><td>Right Trim </td><td>" . rtrim($name, "na") . "</td></tr>";

    echo "<tr><td>Lowercase</td><td>" . strtolower($name) . "</td></tr>";
    echo "<tr><td>Uppercase</td><td>" . strtoupper($name) . "</td></tr>";
    echo "<tr><td>Uppercase First Letter</td><td>" . ucfirst($name) . "</td></tr>";
    echo "<tr><td>Uppercase First Letter of Each Word</td><td>" . ucwords($name) . "</td></tr>";

    echo "<tr><td>ASCII of First Character</td><td>" . ord($name) . "</td></tr>";

    echo "<tr><td>String Length</td><td>" . strlen($name) . "</td></tr>";
    echo "<tr><td>String Reverse</td><td>" . strrev($name) . "</td></tr>";
    echo "<tr><td>Word Count</td><td>" . str_word_count($name) . "</td></tr>";

    echo "<tr><td>Position of 'a'</td><td>" . strpos($name, "a") . "</td></tr>";


    echo "<tr><td>Compare with '$compareWith' (case-sensitive)</td><td>" . strcmp($name, $compareWith) . "</td></tr>";

    echo "<tr><td>Compare with '$compareWith' (case-insensitive)</td><td>" . strcasecmp($name, $compareWith) . "</td></tr>";

    echo "<tr><td>Substring (first 3 characters)</td><td>" . substr($name, 0, 3) . "</td></tr>";

    echo "</table></center>";

    

}
?>

</body>
</html>
