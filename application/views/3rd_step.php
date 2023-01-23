
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
                    <h1>Company Details
</h1>
                </div>
                <hr>
               
                <form action="<?php echo base_url(); ?>home/third_step" method="post">
                    <div style="font-family: 'Quicksand', sans-serif;">

                    <style>
                        .rowMarginbt{
                            margin-bottom: 25px;
                        }
                    </style>
<div class="row rowMarginbt">
    <div class="col-md-12">
        <input type="text" name="company_name" placeholder="Company Name" class="form-control <?php if (form_error('company_name')) {echo "form-error";} ?>" value="<?php echo set_value('company_name'); ?>">
        <small class="form-text">
            <?php echo form_error('company_name'); ?>
        </small>
    </div>
</div>

<div class="row rowMarginbt">
    <div class="col-md-6 rowMarginbt">
        <input type="email" placeholder="Email" class="form-control <?php if (form_error('email')) {echo "form-error";} ?>" name="email" value="<?php echo set_value('email'); ?>">
        <small class="form-text">
            <?php echo form_error('email'); ?>
        </small>
    </div>
    <div class="col-md-6">
        <input type="text" placeholder="Phone Number" class="form-control <?php if (form_error('phone')) {echo "form-error";} ?>" name="phone" value="<?php echo set_value('phone'); ?>">
        <small class="form-text">
            <?php echo form_error('phone'); ?>
        </small>
    </div>
</div>

<div class="row rowMarginbt">
<div class="col-md-12">
        <textarea name="description" cols="30" rows="8" class="form-control <?php if (form_error('description')) {echo "form-error";} ?>" placeholder="Business activity company will intake" value="<?php echo set_value('description'); ?>"></textarea>
        <small class="form-text">
            <?php echo form_error('description'); ?>
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