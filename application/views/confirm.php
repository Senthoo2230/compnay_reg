<body style="height:100vh; width:100vw;">
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="d-flex align-items-center justify-content-center">
            <div class="mt-5 mb-5">
                <div class="row">
                    <div>
                        <h1>
                            Company Details
                        </h1>
                    </div>
                    <table class="table">

                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">Company Name : </th>
                                <td class="text-right"><?php echo $company_data->name; ?></td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Company Email :</th>
                                <td class="text-right"><?php echo $company_data->email; ?></td>
                            </tr>

                            <tr>
                                <th class="text-left" scope="row">Company Phone :</th>
                                <td class="text-right"><?php echo $company_data->phone; ?></td>
                            </tr>

                            <tr>
                                <th class="text-left" scope="row">Company Address :</th>
                                <td class="text-right"><?php echo $address_data->line1 . "  " . $address_data->line2; ?></td>
                            </tr>
                            <?php
                            $CI =& get_instance();
                            $CI->load->model('Home_model');
                            
                            ?>
                            <tr>
                                <th class="text-left" scope="row">District :</th>
                                <td class="text-right"><?php echo $CI->Home_model->district_name($address_data->district);; ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div>
                        <h1>
                            Owners Details
                        </h1>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Origin</th>
                                <th>NIC/Passport</th>
                                <th>Title</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($owners as $owner) {
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $owner->origin; ?></td>

                                    <td><?php echo $owner->identity; ?></td>
                                    <td><?php echo $owner->title; ?></td>
                                    <td><?php echo $owner->firstname; ?></td>
                                    <td><?php echo $owner->lastname; ?></td>
                                    <td><?php echo $owner->percentage; ?>%</td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div>
                        <h1>
                            Directors Details
                        </h1>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($directors as $dir) {
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $dir->title; ?></td>
                                    <td><?php echo $dir->firstname; ?></td>
                                    <td><?php echo $dir->lastname; ?></td>

                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div>
                        <h1>
                            Secretary Details
                        </h1>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($secretary as $sec) {
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $sec->title; ?></td>
                                    <td><?php echo $sec->firstname; ?></td>
                                    <td><?php echo $sec->lastname; ?></td>

                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div>
                        <h1>
                            Shareholder Details
                        </h1>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Fullname</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>State/Region</th>
                                <th>Postal</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($shs as $sh) {
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $sh->title; ?></td>
                                    <td><?php echo $sh->fullname; ?></td>
                                    <td><?php echo $sh->address; ?></td>
                                    <td><?php echo $sh->email; ?></td>
                                    <td><?php echo $sh->city; ?></td>
                                    <td><?php echo $sh->state; ?></td>
                                    <td><?php echo $sh->postal; ?></td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div style="margin-top:20px;">
                    <!-- <a href="<?php echo base_url(); ?>home" class="theme-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i> <i class="fa fa-chevron-left" aria-hidden="true"></i> Back to Home</a> -->
                    <a href="<?php echo base_url();?>home/end" class="theme-btn">Confirm Your Information <i class="fa fa-check" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>