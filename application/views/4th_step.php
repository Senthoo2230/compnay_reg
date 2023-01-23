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
        <div class="col-md-8">
            <div style="background-color: #F6F8FA; padding:60px 40px;;
  min-height: 100vh;">
                <div style="margin-bottom: 50px;">
                    <h1>Where is your Company?
                    </h1>
                </div>
                <hr>

                <form action="<?php echo base_url(); ?>home/fourth_step" method="post">
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
                                                                                                                        } ?>" value="<?php echo set_value('line1'); ?>">
                                <small class="form-text">
                                    <?php echo form_error('line1'); ?>
                                </small>
                            </div>

                            <div class="col-md-6 rowMarginbt">
                                <input type="text" name="line2" placeholder="Address Line 1" class="form-control" value="<?php echo set_value('line2'); ?>">
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 rowMarginbt">
                                <select name="district" class="form-control">
                                    <option value="">Select District</option>
                                    <option value="Jaffna">Jaffna</option>                                                                        
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('district'); ?>
                                </small>
                            </div>

                            <div class="col-md-4 rowMarginbt">
                                <select name="city" class="form-control">
                                    <option value="">Select City</option>
                                    <option value="Jaffna">Jaffna</option>                                                                        
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('city'); ?>
                                </small>
                            </div>

                            <div class="col-md-4 rowMarginbt">
                                <select name="postal" class="form-control">
                                    <option value="">Select Postal Code</option>
                                    <option value="Jaffna">Jaffna</option>                                                                        
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('district'); ?>
                                </small>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6 rowMarginbt">
                                <select name="ds" class="form-control">
                                    <option value="">Select DS Division</option>
                                    <option value="Jaffna">Jaffna</option>                                                                        
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('ds'); ?>
                                </small>
                            </div>

                            <div class="col-md-6 rowMarginbt">
                                <select name="gs" class="form-control">
                                    <option value="">Select GN Division</option>
                                    <option value="Jaffna">Jaffna</option>                                                                        
                                </select>
                                <small class="form-text">
                                    <?php echo form_error('gs'); ?>
                                </small>
                            </div>
                            
                        </div>



                        <div style="margin-top:20px; float: right;">
                            <button class="btn btn-warning btn-block" type="submit">
                                <div style="padding:2px 25px;">
                                    Next
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
</body>

</html>