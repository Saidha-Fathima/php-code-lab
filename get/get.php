<?php
$name = $_GET['name'];
$email = $_GET['email'];
$course = $_GET['course'];
?>

<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title>GET Result</title>

<style>
body {
    font-family: 'Times New Roman', Times, serif;
    background: linear-gradient(45deg, #8ec5fc, #e0c3fc);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    display: flex;
    gap: 20px;
    width: 900px;
}

.box {
    flex: 1;
    background: rgba(255,255,255,0.9);
    padding: 25px;
    border-radius: 15px;
}

h2 {
    text-align: center;
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

<a href="get.html" class="back-button">← Back</a>

<div class="container">

<div class="box">
    <h2>GET Result</h2>
    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Course:</b> <?php echo $course; ?></p>
</div>

<div class="box">
    <h2>About GET Method</h2>

<p>GET sends data through URL parameters.</p>

<p><b>Features:</b></p>
<ul>
    <li>Visible in URL</li>
    <li>Not secure</li>
    <li>Used for fetching data</li>
    <li>Limited size</li>
</ul>

<p><b>Example:</b></p>
<p>get.php?name=John&course=MCA</p>


</div>

</div>

</body>
</html>
