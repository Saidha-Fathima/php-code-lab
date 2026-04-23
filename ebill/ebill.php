<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pread = $_POST['pread'];
    $cread = $_POST['cread'];

    if (is_numeric($pread) && is_numeric($cread) && $cread >= $pread) {
        $units = $cread - $pread;
        $amount = 0;

        if ($units <= 100) {
            $amount = 0;
        } elseif ($units <= 200) {
            $amount = ($units - 100) * 2.25;
        } elseif ($units <= 400) {
            $amount = (100 * 2.25) + (($units - 200) * 4.50);
        } elseif ($units <= 500) {
            $amount = (100 * 2.25) + (200 * 4.50) + (($units - 400) * 6.00);
        } else {
            $amount = $units * 8.00;
        }
    } else {
        $units = "Invalid Input";
        $amount = "Invalid Input";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Electricity Bill - PHP Code Lab</title>

<style>
body {
    margin: 0;
    font-family: 'Times New Roman', Times, serif;
    background: linear-gradient(45deg, #8ec5fc, #e0c3fc);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* HOME BUTTON */
.home {
    position: fixed;
    top: 25px;
    left: 25px;
    background: #4b0082;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 10px;
}

.home:hover {
    background: #6a1b9a;
}

/* MAIN WRAPPER */
.wrapper {
    display: flex;
    gap: 25px;
    width: 850px;
}

/* FORM CARD */
.form-card {
    flex: 1;
    background: rgba(255,255,255,0.92);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    text-align: center;
}

h1 {
    color: #4b0082;
    margin-bottom: 20px;
}

input[type="text"] {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 2px solid #ddd;
    border-radius: 8px;
}

input[type="submit"] {
    background: #4b0082;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 10px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #6a1b9a;
}

/* RESULT CARD (NEW THEME) */
.result-card {
    flex: 1;
    background: #0f172a;
    color: #00ff99;
    padding: 30px;
    border-radius: 15px;
    font-family: monospace;
    box-shadow: 0 10px 25px rgba(0,0,0,0.25);
}

.result-card h2 {
    color: #ffffff;
    text-align: center;
    margin-bottom: 20px;
    font-family: 'Times New Roman', Times, serif;
}

.bill-line {
    margin: 10px 0;
    padding: 10px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

/* EMPTY STATE */
.empty {
    color: #aaa;
    text-align: center;
    margin-top: 40px;
}
</style>

</head>

<body>

<a href="../index.html" class="home">Home</a>

<div class="wrapper">

<!-- FORM -->
<div class="form-card">

<h1>Tamil Nadu Electricity Bill Calculation</h1>

<form method="POST">

<input type="text" name="pread" placeholder="Previous Reading" required>
<br>
<input type="text" name="cread" placeholder="Current Reading" required>
<br>
<input type="submit" value="Calculate">

</form>

</div>

<!-- RESULT -->
<div class="result-card">

<h2>Bill Summary</h2>

<?php if(isset($units) && isset($amount)) { ?>

<div class="bill-line">Units Consumed: <?php echo $units; ?></div>
<div class="bill-line">Total Amount: <?php echo $amount; ?></div>

<?php } else { ?>

<div class="empty">No calculation yet</div>

<?php } ?>

</div>

</div>

</body>
</html>