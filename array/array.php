<?php
$arr = array(10, 2, "welcome", 1.5);

$numbers = array(10, 20, 30, 40, 50);
?>

<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title>Array Concepts - PHP Code Lab</title>

<style>
body {
    font-family: 'Times New Roman', Times, serif;
    background: linear-gradient(45deg, #8ec5fc, #e0c3fc);
    margin: 0;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    display: flex;
    gap: 20px;
    width: 95%;
    max-width: 1000px;
}

/* LEFT SIDE */
.box {
    flex: 1;
    background: rgba(255,255,255,0.9);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

/* RIGHT SIDE OUTPUT (EDITOR STYLE) */
.output {
    flex: 1;
    background: #1e1e1e;
    color: #00ff99;
    padding: 25px;
    border-radius: 15px;
    font-family: monospace;
    font-size: 14px;
    overflow-x: auto;
}

h2 {
    text-align: center;
    color: #4b0082;
}

.output h2 {
    color: #00ff99;
    font-family: 'Times New Roman', Times, serif;
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

<a href="../index.html" class="back-button">← Home</a>

<div class="container">

<!-- LEFT SIDE: EXPLANATION -->

<div class="box">
    <h2>Arrays in PHP</h2>

<p><b>Definition:</b> Array is a collection of multiple values stored in a single variable.</p>

<p><b>Types of Arrays:</b></p>
<ul>
    <li>Indexed Array</li>
    <li>Associative Array</li>
    <li>Multidimensional Array</li>
</ul>

<p><b>Key Functions:</b></p>
<ul>
    <li>count() → returns number of elements</li>
    <li>var_dump() → shows structure of array</li>
    <li>foreach → best loop for arrays</li>
</ul>

<p><b>Why Arrays?</b></p>
<ul>
    <li>Store multiple values</li>
    <li>Easy data management</li>
    <li>Used in real-world applications (DB, APIs)</li>
</ul>

</div>

<!-- RIGHT SIDE: OUTPUT -->

<div class="output">

<h2>Array Output</h2>

<?php
echo "var_dump() output:<br>";
var_dump($arr);

echo "<br><br>For Loop Output:<br>";

for ($i = 0; $i < count($numbers); $i++) {
    echo "numbers[$i] = " . $numbers[$i] . "<br>";
}

echo "<br>Foreach Loop Output:<br>";

foreach ($numbers as $num) {
    echo $num . "<br>";
}
?>

</div>

</div>

</body>
</html>
