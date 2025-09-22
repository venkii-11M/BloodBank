<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camp Schedule</title>
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

        .search-panel {
            border-color: #ebccd1;
            margin-bottom: 20px;
            background-color: #fff;
            border: .5px solid #a94442;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05)
        }

        .panel-heading {
            background-color: #bf2229;
            color: white;

            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .panel-body {
            padding: 15px;
        }

        .row {
            padding: 15px;
            display: flex;
            justify-content: space-evenly;
        }

        .col-1 {
            width: 30%;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }


        .col-1 select:focus-visible {
            border: 1.5px solid skyblue;
            box-shadow: 2px 2px 2px skyblue;
            outline: none;
        }


        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;

        }


        .btn {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            border: none;
            line-height: 1.42857143;
            text-align: center;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #bf2229;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }


        .exmaple-table {
            min-width: 100%;
            border-collapse: collapse;
            border: 1px solid #cfcdcd;
            font-size: 0.75rem;
        }

        .exmaple-table thead tr {
            background-color: #c82333;
            color: black;
            text-align: left;
            border: 2px solid #cfcdcd;
        }

        .exmaple-table thead tr th {
            font-size: 16px;
            padding: 10px;
            width: 2.5rem;
            cursor: pointer;
            user-select: none;
            border: 2px solid #cfcdcd;
        }

        .exmaple-table tbody tr {
            /* background-color: #f1a1a6; */
            border: 2px solid #cfcdcd;
        }

        .exmaple-table tbody tr td {
            font-size: 16px;
            border: 2px solid #cfcdcd;
            padding: 0.25rem 0.5rem;
            vertical-align: top;
        }
    </style>
</head>

<body>
    <header >
       <?php 
       include("header.php")
       ?> 
    </header>
    <main>
        <div class="container">
            <div class="page-header">
                <h3 style="color: #a94442;font-weight: 400;line-height: 1.4rem;font-size: 24px;">
                    <b style="font-weight: 400;">Camp Schedule</b>
                </h3>
            </div>
            <div class="search-panel">
                <div class="panel-heading">
                    Camp Schedule
                </div>
                <div class="panel-body">
                    <?php
                    include("connect.php");

                    $states = [
                        "Maharashra" => ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim", "Yavatmal"],
                        "Goa" => ["North Goa", "South Goa"],
                        "Karnatka" => ["Bangalore", "Mysore", "Hubli"]
                    ];

                    $selected_state = isset($_GET['state']) ? $_GET['state'] : '';
                    $selected_district = isset($_GET['district']) ? $_GET['district'] : '';
                    $selected_date = isset($_GET['date']) ? $_GET['date'] : '';
                    $results = [];
                    $search_performed = false;


                    if (!empty($selected_state) && !empty($selected_district) && !empty($selected_date)) {
                        $search_performed = true;

                        $selected_state = mysqli_real_escape_string($conn, $selected_state);
                        $selected_district = mysqli_real_escape_string($conn, $selected_district);
                        $selected_date = mysqli_real_escape_string($conn, $selected_date);


                        $sql = "SELECT * FROM `campregistration` WHERE `State` = ? AND `district` = ? AND `campdate` = ?";
                        $stmt = mysqli_prepare($conn, $sql);

                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, "sss", $selected_state, $selected_district, $selected_date);
                            mysqli_stmt_execute($stmt);
                            $query = mysqli_stmt_get_result($stmt);

                            if ($query) {
                                while ($row = mysqli_fetch_assoc($query)) {
                                    $results[] = $row;
                                }
                            }
                            mysqli_stmt_close($stmt);
                        }
                    }
                    ?>
                    <form method="get" action="">
                        <div class="row" style="margin-right: -15px; margin-left: -15px;display: flex;">
                            <div class="col-1">
                                <select class="form-control" name="state" id="state" required
                                    onchange="this.form.submit()">
                                    <option value="">Select state</option>
                                    <?php foreach ($states as $state => $districts): ?>
                                        <option value="<?php echo htmlspecialchars($state); ?>" <?php if ($selected_state == $state)
                                               echo 'selected'; ?>>
                                            <?php echo htmlspecialchars($state); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-1">
                                <select class="form-control" name="district" id="district">
                                    <option value="">Select District</option>
                                    <?php
                                    if (!empty($selected_state) && isset($states[$selected_state])) {
                                        foreach ($states[$selected_state] as $district) {
                                            echo '<option value="' . htmlspecialchars($district) . '"';
                                            if ($selected_district == $district)
                                                echo ' selected';
                                            echo '>' . htmlspecialchars($district) . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-1">
                                <input type="date" name="date" class="form-control" id="Bddate"
                                    style="height: 20px;width: 200px;"
                                    value="<?php echo htmlspecialchars($selected_date); ?>">
                            </div>


                            <div class="col-2">
                                <button type="submit" class="btn" id="search btn">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
        <div class="row" style="display: block;margin: 0 130px;">

            <div class="table">
                <table class="exmaple-table">
                    <thead style="height: 60px">
                        <tr>
                            <th>S.No.</th>
                            <th> Date</th>
                            <th> Camp Name</th>
                            <th> Address</th>
                            <th>state</th>
                            <th>District</th>
                            <th> Contact</th>
                            <th>Conducted By</th>
                            <th> Register</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($search_performed && empty($results)): ?>
                            <tr>
                                <td colspan="10">
                                    <center>
                                        <p>No results found</p>
                                    </center>
                                </td>
                            </tr>
                        <?php elseif (empty($selected_state) || empty($selected_district) || empty($selected_date)): ?>
                        <?php else: ?>
                            <?php $sno = 1; ?>
                            <?php foreach ($results as $row): ?>
                                <tr>
                                    <td><?php echo $sno++; ?></td>
                                    <td><?php echo htmlspecialchars($row['campdate']); ?></td>
                                    <td><?php echo htmlspecialchars($row['campname']); ?></td>
                                    <td><?php echo htmlspecialchars($row['campaddres']); ?></td>
                                    <td><?php echo htmlspecialchars($row['state']); ?></td>
                                    <td><?php echo htmlspecialchars($row['district']); ?></td>
                                    <td><?php echo htmlspecialchars($row['orgphone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['orgname']); ?></td>
                                    <td><?php echo '<a href="donate.php" style="text-decoration:none;color:#a94442;"><b>Register</b></a>' ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($row['starttime']) . ' to ' . htmlspecialchars($row['endtime']); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <?php
        include("footer.php");
        ?>
    </footer>


</body>

</html>