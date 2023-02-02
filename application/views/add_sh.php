<body>
    <div class="row">
    <div class="col-md-4 d-flex align-items-center justify-content-center" style="background-color:#fff;">
            <div class="sen-nav-items">
                <div style="padding:25px;">
                    1. Company Type
                    <span style="color:#03C988;">
                        <i class="fa-solid fa-check"></i>
                    </span>
                </div>
                <div style="padding:25px;">
                    2. Company Details
                    <span style="color:#03C988;">
                        <i class="fa-solid fa-check"></i>
                    </span>
                </div>
                <div style="padding:25px;" class="navActive">
                    3. Owners
                    <span style="color:#03C988;">
                        <i class="fa-solid fa-check"></i>
                    </span>
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
                    <h1>Who is your Shareholders
                    </h1>
                </div>
                <div style="font-size: 24px;">
                    Shareholder details
                </div>
                <hr>

                <div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Address</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>State/Region</th>
                                <th>Postal</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($shs as $sh) {
                            ?>
                                <tr>
                                    <td><?php echo $sh->address; ?></td>
                                    <td><?php echo $sh->email; ?></td>
                                    <td><?php echo $sh->city; ?></td>
                                    <td><?php echo $sh->state; ?></td>
                                    <td><?php echo $sh->postal; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/delete_sh/<?php echo $sh->id; ?>">
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
                    <form action="<?php echo base_url(); ?>home/add_sh" method="post">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-3">
                                <input type="text" name="address" class="form-control" placeholder="Address">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('address'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="city" class="form-control" placeholder="City">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('city'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="state" class="form-control" placeholder="State/Region">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('state'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="postal" class="form-control" placeholder="Postal">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('postal'); ?>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <input type="submit" class="btn btn-success" value="Add Shareholder" style="width:100%">
                            </div>
                        </div>
                    </form>
                </div>

                <div style="margin-top:20px; float: right;">
                <a href="<?php echo base_url(); ?>home/end" class="theme-btn">Submit</a>
                        </div>

           
            </div>
        </div>

    </div>
</body>

</html>