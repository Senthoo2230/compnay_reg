<body>
    <div class="row">
        <div class="col-md-4">
            <div style="font-size: 25px; color:#cfd5de; padding: 50px 50px; font-weight:700;">
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
                <div style="padding:25px;" class="navActive">
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
                    <?php if ($sec_count > 0) {
                        $sec_err = "";
                        //echo "director";
                    } else {
                        $sec_err = "<div class='alert alert-danger'>Please Add a Secretary</div>";
                        //echo "owner";
                    }
                    echo $sec_err;
                    ?>
                </div>

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
                                        <a href="<?php echo base_url(); ?>home/delete_secretary/<?php echo $sec->id; ?>">
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

                <div style="padding: 10px; background-color:white; border-radius: 8px; font-weight:500;">
                    <form action="<?php echo base_url(); ?>home/add_secretary " method="post">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-3">
                                <select class="form-control" name="title" id="title">
                                    <option value="">Select Title</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mrs">Mrs</option>
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

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                    <a style="width:100%; font-weight:700; margin-top:30px;" href="<?php echo base_url(); ?>home/<?php if ($sec_count > 0) {

echo "shareholders";
} else {

echo "secretary";
} ?>" class="btn btn-warning mt-2">Next</a>
                    </div>
                </div>

                <div style="margin-top:25px; float: right;">
                    
                </div>
            </div>
        </div>

    </div>
</body>

</html>