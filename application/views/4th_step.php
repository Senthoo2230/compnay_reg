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

        <div class="col-md-8">
            <div style="padding:60px 40px;">
                <div style="margin-bottom: 50px;">
                    <h1>Where is your Company?
                    </h1>
                </div>
                <hr>

                <?php
                    $CI =& get_instance();
                    $CI->load->model('Home_model');
                    
                    // Input Values
                    if($address_is == 1){
                        $action = "update";
                        $line1_val = $address_data->line1;
                        $line2_val = $address_data->line2;

                        $city_id = $address_data->city;
                        $city_name = $CI->Home_model->city_name($city_id);
                        $city_val = "<option value='$city_id' selected>$city_name</option>";

                        $ds_id = $address_data->ds;
                        $ds_name = $CI->Home_model->ds_name($ds_id);
                        $ds_val = "<option value='$ds_id' selected>$ds_name</option>";

                        $gn_id = $address_data->gs;
                        $gn_name = $CI->Home_model->gn_name($gn_id);
                        $gn_val = "<option value='$gn_id' selected>$gn_name</option>";


                        // $des_val = $detail_data->description;
                    }
                    if($address_is == 0){
                        $action = "insert";
                        $line1_val = set_value('line1');
                        $line2_val = set_value('line2');
                        $city_val = "";
                    }

                ?>

                <form action="<?php echo base_url(); ?>home/fourth_step/<?php echo $action; ?>" method="post">
                    <div id="address-form">

                        <style>
                            .rowMarginbt {
                                margin-bottom: 25px;
                            }
                        </style>
                        <div class="row">
                            <div class="col-md-6 rowMarginbt">
                                <input type="text" name="line1" placeholder="Address Line 1" class="form-control <?php if (form_error('line1')) {
                                                                                                                        echo "form-error";
                                                                                                                    } ?>" value="<?php echo $line1_val; ?>">
                                <small class="form-text">
                                    <?php echo form_error('line1'); ?>
                                </small>
                            </div>

                            <div class="col-md-6 rowMarginbt">
                                <input type="text" name="line2" placeholder="Address Line 2" class="form-control" value="<?php echo $line2_val; ?>">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 rowMarginbt">
                                <select name="district" class="form-select" id="district">
                                    <option value="">Select District</option>
                                    <?php
                                    foreach ($districts as $dis) {
                                        if($address_is == 1){
                                            if($address_data->district == $dis->district_id){
                                                $attr = "selected";
                                            }
                                            else{
                                                $attr = "";
                                            }
                                        }
                                        else{
                                            $attr = "";
                                        }
                                    ?>
                                    <option <?php echo $attr; ?> value="<?php echo $dis->district_id ?>"><?php echo $dis->district ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('district'); ?>
                                </small>
                            </div>
                            <script>
                                $("#district").change(function() {
                                    var dis_id = $("#district").val();
                                    $.ajax({ //create an ajax request to display.php
                                        type: "POST",
                                        url: "<?php echo base_url(); ?>home/get_cities",
                                        data: {
                                            dis_id: dis_id
                                        },
                                        success: function(response) {
                                            $("#city").html(response);
                                            $("#ds").html("<option val=''>Select DS Division</option>");
                                            $("#gn").html("<option val=''>Select GN Division</option>");
                                            //alert(response);
                                        }

                                    });
                                });
                            </script>

                            <div class="col-md-4 rowMarginbt">
                                <select name="city" class="form-select" id="city">
                                    <option value="">Select City</option>
                                    <?php
                                    echo $city_val;
                                    ?>
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('city'); ?>
                                </small>
                            </div>

                            <script>
                                $("#city").change(function() {
                                    var city_id = $("#city").val();
                                    $.ajax({ //create an ajax request to display.php
                                        type: "POST",
                                        url: "<?php echo base_url(); ?>home/get_ds",
                                        data: {
                                            city_id: city_id
                                        },
                                        success: function(response) {
                                            $("#ds").html(response);
                                            //alert(response);
                                        }

                                    });
                                });
                            </script>

                            <div class="col-md-4 rowMarginbt">
                                <select name="postal" class="form-select">
                                    <option value="">Select Postal Code</option>
                                    <?php
                                    foreach ($postals as $postal) {
                                        if($address_is == 1){
                                            if($address_data->postal == $postal->postal_id){
                                                $attr_p = "selected";
                                            }
                                            else{
                                                $attr_p = "";
                                            }
                                        }
                                        else{
                                            $attr_p = "";
                                        }
                                    ?>
                                    <option <?php echo $attr_p; ?> value="<?php echo $postal->postal_id; ?>"><?php echo $postal->code; ?></option>
                                    <?php
                                    }
                                    ?>
                                    
                                    
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('district'); ?>
                                </small>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 rowMarginbt">
                                <select name="ds" class="form-select" id="ds">
                                    <option value="">Select DS Division</option>
                                    <?php
                                    echo $ds_val;
                                    ?>
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('ds'); ?>
                                </small>
                            </div>

                            <script>
                                $("#ds").change(function() {
                                    var ds_id = $("#ds").val();
                                    $.ajax({ //create an ajax request to display.php
                                        type: "POST",
                                        url: "<?php echo base_url(); ?>home/get_gn",
                                        data: {
                                            ds_id: ds_id
                                        },
                                        success: function(response) {
                                            $("#gn").html(response);
                                            //alert(response);
                                        }

                                    });
                                });
                            </script>

                            <div class="col-md-6 rowMarginbt">
                                <select name="gs" class="form-select" id="gn">
                                    <option value="">Select GN Division</option>
                                    <?php
                                    echo $gn_val;
                                    ?>
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('gs'); ?>
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