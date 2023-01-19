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
                    <h1>Who is the secretary
</h1>
                </div>
                <div style="font-size: 24px;">
                Secretary Details

                </div>
                <hr>

                <div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($secretary as $sec) {
                            ?>
                                <tr>
                                    <td><?php echo $sec->title; ?></td>
                                    <td><?php echo $sec->firstname; ?></td>
                                    <td><?php echo $sec->lastname; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/delete_secretary /<?php echo $sec->id; ?>">
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
                    <form action="<?php echo base_url(); ?>home/add_secretary " method="post">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-3">
                                <select class="form-control" name="title" id="title">
                                    <option value="">Select Title</option>
                                    <option value="1">Mr</option>
                                    <option value="2">Miss</option>
                                    <option value="3">Mrs</option>
                                </select>
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('title'); ?>
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
                            
                            <div class="col-md-3">
                                <input type="submit" class="btn btn-success" value="Add Secretary ">
                            </div>
                        </div>
                    </form>
                </div>

                <div style="margin-top:10px;" class="float-right">
    <a href="<?php echo base_url(); ?>home/shareholders" class="btn btn-warning mt-2">Next</a>
</div>
            </div>
        </div>
        
    </div>
</body>

</html>