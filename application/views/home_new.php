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

    .bg-theme{
        background-color: #2f3ecd;
    }

    body {
        background-color: #F6F8FA;
    }
</style>
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-3">
            <div class="fullheight bg-theme d-flex align-items-center justify-content-center mx-auto" style="padding:0px 60px;">
                <div style="font-size:35px; font-weight: 900; color:white;">
                    <div style="margin-bottom:48px;">
                        A Few clicks away from Creating your company
                    </div>
                    <div style="font-size:21px">
                        <p>Start your company in minutes. Save time and money.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <form method="post" id="gform_2" action="<?php echo base_url(); ?>home/getStart">
            <div class="fullheight bgwhite  d-flex align-items-center justify-content-center mx-auto" style="padding:0px 80px; color: #434b65;">
                <div>
                    <div style="font-size:40px; font-weight: 900; margin-bottom: 25px;">
                        Start Your Business now
                    </div>
                    <div style="margin-bottom: 72px; font-size:20px;">
                        Creating your company in US is just a few steps away, Enter your email address to continue.
                    </div>
                    <div>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="mb-3">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    <div style="margin-top: 5px;" class="text-danger">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="mb-3">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="mobile" aria-describedby="emailHelp" placeholder="077 123 4567">
                                    <div style="margin-top: 5px;" class="text-danger">
                                        <?php echo form_error('mobile'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:40px; float: right;">
                            <button class="theme-btn" type="submit">
                                Get Started <i style="margin-left: 5px;" class="fa-solid fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
            </form>
        </div>
    </div>
</div>