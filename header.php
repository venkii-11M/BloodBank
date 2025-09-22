<html>
<head>
    <style>
        .main-header {
            height: 50px;
            margin: 0 130px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
            position: relative;
            z-index: 999;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            position: relative;
        }
        nav ul li a {
            font-weight: 400;
            font-size: 16px;
            color: #292929;
            cursor: pointer;
            margin: 0%;
            padding: 26px 4px;
            text-decoration: none;
        }
        nav ul li:hover {
            color: #fff;
            background-color: #bf222b;
        }
        .dropdown {
            padding: 16px;
        }
        .submenu {
            margin-top: 0;
            display: none;
            position: absolute;
            inset-inline-start: 0;
            background-color: white;
            min-width: 200px;
            z-index: 2;
        }
        .submenu a {
            color: #292929;
            padding: 12px 16px;
            text-decoration: none;
            display: block;

        }
         nav ul li:hover .submenu {
            display: block;
            top: 100%;
            left: 0;
        }
        .submenu a:hover {
            color: #bf222b;
            scale: 1.02;
        }
    </style>
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <a href="index.html">
                <img src="image/logo.jpg" height="50px">
            </a>
        </div>
        <nav>
            <div class="main-menu">
                <div class="nav-bar">
                    <ul>
                        <li style="color: #fff;background-color: #bf222b;padding: 16px 16px;">ABOUT US
                            <div class="submenu">
                                <a href="index.php">Home</a>
                                <a href="aboutus.php">About Us</a>
                            </div>
                        </li>
                        <li class="dropdown">LOOKING FOR BLOOD
                            <div class="submenu">
                                <a href="bloodavaliblity.php">Blood Avalibility</a>
                                <a href="directory.php">Blood Bank Directory</a>
                            </div>
                        </li>
                        <li class="dropdown">WANT DONATE BLOOD
                            <div class="submenu">
                                <a href="donationcamp.php">Blood Donation Camps</a>
                                <a href="donate.php">Donor Login</a>
                                <a href="#">About Blood Donation</a>
                                <a href="Campreg.php">Register VBT Camp</a>

                            </div>
                        </li>
                        <li class="dropdown">BLOOD BANK LOGIN
                            <div class="submenu">
                                <a href="#">Login</a>
                                <a href="addbloodbank.php">Add Your Blood Bank</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>