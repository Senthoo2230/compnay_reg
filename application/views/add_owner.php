<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

    </style>
    <title>4th</title>
</head>

<body>
    <div class="row">
        <div class="col-md-4">
            <div style="font-size: 25px; color:#cfd5de; padding: 50px 50px;">
                <div style="padding:25px;">
                    1. Company Type
                    <span class="text-success">
                    <i class="fa-solid fa-check"></i>
                    </span>
                </div>
                <div style="padding:25px;">
                    2. Company Details
                    <span class="text-success">
                    <i class="fa-solid fa-check"></i>
                    </span>
                </div>
                <div style="padding:25px; color:blue;">
                    3. Owners
                </div>
                <div style="padding:25px;">
                    4. Shareholder Details
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div style="background-color: #F6F8FA; padding:60px 40px;;
  min-height: 100vh;">
                <div style="margin-bottom: 50px;">
                    <h1>Details about your Owners</h1>
                </div>
                <div style="font-size: 24px;">
                    Owners Details
                </div>
                <hr>

                <div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Origin</th>
                                <th>NIC/Passport</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Percentage</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($owners as $owner) {
                            ?>
                                <tr>
                                    <td><?php echo $owner->origin; ?></td>

                                    <td><?php echo $owner->identity; ?></td>
                                    <td><?php echo $owner->firstname; ?></td>
                                    <td><?php echo $owner->lastname; ?></td>
                                    <td><?php echo $owner->percentage; ?>%</td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/delete_owner/<?php echo $owner->id; ?>">
                                            <div class="btn btn-danger btn-sm">Delete</div>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div style="padding: 10px; background-color:white; border-radius: 8px;">
                    <form action="<?php echo base_url(); ?>home/add_owner" method="post">
                        <div style="width: 250px;">
                            <select class="form-control" name="origin" id="origin" onchange="checkOrigin()">
                                <option value="">Select Your Owner from</option>
                                <option value="1">Srilankan</option>
                                <option value="2">Forginer</option>
                                <option value="3">Company</option>
                            </select>
                        </div>

                        <script>
                            function checkOrigin() {
                                var origin = $("#origin").val();
                                if (origin == "") {
                                    $("#identity").attr("placeholder", "Enter your identity").placeholder();
                                }
                                if (origin == 1) {
                                    $("#identity").attr("placeholder", "Enter your NIC").placeholder();
                                }
                                if (origin == 2) {
                                    $("#identity").attr("placeholder", "Enter your Passport No").placeholder();
                                }
                                if (origin == 3) {
                                    $("#identity").attr("placeholder", "Enter your Reg No").placeholder();
                                }

                            }
                        </script>

                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-3">
                                <input id="identity" type="text" name="identity" class="form-control" placeholder="Enter your identity">

                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('identity'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="fname" class="form-control" placeholder="Firstname">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('fname'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="lname" class="form-control" placeholder="Lastname">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('lname'); ?>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="percentage" class="form-control" placeholder="%">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('percentage'); ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" class="btn btn-success" value="Add Owner">

                            </div>
                        </div>
                    </form>
                </div>

                <div style="margin-top:10px;" class="float-right">
    <a href="<?php echo base_url(); ?>home/director" class="btn btn-warning">Next</a>
</div>
            </div>
        </div>
        
    </div>
</body>

</html>