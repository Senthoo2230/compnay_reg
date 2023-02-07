<style>
    .container-fluid {
        overflow: hidden;
    }

    .fullheight {
        s height: auto;
        min-height: 100%;
        height: 100vh;
    }

    .bgwhite {
        background-color: #fff;
    }

    body {
        background-color: #F6F8FA;
    }
</style>
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-4">
            <div class="fullheight bgwhite d-flex align-items-center justify-content-center mx-auto">
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
                    </div>
                    <div style="padding:25px;">
                        4. Shareholder Details
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div style="padding:60px 40px;">
            <div style="margin-bottom: 50px;">
                    <h1>Details about your Owners</h1>
                </div>
                <div style="font-size: 24px;">
                    Owners Details
                </div>
                <hr>

                <div>
                    <?php 
                        if ($this->session->flashdata('error')) {
                            echo $this->session->flashdata('error');
                        }
                    ?>
                </div>
                

                <div style="padding: 10px; border:1px solid; border-color:#e8e8e8; border-radius: 8px;">
                    <form action="<?php echo base_url(); ?>home/add_owner" method="post">



                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-4">
                                <div>
                                    <select class="form-select" name="origin" id="origin" onchange="checkOrigin()">
                                        <option value="">Select Your Owner from</option>
                                        <option value="Srilankan">Srilankan</option>
                                        <option value="Forginer">Forginer</option>
                                        <option value="Company">Company</option>
                                    </select>
                                    <div style="margin-top: 5px; font-size:12px; color:red;">
                                        <?php echo form_error('origin'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input id="identity" type="text" name="identity" value="<?php echo set_value('identity'); ?>" class="form-control" placeholder="NIC / Passport / Reg No">

                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('identity'); ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" name="title" id="title">
                                    <option value="">Select Title</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mrs">Mrs</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="fname" class="form-control" placeholder="Firstname" value="<?php echo set_value('fname'); ?>">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('fname'); ?>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="lname" class="form-control" placeholder="Lastname" value="<?php echo set_value('lname'); ?>">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('lname'); ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="percentage" class="form-control" placeholder="%" value="<?php echo set_value('percentage'); ?>">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('percentage'); ?>
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <input type="submit" class="btn btn-primary" value="Add Owner">
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="table-responsive-sm" style="margin-bottom: 10px;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Origin</th>
                                <th>NIC/Passport</th>
                                <th>Title</th>
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
                                    <td><?php echo $owner->title; ?></td>
                                    <td><?php echo $owner->firstname; ?></td>
                                    <td><?php echo $owner->lastname; ?></td>
                                    <td><?php echo $owner->percentage; ?>%</td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/delete_owner/<?php echo $owner->id; ?>">
                                            <div class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></div>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div style="margin-top:20px; float: right;">
                    <a href="<?php echo base_url(); ?>home/<?php if ($owner_count > 0) {
                                                                //$owner_err = "";
                                                                echo "director";
                                                            } else {
                                                                //$owner_err = "<div class='alert alert-danger'>Please Add a Owner</div>";
                                                                $this->session->set_flashdata('error', "<div class='alert alert-danger'>Please Add a Owner</div>");
                                                                echo "owner";
                                                            } ?>" class="theme-btn">Next <i style="margin-left: 5px;" class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>