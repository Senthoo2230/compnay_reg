<style>
    .container-fluid {
        overflow: hidden;
    }

    .fullheight {s
        height: auto;
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
                <div style="padding:25px;" class="navActive">
                    2. Company Details
                </div>
                <div style="padding:25px;">
                    3. Owners
                </div>
                <div style="padding:25px;">
                    4. Shareholder Details
                </div>
            </div>
            </div>
        </div>

                    <?php
                        //Data is available
                        if($detail_is == 1){
                            $action = "update";
                        }
                        //Data is not there
                        if($detail_is == 0){
                            $action = "insert";
                        }
                    ?>

        <div class="col-md-8">
        <div style="padding:60px 40px;">
                <div style="margin-bottom: 50px;">
                    <h1>Company Details
                    </h1>
                </div>
                <hr>

                <form action="<?php echo base_url(); ?>home/third_step/<?php echo $action; ?>" method="post">
                    <div style="font-family: 'Quicksand', sans-serif;">

                        <style>
                            .rowMarginbt {
                                margin-bottom: 25px;
                            }
                        </style>
                        <div class="row">

                            <?php
                                // Input Values
                                if($detail_is == 1){
                                    $name_val = $detail_data->name;
                                    $email_val = $detail_data->email;
                                    $phone_val = $detail_data->phone;
                                    $des_val = $detail_data->description;
                                }
                                if($detail_is == 0){
                                    $name_val = set_value('email');
                                    $email_val = set_value('email');
                                    $phone_val = set_value('phone');
                                    $des_val = set_value('description');
                                }

                            ?>
                        
                            <div class="col-md-12 mb-4">
                                <input type="text" name="company_name" placeholder="Company Name" class="form-control <?php if (form_error('company_name')) {echo "form-error";} ?>" value="<?php echo $name_val; ?>">
                                <small class="form-text">
                                    <?php echo form_error('company_name'); ?>
                                </small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input type="email" placeholder="Email" class="form-control <?php if (form_error('email')) {
                                                                                                echo "form-error";
                                                                                            } ?>" name="email" value="<?php echo $email_val; ?>">
                                <small class="form-text">
                                    <?php echo form_error('email'); ?>
                                </small>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" placeholder="Phone Number" class="form-control <?php if (form_error('phone')) {
                                                                                                        echo "form-error";
                                                                                                    } ?>" name="phone" value="<?php echo $phone_val; ?>">
                                <small class="form-text">
                                    <?php echo form_error('phone'); ?>
                                </small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <textarea name="description" cols="30" rows="6" class="form-control"  placeholder="Business activity company will intake (Optional)" ><?php echo $des_val; ?></textarea>
                                <small class="form-text">
                                    <?php echo form_error('description'); ?>
                                </small>
                            </div>
                        </div>



                        <div style="margin-top:20px; float: right;">
                            <button class="theme-btn" type="submit">
                                Next <i style="margin-left: 5px;" class="fa-solid fa-angle-right"></i>
                            </button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>