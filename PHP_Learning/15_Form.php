<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h3 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 10vh;
            /* This is optional and ensures it's centered vertically on the whole viewport height */
            margin: 0;
            /* Optional to remove default margin */
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        echo "<br> This is POST method.<br>";
        echo "<br>Hello, $name !<br> Your registered email is $email <br> and the password is $password ";

    }
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Data was sent using the GET method
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        echo "<br> This is GET method.<br>";
        echo ",br>Hello, $name !<br> Your registered email is $email <br> and the password is $password ";
    }
    ?>
    <div class="form">
        <h3>Fill out the form.</h3>
        <form action="\PHP_Works\PHP_Learning\15_Form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="Password" id="password" name="pass" required>

            <button type="submit">Submit</button>
            <button type="reset">Cancel</button>
        </form>
    </div>
</body>

</html>