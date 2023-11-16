<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dental Insurance Creator</title>
    <link rel="stylesheet" href="Dental.css">
</head>

<body>
    <header>
        <h1>The Dental Insurance Creator</h1>
    </header>

    <nav>
        <a href="Dental.html">Home</a>
        <a href="#">Dental Insurance Creator</a>
        <a>Dental Insurance Package Search</a>
        <!--<a href="#">Employee Dental Insurance log</a>
        <a href="#">Employee Dental Search</a>-->
    </nav>

    <section>
        <h2>Create your Dental package below:</h2>
        <form method="post" action="d.php">
            <label for="Benefit">Dental Package Name:</label>
            <input type="text" id="Benefit" name="Benefit" placeholder="Dental Package name" required>

            <label for="Whats covered">Coverage:</label>
            <input type="text" id="Coverage" name="Coverage" placeholder="Coverage" required>

            <label for="Company Contribution">Company Contribution:</label>
            <input type="text" id="Company" name="Company" placeholder="Company Contribution" required>

            <button type="submit">Submit</button>
        </form>
        
    </section>

    <footer>
        <p>Have Questions? Email us at</p>
    </footer>
</body>

</html>
