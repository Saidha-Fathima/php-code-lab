<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simple Date Operations</title>
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
            position: relative;
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

        input[type="date"],
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

        input[type="date"]:focus,
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
            font-size: 1.3rem;
            font-weight: 600;
            color: #6a1b9a;
            margin: 12px 0;
        }

        /* Back button fixed top-left */
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            padding: 10px 25px;
            background-color: #4b0082;
            color: white;
            text-decoration: none;
            font-weight: 700;
            border-radius: 10px;
            font-family: 'Times New Roman', Times, serif;
            transition: background-color 0.3s ease;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(0,0,0,0.3);
        }
        .back-button:hover {
            background-color: #6a1b9a;
        }
    </style>
</head>
<body>

<a href="../index.html" class="back-button">Home</a>

<div class="container">
    <h2>Simple Date Operations</h2>

    <form method="POST" action="">
        <label for="date">Date (YYYY-MM-DD):</label>
        <input type="date" id="date" name="date" required>

        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="dayofweek">Day of the Week</option>
            <option value="adddays">Add 7 Days</option>
            <option value="subdays">Subtract 7 Days</option>
            <option value="timestamp">Convert to Timestamp</option>
            <option value="today">Today's Date</option>
            <option value="difference">Days Difference from Today</option>
        </select>

        <input type="submit" value="Go">
    </form>

    <div class="output">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = isset($_POST['date']) ? $_POST['date'] : '';
            $op = isset($_POST['operation']) ? $_POST['operation'] : '';
            $ts = strtotime($date);
            $today_ts = strtotime(date('Y-m-d'));

            if (!$date || !$op) {
                echo "<h2>Please enter date and operation.</h2>";
            } else {
                switch ($op) {
                    case 'dayofweek':
                        echo $ts ? "<h2>Day of the Week: " . date('l', $ts) . "</h2>" : "<h2>Invalid date</h2>";
                        break;
                    case 'adddays':
                        echo $ts ? "<h2>Date +7 days: " . date('Y-m-d', strtotime('+7 days', $ts)) . "</h2>" : "<h2>Invalid date</h2>";
                        break;
                    case 'subdays':
                        echo $ts ? "<h2>Date -7 days: " . date('Y-m-d', strtotime('-7 days', $ts)) . "</h2>" : "<h2>Invalid date</h2>";
                        break;
                    case 'timestamp':
                        echo $ts ? "<h2>Timestamp: " . $ts . "</h2>" : "<h2>Invalid date</h2>";
                        break;
                    case 'today':
                        echo "<h2>Today's Date: " . date('Y-m-d') . "</h2>";
                        break;
                    case 'difference':
                        echo $ts ? "<h2>Days difference from today: " . floor(($ts - $today_ts) / 86400) . "</h2>" : "<h2>Invalid date</h2>";
                        break;
                    default:
                        echo "<h2>Invalid operation</h2>";
                }
            }
        }
        ?>
    </div>
</div>

</body>
</html>
