<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>

<body class="">

    <main class="form-signin w-100 m-auto">
        <form action="check.php" method="post">
            <img class="mb-4 d-block m-auto" src="assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal text-center">Sign up</h1>

            <div class="row mb-2">
                <div class="form-group col-6">
                    <input type="text" name="ho"
                    value="<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['ho'];} ?>"
                    class="form-control rounded <?php if(isset($_SESSION['errors']['ho'])){ echo 'is-invalid';} ?>" placeholder="FirstName">
                    <?php
                if(isset($_SESSION['errors']['ho'])){
                ?>
                <div class="invalid-feedback">
                    <?php echo $_SESSION['errors']['ho'];  ?>
                </div>
                <?php
                }
                ?>
                </div>
                
                <div class="form-group col-6">
                    <input type="text" name="ten"
                    value='<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['ten'];} ?>'
                    class="form-control rounded <?php if(isset($_SESSION['errors']['ten'])){ echo 'is-invalid';} ?> " placeholder="SurName">
                    <?php
                if(isset($_SESSION['errors']['ten'])){
                ?>
                <div class="invalid-feedback">
                    <?php echo $_SESSION['errors']['ten'];  ?>
                </div>
                <?php
                }
                ?>
               
                </div>
            </div>
            <div class="invalid-feedback">Nhập đê </div>
            <div class="form-group col-12 mb-2">
                <input type="text" name="sdt" 
                value="<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['sdt'];} ?>"
                class="form-control rounded <?php if(isset($_SESSION['errors']['sdt'])){ echo 'is-invalid';} ?>" placeholder="Mobile Number or Email Address">
                <?php
                if(isset($_SESSION['errors']['sdt'])){
                ?>
                <div class="invalid-feedback">
                    <?php echo $_SESSION['errors']['sdt'];  ?>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="form-group col-12 mb-2">
                <input type="password" name="password" 
                value="<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['password'];} ?>"
                class="form-control rounded <?php if(isset($_SESSION['errors']['password'])){ echo 'is-invalid';} ?>" placeholder="New Password">
                <?php
                if(isset($_SESSION['errors']['password'])){
                ?>
                <div class="invalid-feedback">
                    <?php echo $_SESSION['errors']['password'];  ?>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="col-12 mb-2">
                <label class="text-lef mb-1" for="">Date of birth</label>
                <div class="row">
                    <div class="col-4 form-group">
                        <input type="number" 
                        value="<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['ngay'];} ?>"
                        name="ngay" class="form-control <?php if(isset($_SESSION['errors']['ngay'])){ echo 'is-invalid';} ?>" placeholder="Date">
                        <?php
                if(isset($_SESSION['errors']['ngay'])){
                ?>
                <div class="invalid-feedback">
                    <?php echo $_SESSION['errors']['ngay'];  ?>
                </div>
                <?php
                }
                ?>
                    </div>
                    <div class="col-4 form-group">
                        <input type="number" 
                        value="<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['thang'];} ?>"
                        name="thang" class="form-control <?php if(isset($_SESSION['errors']['thang'])){ echo 'is-invalid';} ?>" placeholder="Month">
                        <?php
                if(isset($_SESSION['errors']['thang'])){
                ?>
                <div class="invalid-feedback">
                    <?php echo $_SESSION['errors']['thang'];  ?>
                </div>
                <?php
                }
                ?>
                    </div>
                    <div class="col-4 form-group">
                        
                        <input type="number" name="nam"
                        value="<?php if(isset($_SESSION['old'])){ echo $_SESSION['old']['nam'];} ?>"
                        class="form-control <?php if(isset($_SESSION['errors']['nam'])){ echo 'is-invalid';} ?>" placeholder="Year">
                        <?php
                if(isset($_SESSION['errors']['nam'])){
                ?>
                <div class="invalid-feedback">
                    <?php echo $_SESSION['errors']['nam'];  ?>
                </div>
                <?php
                }
                ?>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <label class="mb-1" for="">Gender</label>
                <div class="col-4 custom-control custom-radio custom-control-inline  ">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label" for="customRadioInline1">Male</label>
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                    </div>
                </div>
                <div class="col-4 custom-control custom-radio custom-control-inline">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label" for="customRadioInline2">Female</label>
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    </div>
                </div>
                <div class="col-4 custom-control custom-radio custom-control-inline">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label" for="customRadioInline3">Orther</label>
                        <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <p class="text-muted"><small>People who use our service may have uploaded your contact information to Facebook. Learn more.</small></p>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-center text-muted">&copy; 2017–2022</p>
        </form>
    </main>

</body>

</html>