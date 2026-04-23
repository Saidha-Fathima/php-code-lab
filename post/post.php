<?php
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$course = $_POST['course'];
?>

<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title>POST Result</title>

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
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

h2 {
    color: #4b0082;
    text-align: center;
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

<a href="post.html" class="back-button">Back</a>

<div class="container">

<!-- LEFT SIDE RESULT -->

<div class="box">
    <h2>POST Result</h2>
    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Gender:</b> <?php echo $gender; ?></p>
    <p><b>Course:</b> <?php echo $course; ?></p>
</div>

<!-- RIGHT SIDE INFO -->

<div class="box">
    <h2>About POST Method</h2>

<p>
    POST method sends data securely inside request body (not visible in URL).
</p>

<p><b>Key Features:</b></p>
<ul>
    <li>Data not shown in URL</li>
    <li>More secure than GET</li>
    <li>No size limit</li>
    <li>Used for forms, login, registration</li>
</ul>

<p><b>Difference:</b></p>
<ul>
    <li>GET → visible in URL</li>
    <li>POST → hidden data</li>
</ul>

</div>

</div>

</body>
</html>
