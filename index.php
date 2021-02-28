<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R</title>
</head>

<body>
    <!DOCTYPE html>
    <html>
    <style>
        .outter {
            margin: 0 auto;
            width: 30%;
            border: 2px solid green;
            padding: 10px;
            display: inline-block;
            position: absolute;
        }

        .outter2 {
            margin: 0 auto;
            width: 50%;
            border: 2px solid red;
            padding: 10px;
            display: inline-block;
            position: absolute;
        }

        input[type=text],
        input[type=number],
        input[type=email],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>

    <body>
        <div class="outter">
            <h3>SIMPLE Registration Page</h3>
            <?php
            if (isset($_POST['register'])) {
                $ful_name = $_POST['full_name'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                echo 'Name : ' . $ful_name .'<br>';
                echo 'Gender : ' . $gender . '<br>';
                echo 'Email : ' . $email . '<br>';
                echo 'Phone : ' . $phone;


            }

            ?>

            <div>
                <form action="" method="POST">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>

                    <label for="phone">Phone number</label>
                    <input type="number" id="phone" name="phone" placeholder="Enter your Phone number" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>


                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                    </select>

                    <input type="submit" name="register" value="Register">
                </form>
            </div>
        </div>
    </body>

    </html>
