<html>
<head>
    <title>Let's start exercising now!</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
            padding: 5px;
            height:50%;
        }

        .hero-image {
            background-image: url("<?php echo base_url(); ?>uploads/leaves_less.jpg");
            background-color: #cccccc;
            height: 80%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
        }

        ul {
            list-style-type: none;
            margin-left: 40%;
            overflow: hidden;
        }

        li {
            float: right;
            font-size: 25px;
        }

        li a {
            display: block;
            color: green;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: green;
            color: white;
        }

        section:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            margin-top: 10px;
            background-color: #9BCD9B;
            padding: 10px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>


<header>
    <div class="hero-image">
        <div class="hero-text">
            <h3 style="font-size:30px">And let's start exercising!</h3>
        </div>
    </div>

    <ul>
        <?php if(!$this->session->userdata('username')){
            //echo "hello";
            echo"<li><a href='Sign_Up'> Sign up </a></li>
                     <li class='nav-item'>
                        <a href='Log_In'> Log in </a>
                     </li>";
        } ?>

        <?php if($this->session->userdata('username')){
            //echo "hello";
            echo"<li><a href='User_profile'> Profile </a></li>
                     <li class='nav-item'>
                        <a href='Log_In/Logout'> Log out </a>
                     </li>";
        } ?>


        <li><a href="welcome">Homepage</a></li>
    </ul>
</header>


<section id="main-part">

  