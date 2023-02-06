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
                    <h1>Who is your Director
                    </h1>
                </div>
                <div style="font-size: 24px;">
                    Director Details

                </div>
                <hr>

                <div>
                    <?php 
                        if ($this->session->flashdata('error')) {
                            echo $this->session->flashdata('error');
                        }
                    ?>
                </div>

                

                <div>
                    <div style="padding: 10px; background-color:white; border-radius: 8px;">
                        <div class="mb-1">
                            Same As Owner :
                        </div>
                        <select class="form-select" name="owner_id" id="owner_id">
                            <option value="">Select Owner</option>
                            <?php
                            foreach ($owners as $owner) {
                                ?>
                                    <option value="<?php echo $owner->id; ?>"><?php echo $owner->title.". ".$owner->firstname." ".$owner->lastname; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <script>
                    $("#owner_id").change(function(){
                        var owner_id = $("#owner_id").val();

                        if (owner_id == "") {
                            
                        }
                        else{
                            $.ajax({    //create an ajax request to display.php
                            type: "POST",
                            url: "<?php echo base_url(); ?>home/owner_data",
                            data:{
                                owner_id:owner_id,
                                sec : 0
                            },               
                            success: function(response){                    
                                $("#director_data").html(response); 
                                //alert(response);
                            }

                        });
                        }
                    });
                </script>

                <div style="padding: 10px; background-color:white; border-radius: 8px; font-weight:500;">
                    <form action="<?php echo base_url(); ?>home/add_director" method="post">
                        <div class="row" style="margin-top: 20px;" id="director_data">
                            <div class="col-md-3">
                                <select class="form-select" name="title" id="title">
                                    <option value="">Select Title</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mrs">Mrs</option>
                                </select>
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('title'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="fname" class="form-control" placeholder="Firstname">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('fname'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="lname" class="form-control" placeholder="Lastname">
                                <div style="margin-top: 5px; font-size:12px; color:red;">
                                    <?php echo form_error('lname'); ?>
                                </div>
                            </div>

                            <input type="text" name="check_dir" class="form-control" value="director" placeholder="Lastname" hidden>

                            <div class="col-md-3">
                                <input type="submit" class="btn btn-success w-100" value="Add Director">
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="mt-2">
                <?php
                if (form_error('check_dir')) {
                   ?>
                   <div class="alert alert-warning">
                        Director already is in!
                   </div>
                   <?php
                }
                ?>
                </div>
                
                <div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($directors as $dir) {
                            ?>
                                <tr>
                                    <td><?php echo $dir->title; ?></td>
                                    <td><?php echo $dir->firstname; ?></td>
                                    <td><?php echo $dir->lastname; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>home/delete_director/<?php echo $dir->id; ?>">
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

                <div style="margin-top:20px; float: right;">
                    <a href="<?php echo base_url(); ?>home/<?php if ($dir_count > 0) {
                                                                //$owner_err = "";
                                                                echo "secretary";
                                                            } else {
                                                                //$owner_err = "<div class='alert alert-danger'>Please Add a Owner</div>";
                                                                $this->session->set_flashdata('error', "<div class='alert alert-danger'>Please Add a Director</div>");
                                                                echo "director";
                                                            } ?>" class="theme-btn">Next <i style="margin-left: 5px;" class="fa-solid fa-angle-right"></i></a>
                </div>

        </div>
    </div>
</div>