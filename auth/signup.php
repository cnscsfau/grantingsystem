<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/sfaulogo.png">
    <link rel="icon" type="image/png" href="../images/sfaulogo.png">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            /* Remove default margin */
            padding: 0;
            /* Remove default padding */
        }

        /* Navbar styles */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            background: #5e0b15;
            z-index: 1000;
            /* padding: 8px 16px; */
            /* Adjust padding as needed */
            box-sizing: border-box;
        }

        /* Container styles */
        .container-fluid {
            display: flex;
            justify-content: center;
        }

        /* Row styles */
        .row {
            width: 100%;
            max-width: 1200px;
        }

        /* Navigation box styles */
        .navbox {
            display: flex;
            align-items: center;
        }

        /* Navigation box image styles */
        .navbox img {
            margin-right: 10px;
            max-height: 50px;
            /* Adjust max height as needed */
        }

        .navbox>h6 {
            color: azure;
        }

        /* Font weight styles */
        .font-weight-bolder {
            font-size: 18px;
            color: #333;
        }

        /* Password container styles */
        .password-container {
            position: relative;
        }

        /* Password input styles */
        .password-container>input {
            padding-right: 30px;
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            display: inline-block;
        }

        /* Eye icon styles */
        .password-container>.eye-icon {
            position: absolute;
            top: 50%;
            right: 5px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        /* Responsive styles for small screens */
        @media (min-width: 320px) {
            .signupform {
                justify-content: center;
                align-items: center;
                margin-top: 20px;
            }

            .password_container>form>input {
                margin: 2px;
                padding: 1px;
            }

            input[type=password] {
                padding: 5px 15px;
                margin: 3px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            .submitbtn {
                background: linear-gradient(180deg, rgba(148.75, 6.20, 6.20, 0.81) 81%, rgba(250.75, 5.22, 5.22, 0.69) 100%);
                color: whitesmoke;
                justify-content: center;
                align-items: center;
                border: 3px solid blue;
                font-size: 14px;
            }
        }

        /* Responsive styles for medium screens */
        @media (max-width: 767px) {
            .signupform {
                margin-top: 10px;
                margin-left: 10%;
                margin-right: 10%;
            }

            .submitbtn {
                padding: 12px 16px;
                font-size: 14px;
            }
        }

        /* Responsive styles for large screens */
        @media (min-width: 768px) {
            .signupform>form {
                margin-left: auto;
                margin-right: auto;
                max-width: 500px;
                /* Adjust the maximum width as needed */
            }

            input[type=text],
            input[type=password] {
                width: 48%;
                /* Adjust the width of the input fields */
            }

            .submitbtn {
                padding: 14px 20px;
                font-size: 16px;
            }
        }

        /* Title holder styles */
        .titleholder {
            display: flex;
            flex-direction: column;
            gap: 5px;
            align-items: center;
            justify-content: center;
        }

        /* Title holder image styles */
        .titleholder>div>img {
            margin-top: 112px;
            width: 10rem;
            height: 10rem;
        }

        /* Signup form styles */
        .signupform {
            margin-top: 2px;
            margin-left: 10%;
            margin-right: 10%;
            text-align: center;
        }

        /* General input styles */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Submit button styles */
        .submitbtn {
            background: linear-gradient(180deg, rgba(148.75, 6.20, 6.20, 0.81) 81%, rgba(250.75, 5.22, 5.22, 0.69) 100%);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Submit button hover styles */
        .submitbtn:hover {
            background: #5E0B15;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <div class="row align-items-center">
                <div class="navbox">
                    <img src="../images/sfaulogo.png" alt="main_logo">
                    <h6 class="font-weight-bolder mb-0">CAMARINES NORTE STATE COLLEGE SCHOLARSHIP AND FINANCIAL ASSISTANCE UNIT</h6>
                </div>
            </div>
        </div>
    </nav>

    <!-- Title holder -->
    <section class="titleholder">
        <div><img src="../images/CNSC_Logo.png" alt="cnsclogo"></div>
        <div>
            <h2>CAMARINES NORTE STATE COLLEGE</h2>
            <h3>Scholarship Financial and Assistance Unit (SFAU): </h3>
            <p>Scholarship Profiling Information System </p>
        </div>
    </section>

    <!-- Signup form -->
    <div class="signupform">
        <h2>Signup</h2>
        <form action="../connections/signup_process.php" method="POST">
            <input type="text" name="firstname" placeholder="Firstname" required><br>
            <input type="text" name="middlename" placeholder="Middlename"><br>
            <input type="text" name="lastname" placeholder="Lastname" required><br>
            <input type="text" name="email" placeholder="Email" required><br>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <span class="eye-icon" onclick="togglePasswordVisibility()">
                    <img src="../images/hide.png" alt="Closed Eye" style="width: 15px; height: 15px; margin-top: 5px;">
                </span>
            </div>
            <div><button class="submitbtn" type="submit">Signup</button></div>
            <a href="../index.php" class="mx-auto d-block"><u>Login?</u></a>
        </form>
    </div>

    <!-- Script for password visibility toggle -->
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var eyeIcon = document.querySelector('.eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<img src="../images/view.png" alt="Open Eye" style="width: 15px; height: 15px;margin-top: 5px;">';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<img src="../images/hide.png" alt="Closed Eye" style="width: 15px; height: 15px;margin-top: 5px;">';
            }
        }
    </script>
</body>

</html>