<body>
<div class="row">
<div class="col-md-4 d-flex align-items-center justify-content-center" style="background-color:#fff;">
            <div class="sen-nav-items">
                <div style="padding:25px;" class="navActive">
                    1. Company Type
                </div>
                <div style="padding:25px;">
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
        <div class="col-md-8 d-flex align-items-center justify-content-center">
            <div style="background-color: #F6F8FA; padding:60px 40px;;
  min-height: 100vh;">
                <div style="margin-bottom: 50px;">
                    <h1>Let us know who all the owners of the company</h1>
                </div>
                <hr>
                <style>
                    input[type="radio"] {
                        display: none;
                    }

                    .image-radio {
                        width: 150px;
                        height: 150px;
                        text-align: center;
                    }


                    .img-box {
                        padding: 50px;
                        border-radius: 25px;
                        border: 2px solid;
                        /* The width and style of the border */
                        border-color: red;
                    }

                    .radio-toolbar input[type="radio"] {
                        display: none;
                    }

                    .radio-toolbar label {
                        display: inline-block;
                        padding: 20px;
                        border-radius: 25px;
                        border: 2px solid;
                        /* The width and style of the border */
                        border-color: #0081C9;
                    }

                    .radio-toolbar input[type="radio"]:checked+label {
                        background-color: #fff;
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
                        /* border-color: #86E5FF; */
                    }
                </style>
                <form action="<?php echo base_url(); ?>home/second_step" method="post">
                    <div>


                        <div class="row radio-toolbar ">
                            <div class="col-md-3"></div>
                            <div class="col-md-3 d-flex align-items-center justify-content-center mt-1">
                                <input type="radio" id="radio1" name="company_type" value="Private Limited" checked>
                                <label for="radio1">
                                    <img src="<?php echo base_url(); ?>assets/img/hand-shake.png" class="image-radio">

                                    <div class="text-center" style="margin-top: 10px;">
                                        Private Limited
                                    </div>
                                </label>
                            </div>

                            <div class="col-md-3 d-flex align-items-center justify-content-center mt-1">
                                <input type="radio" id="radio2" name="company_type" value="Gurantee Company">
                                <label for="radio2">
                                    <img src="<?php echo base_url(); ?>assets/img/gc.png" class="image-radio">
                                    <div class="text-center" style="margin-top: 10px;">
                                        Gurantee Company
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3"></div>
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

   
</body>

</html>