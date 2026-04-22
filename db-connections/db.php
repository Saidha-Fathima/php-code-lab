<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title>Database Concepts - PHP Code Lab</title>

<style>
body {
    font-family: 'Times New Roman', Times, serif;
    background: linear-gradient(45deg, #8ec5fc, #e0c3fc);
    margin: 0;
    padding: 50px 0;
    display: flex;
    justify-content: center;
}

/* MAIN WRAPPER */
.container {
    width: 95%;
    max-width: 1200px;
}

/* EACH ROW */
.row {
    display: flex;
    gap: 30px;
    margin-bottom: 60px;
}

/* LEFT + RIGHT */
.left, .right {
    flex: 1;
    padding: 25px;
    border-radius: 15px;
}

/* LEFT CARD */
.left {
    background: rgba(255,255,255,0.92);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

/* RIGHT CODE */
.right {
    background: #1e1e1e;
    color: #00ff99;
    font-family: monospace;
    font-size: 14px;
}

/* HEADINGS */
h2 {
    text-align: center;
    color: #4b0082;
    margin-bottom: 20px;
}

.right h2 {
    color: #00ff99;
}

h3 {
    color: #6a1b9a;
    margin-top: 15px;
}

p {
    margin: 8px 0;
}

/* BACK BUTTON */
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

<!-- ================= SECTION 1 ================= -->

<div class="row">

<div class="left">
<h2>1. Database-Level Activities</h2>

<h3>CREATE DATABASE</h3>
<p>Create a new database in MySQL server.</p>

<h3>USE DATABASE</h3>
<p>Select a database for operations.</p>

<h3>DROP DATABASE</h3>
<p>Delete entire database permanently.</p>

<h3>ALTER DATABASE</h3>
<p>Modify database settings.</p>
</div>

<div class="right">
<h2>Output 1</h2>
<pre>
CREATE DATABASE college;

USE college;

DROP DATABASE college;

ALTER DATABASE college; </pre>

</div>

</div>

<!-- ================= SECTION 2 ================= -->

<div class="row">

<div class="left">
<h2>2. Table-Level Activities</h2>

<h3>CREATE TABLE</h3>
<p>Create structure of table with columns.</p>

<h3>ALTER TABLE</h3>
<p>Modify table structure (add/remove columns).</p>

<h3>DROP TABLE</h3>
<p>Delete table permanently.</p>

<h3>TRUNCATE TABLE</h3>
<p>Remove all data but keep structure.</p>
</div>

<div class="right">
<h2>Output 2</h2>
<pre>
CREATE TABLE student (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50)
);

ALTER TABLE student ADD age INT;

DROP TABLE student;

TRUNCATE TABLE student; </pre>

</div>

</div>

<!-- ================= SECTION 3 ================= -->

<div class="row">

<div class="left">
<h2>3. CRUD Operations</h2>

<h3>CREATE (INSERT)</h3>
<p>Add new records into table.</p>

<h3>READ (SELECT)</h3>
<p>Retrieve data from database.</p>

<h3>UPDATE</h3>
<p>Modify existing records.</p>

<h3>DELETE</h3>
<p>Remove records from table.</p>
</div>

<div class="right">
<h2>Output 3</h2>
<pre>
INSERT INTO student (id, name, email)
VALUES (1, 'John', 'john@gmail.com');

SELECT * FROM student;

UPDATE student
SET name = 'John Doe'
WHERE id = 1;

DELETE FROM student WHERE id = 1; </pre>

</div>

</div>

</div>

</body>
</html>
