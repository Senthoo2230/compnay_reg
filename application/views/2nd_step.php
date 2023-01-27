<style>
    .container-fluid {
        overflow: hidden;
    }

    .fullheight {
        display: flex;
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
        </div>

        <div class="col-md-8">
            <div class="fullheight d-flex align-items-center justify-content-center">
                <div style="padding:20px 20px;">
                    <div style="margin-bottom: 25px;">
                        <h1>Let us know about the company</h1>
                    </div>
                    <hr>
                    <style>
                        input[type="radio"] {
                            display: none;
                        }

                        .image-radio {
                            width: 100px;
                            height: 100px;
                            text-align: center;
                        }
                        .image-radio2 {
                            width: 100px;
                            height: 100px;
                            text-align: center;
                        }


                        .img-box {
                            padding: 20px;
                            border-radius: 15px;
                            border: 2px solid;
                            /* The width and style of the border */
                            border-color: red;
                        }

                        .radio-toolbar input[type="radio"] {
                            display: none;
                        }

                        .radio-toolbar label {
                            display: inline-block;
                            padding: 20px 30px;
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

                        .test-box {
                            height: auto;
                            width: auto;
                            margin: 10px;
                            padding: 5px;

                        }
                    </style>
                    <form action="<?php echo base_url(); ?>home/second_step" method="post">
                        <div>


                            <div class="row radio-toolbar d-flex justify-content-center">
                                <div class="test-box text-center">
                                    <input type="radio" id="radio1" name="company_type" value="Private Limited" checked>
                                    <label for="radio1">
                                        <img src="<?php echo base_url(); ?>assets/img/hand-shake.png" class="image-radio">

                                        <div class="text-center" style="margin-top: 10px; font-size:10px; font-weight:700">
                                            Private Limited
                                        </div>
                                    </label>
                                </div>
                                <div class="test-box text-center">
                                    <input type="radio" id="radio2" name="company_type" value="Gurantee Company">
                                    <label for="radio2">
                                        <img src="<?php echo base_url(); ?>assets/img/gc.png" class="image-radio2">
                                        <div class="text-center" style="margin-top: 10px; font-size:10px; font-weight:700">
                                            Gurantee Company
                                        </div>
                                    </label>
                                </div>
                                <!-- <div class="col col-6 mt-2">
                                    <div class="d-flex justify-content-center">
                                        <input type="radio" id="radio1" name="company_type" value="Private Limited" checked>
                                        <label for="radio1">
                                            <img src="<?php echo base_url(); ?>assets/img/hand-shake.png" class="image-radio">

                                            <div class="text-center" style="margin-top: 10px; font-size:12px">
                                                Private Limited
                                            </div>
                                        </label>
                                    </div>

                                </div>
                                <div class="col col-6 mt-2">
                                    <div class="d-flex justify-content-center">
                                        <input type="radio" id="radio2" name="company_type" value="Private Limited">
                                        <label for="radio2">
                                            <img src="<?php echo base_url(); ?>assets/img/hand-shake.png" class="image-radio">

                                            <div class="text-center" style="margin-top: 10px; font-size:12px">
                                                Private Limited
                                            </div>
                                        </label>
                                    </div>

                                </div> -->
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
</div>