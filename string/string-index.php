<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concepts</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(45deg, #8ec5fc, #e0c3fc);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            color: #333;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 3rem;
            color: #4b0082;
            letter-spacing: 2px;
        }

        header p {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #555;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            max-width: 1000px;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            padding: 35px 25px;
            border-radius: 15px;
            text-align: center;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            color: #4b0082;
            width: 260px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(75, 0, 130, 0.3);
            color: #8a2be2;
        }

        footer {
            margin-top: 40px;
            font-size: 0.9rem;
            color: #555;
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

<a href="../index.html" class="back-button">Home</a>

    <header>
        <h1>String Concepts</h1>
        <p>Learn PHP string operations in different ways</p>
    </header>

    <div class="cards">

        <a href="string-default.php" class="card">
            Default String Concept
        </a>

        <a href="string-button.php" class="card">
            Particular String Concept<br>(Using Button)
        </a>

        <a href="string-select.php" class="card">
            Particular String Concept<br>(Using Select Input)
        </a>

    </div>

    <footer>
        <p>&copy; 2026 PHP Code Lab</p>
    </footer>

</body>

</html>