<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- font -->
    <style>
        body {
            height: 100%;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            font-weight: 700;
            color: #0A1B65;
        }

        small {
            color: red !important;
            font-size: 12px !important;
        }



        .navActive {
            color: #2f3ecd;
        }

        .form-error {
            border: 1px solid red;
        }

        #address-form select {
            font-weight: 400;
        }

        .theme-btn {
            background-color: #fadf59;
            border: none;
            border-radius: 5px;
            color: black;
            padding: 12px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
        }

        .theme-btn:hover {
            background-color: #fce572;
        }

        .hcenter {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            margin: auto !important;
        }

        .vcenter {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .sen-nav-items {
            font-size: 25px;
            color: #cfd5de;
            font-weight: 700;
        }

        .input-mb{
                margin-bottom: 0px;
            }
        
        @media only screen and (max-width: 600px) {
            .input-mb{
                margin-bottom: 25px;
            }
        }
    </style>
    <title><?php echo $title; ?></title>
</head>