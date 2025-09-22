<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>v Centralized Blood Bank Management System</title>
    <link rel="icon" type="site-icon" href="image/logo.jpg">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header style="background-color: #7F0210;">
        <div class="nav">
            <a href="#Home">
                <img src="image/logo.jpg" alt="home" style="width: 86px;height: 76px;cursor: pointer ;">
            </a>
            <nav>
                <ul type="none" style="color: black;">
                    <li>Home
                        <div class="dropdown">
                            <a href="index.php">Home</a>
                            <a href="aboutus.php">About Us</a>
                        </div>
                    </li>
                    <li>LOOKING FOR BLOOD
                        <div class="dropdown">
                            <a href="bloodavaliblity.php">Blood Avalibility</a>
                            <a href="directory.php">Blood Bank Directory</a>
                        </div>
                    </li>
                    <li>WANT DONATE BLOOD
                        <div class="dropdown">
                            <a href="donationcamp.php">Blood Donation Camps</a>
                            <a href="donate.php">Donor Registration</a>
                            <a href="#">About Blood Donation</a>
                            <a href="Campreg.php">Register VBT Camp</a>

                        </div>
                    </li>
                    <li>BLOOD BANK LOGIN
                        <div class="dropdown">
                            <a href="#">Login</a>
                            <a href="addbloodbank.php">Add Your Blood Bank</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="herocomponent">
        <div class="img">
            <img src="image/main img.png" style="width: 100%;height: 366px;">
        </div>
        <div class="donorcount">
            <div class="donorreg" style="background-color: #E2B0AC;width: 50%;">
                <p style="font-size: 24px;">7474135</p>
                <p style="font-size: 16px;">Donor Register</p>
            </div>
            <div class="bunit" style="background-color: #7F0210;width: 50%;">
                <p style="font-size: 24px;">9102835</p>
                <p style="font-size: 16px;">Blood Unit Collected</p>
            </div>
        </div>
        <div class="text">
            <p>Data from 01 Jan 2022 onwards : Last update : 2025-05-16 00:04:41</p>
        </div>
    </section>
    <section class="Services">
        <div class="container">
            <h3>Our Services</h3>
            <div class="cards">
                <a href="bloodavaliblity.html" class="search">
                    <div class="box">
                        <img src="image/blood-search.png">
                        <p>Blood Avalibility Sreach</p>
                    </div>
                </a>
                <a href="directory.html" class="search">
                    <div class="box">
                        <img src="image/blood-directory.png">
                        <p>Blood Bank Direcrorty</p>
                    </div>
                </a>
                <a href="donationcamp.html" class="search">
                    <div class="box">
                        <img src="image/blood-camp.png">
                        <p>Blood Donation Camp</p>
                    </div>
                </a>
                <a href="donate.html" class="search">
                    <div class="box">
                        <img src="image/donor-login.png">
                        <p>Donor Register</p>
                    </div>
                </a>
                <a href="Campreg.html" class="search">
                    <div class="box">
                        <img src="image/register-camp.png">
                        <p>Register Volunter Blood Camp</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="learn-donation">
        <div class="container">
            <h3>Learn About Donation</h3>
            <div class="blood-type">
                <div>
                    <p style="margin: 0px 0px 4px;">Select your Blood Type</p>
                    <div class="type">
                        <a href="blood-type/a+.html" class="group" target="iframe_a"
                            style="text-decoration:none;color:black;">
                            A+
                        </a>
                        <a href="blood-type/o+.html" class="group" target="iframe_a"
                            style="text-decoration:none;color:black;">
                            O+
                        </a>
                        <a href="blood-type/b+.html" class="group" target="iframe_a"
                            style="text-decoration:none;color:black;">
                            B+
                        </a>
                        <a href="blood-type/ab+.html" class="group" target="iframe_a"
                            style="text-decoration:none;color:black;">
                            AB+
                        </a>
                        <a href="blood-type/a-.html" class="group" target="iframe_a"
                            style="text-decoration:none;color:black;">
                            A-
                        </a>
                        <a href="blood-type/o-.html" class="group" target="iframe_a"
                            style="text-decoration:none;color:black;">
                            O-
                        </a>
                        <a href="blood-type/b-.html" class="group" target="iframe_a"
                            style="text-decoration:none;color:black;">
                            B-
                        </a>
                        <a href="blood-type/ab-.html" class="group" target="iframe_a"
                            style="text-decoration:none;color:black;">
                            AB-
                        </a>
                    </div>
                    <div class="iframe">
                        <iframe src="blood-type/a+.html" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="donation-working" style="background-color:rgb(127, 2, 16,.5);">
        <div class="donation">
            <div class="container" style="width: 100%;padding: 0 0 24px;">
                <h3 style="color:black">How<span style="color: #9b030c;">Donation</span>Works ?</h3>
                <div class="process">
                    <div class="card-container" style="display: block;">
                        <div class="card">
                            <img src="image/reg-img.png" style="width: 78px;height: 78px;">
                            <div class="card-body" style="text-align: center;">
                                <p class="card-text">Registration Process</p>
                                <p class="card-text-light">Sign up and schedule your first with ease</p>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-container">
                        <img src="image/arrow-left.png">
                    </div>
                    <div class="card-container" style="display: block;">
                        <div class="card">
                            <img src="image/heart-img.png" style="width: 78px;height: 78px;">
                            <div class="card-body" style="text-align: center;">
                                <p class="card-text">Health Screening</p>
                                <p class="card-text-light">A simple check-up to ensure you’re ready to donate</p>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-container">
                        <img src="image/arrow-left.png">
                    </div>
                    <div class="card-container" style="display: block;">
                        <div class="card">
                            <img src="image/pay-img.png" style="width: 78px;height: 78px;">
                            <div class="card-body" style="text-align: center;">
                                <p class="card-text">Donation Day</p>
                                <p class="card-text-light">Relax as our professional staff guide you through</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    </div>
    </section>
    <footer>
        <?php
        include("footer.php");
        ?>
    </footer>
</body>

</html>