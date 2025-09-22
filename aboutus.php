<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: sans-serif;
            background: #ffffff;
        }
        .container {
            margin: 0 130px;
        }
         .page-header {
            padding-bottom: 0 0 0 9px;
            margin: 50px 0 20px;
            border-bottom: 1px solid #eee;
        }
        .jambo {
            margin-bottom: 40px;
            padding: 48px 60px;
            border-radius: 5px;
            background-color: #eee;
        }
        .row p {
            margin: 0 0 10px;
            line-height: 2em;
            text-align: justify;


        }
        .row ul li {
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <?php include("header.php") ?>
    </header>
    <main class="container">
        <div class="page-header">
            <h3 style="color: #a94442;font-weight: 400;line-height: 1.4rem;font-size: 24px;">
                <b style="font-weight: 700;">About Us</b>
            </h3>
        </div>
        <div class="jambo">
            <h2 style="line-height: 1.4rem;font-weight: 400;font-size: 30px;">A Centralized Blood Bank
                Management System</h2>
        </div>
        <div class="row">
            <h4>This Website was Inaugurated on 17th May 2025 by MGM's Collage Of Enginering HOD, Sh. Hashmi S A</h4>
            <p>
                Thes website enforces Drug &amp; Cosmetic Act, National blood policy standards and guidelines ensuring
                proper collection &amp; donation, effective management and monitoring the quality and quantity of the
                donated blood. Considering the national roll out, this website has been developed with modular and
                scalable approach with configurable rule based architecture allowing customization to easily incorporate
                specific requirements from nationwide stakeholders.
            </p>
            <h4>this website has six major components for management of the blood donation life cycle:</h4>
            <ul>
                <li>The bio metric Donor Management System for identifying, tracking and blocking donors based on
                    donor's health, donation history etc.</li>
                <li>It provides features such as blood grouping, TTI screening, antibody screening, component
                    preparation etc. as per the defined processes and rules.</li>
                <li>A centralized Blood Inventory Management System for keeping track of the blood stock across numerous
                    blood banks.</li>
                <li>Bio-Medical Waste Management System for disposal of discarded blood and other waste generated during
                    this process.</li>
                <li>Generation of rare blood group donor registries and the generation of regular repeat donors</li>
                <li>Alert and Notification System</li>
            </ul>
        </div>
    </main>
    <footer>
        <?php include("footer.php");  ?>
    </footer>
</body>
</html>