<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Availability</title>
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
            border: 1px solid transparent;
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
    <header>
        <?php include("header.php") ?>
    </header>
    <main>
        <div class="container">
            <div class="page-header">
                <h3 style="color: #a94442;font-weight: 400;line-height: 1.4rem;font-size: 24px;">
                    <b style="font-weight: 400;">Blood Stock Availability</b>
                </h3>
            </div>
            <div class="search-panel">
                <div class="panel-heading">
                    Search Blood Stock
                </div>
                <div class="panel-body">
                    <div class="row" style="margin-right: -15px; margin-left: -15px;display: flex;">
                        <div class="col-1">
                            <select class="form-control" name="statecode" id="statecode" ">
                                <option value=" -1">Select state</option>
                                <option value="-2">All</option>
                                <option value="1">Maharashtra</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <select class="form-control" name="distlist" id="distcode">
                                <option value="-1">Select District</option>
                                <option value="-2">All</option>
                                <option value="1">Nanded</option>
                                <option value="1">Pune</option>
                                <option value="1">Mumbai</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <select class="form-control" name="bloodgrouptype" id="bdtype">
                                <option value="-1">Select Blood Group </option>
                                <option value="-2">AB -Ve</option>
                                <option value="1">AB +Ve</option>
                                <option value="1">A -Ve</option>
                                <option value="1">A +Ve</option>
                                <option value="1">B -Ve</option>
                                <option value="1">B +Ve</option>
                                <option value="1">O -Ve</option>
                                <option value="1">O +Ve</option>
                                <option value="1">All Blood Groups</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <button type="button" class="btn" id="search btn">
                        Search
                    </button>
                </div>
            </div>
        </div>
        <div class="row" style="display: block;margin: 0 130px;">
            <div class="alert">
                <div class="col"
                    style="padding:5px 300px;min-height: 1px;line-height: 50px;border-radius: 25px;background-color: #f1f1f1;margin: 0 0 20px;">
                      <b>Select State and/or District for stock availability.</b>
                </div>
            </div>
            <div class="table">
                <table class="exmaple-table">
                    <thead style="height: 60px">
                        <tr>
                            <th> S.No.</th>
                            <th>  Blood Bank</th>
                            <th> Category</th>
                            <th>  Availability</th>
                            <th>Last Updated</th>
                            <th>  Type</th>
                        </tr>
                    </thead>
                    <tbody>
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