<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body style="text-align: center; display:flex; justify-content:center;">
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form action="formhandler.php" method="post">
                <label for="firstName">FirstName:</label>
                <input type="text" id="firstName" name="firstName" placeholder="Example:John" required>
                <br><br>
                <label for="lastName">LastName:</label>
                <input type="text" id="lastName" name="lastName" placeholder="Example:Doe" required>
                <br><br>
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" placeholder="Enter Strong Password" required>
                <br><br>
                <label for="country">Select your country</label>
                <select name="country" id="country">
                    <option value="Kenya">Kenya</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Tanzania">Tanzania</option>
                </select>
                <br><br><br>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
