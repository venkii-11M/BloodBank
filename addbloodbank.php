<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Register</title>
    <style>
        .conatiner {
            display: block;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        .card {
            width: 70%;
            margin: 30px auto;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }
         .card-header {
            height: 47px;
            text-align: center;
            background-color: #BF222B;
            color: white;

        }
        .row {
            width: 100%;
            margin-right: -15px;
            margin-left: -15px;
            display: flex;

        }
         .col2 {
            margin-top: 10px;
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
         label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700;
        }
        .form-control {
            display: block;
            width: 90%;
            height: 2rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }
         .col {
            position: relative;
            padding-right: 15px;
            padding-left: 15px;
            margin-bottom: 50px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 16px;
            width: 100%;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
        }
         input[type="number"] {
            width: 3.5rem;
            height: 2.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.25rem;
            text-align: center;
            font-size: 16px;
            font-weight: 400;
            color: black;
            outline-offset: 2px;
            outline-color: transparent;
            outline-style: solid;
            outline-width: 2px;
            transition: outline-color 0.2s ease-in-out;
        }
         input[type="number"]:focus {
            outline-color: #3b82f6;

        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $state = $_POST['state'];
        $district = $_POST['district'];
        $city = $_POST['city'];
        $bankname = $_POST['bankname'];
        $Category = $_POST['Category'];
        $contact = $_POST['contact'];
        $person = $_POST['person'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];

        $sql = 'INSERT INTO `addbloodbank` (`BloodBankName`, `Category`, `ContactNo`, `ContactPerson`,`bankemail`, `FirstRegistrationDate`, `Address`, `PinCode`, `State`, `District`, `city`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssssssssss", $bankname, $Category, $contact, $person,$email, $date, $address, $pincode, $state, $district, $city);
        $exec = mysqli_stmt_execute($stmt);

    }
    ?>
    <form method="post" action="addbloodbank.php">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="tr" style="padding: 7.5px 12.5px;">
                        <b style="font-weight: 700;font-size: 20px;">Blood Bank Details</b>
                    </div>
                </div>
                <div class="card-body" style="background-color: #FAFAFA;padding: 1.25rem;">
                    <div class="row">
                        <div class="col1"></div>
                        <div class="col2">
                            <label for="state">State:</label>
                            <font style="color: red;">*</font>
                            <select name="state" class="form-control" required>
                                <option selected value="0">Select </option>
                                <option value="Maharashra">Maharashra</option>
                                <option value="Goa">Goa</option>
                            </select>
                        </div>
                        <div class="col2">
                            <label for="district">District:</label>
                            <font style="color: red;">*</font>
                            <select name="district" class="form-control" required>
                                <option selected value="0">Select </option>
                                <option value="Aurangabad"> Aurangabad</option>
                                <option value="Latur">Latur</option>
                                <option value="Nanded">Nanded</option>
                                <option value="Pune">Pune</option>
                            </select>
                         </div>
                        <div class="col2">
                            <label for="city">city:</label>
                            <font style="color: red;">*</font>
                            <div style="display: block;">
                                <input type="text" class="form-control" name="city" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1"></div>
                        <div class="col2">
                            <label for="bankname">Blood Bank Name:</label>
                            <font style="color: red;">*</font>
                            <div style="display: block;">
                                <input type="text" class="form-control" name="bankname" required>
                            </div>
                        </div>
                        <div class="col2">
                            <label for="Category">Category:</label>
                            <font style="color: red;">*</font>
                            <select name="Category" class="form-control" required>
                                <option selected value="0">Select type</option>
                                <option value="Gov.">Gov.</option>
                                <option value="Private">Private</option>
                                <option value="Charitable">Charitable</option>
                            </select>
                         </div>
                        <div class="col2">
                            <label for="contact">Contact No.:</label>
                            <font style="color: red;">*</font>
                            <div style="display: block;">
                                <input type="tel" class="form-control" name="contact" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1"></div>
                        <div class="col2">
                            <label for="person">Contact Person:</label>
                            <font style="color: red;">*</font>
                            <div style="display: block;">
                                <input type="text" class="form-control" name="person" required>
                            </div>
                        </div>
                        <div class="col2">
                            <label for="email">Email:</label>
                            <font style="color: red;">*</font>
                            <div style="display: block;">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                         <div class="col2">
                            <label for="date">First Registration Date:</label>
                            <font style="color: red;">*</font>
                            <div style="display: block;">
                                <input type="date" class="form-control" name="date" required>
                            </div>
                        </div>
                     </div>
                    <div class="row">
                        <div class="col1"></div>
                        <div class="col2">
                            <label for="address">Address:</label>
                            <font style="color: red;">*</font>
                            <div style="display: block;">
                                <textarea class="form-control" name="address" required></textarea>
                            </div>
                        </div>
                        <div class="col2">
                            <label for="pincode">Pin Code:</label>
                            <font style="color: red;">*</font>
                            <div style="display: block;">
                                <input type="number" class="form-control" name="pincode" required pattern="[0-9]{6}">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn" name="submit"
                            style="background-color: #5cb85c;">submit</button>
                        <button type="reset" class="btn" name="reset" style="background-color: #d9534f;">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    <div class="container">
        <?php
        if (isset($_POST['submit'])) {
            echo "<h2 style='text-align: center;'>Registration Successfull</h2>";
        }
        ?>
     </div>

</body>

</html>