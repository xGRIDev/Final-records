
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/sign-in-up.css">
    <link href="<?= base_url(); ?>assets/img/xing.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Final Records || Sign In - Page</title>
</head>
<body>
    
<div class="header">
<!--Content before waves-->
<div class="inner-header flex">

<div class="wrapper fadeInDown">

    
<h1 class="animate__animated animate__fadeInLeftBig" style="font-family: 'Mukta', sans-serif;"><?php echo $title; ?></h1>

<div id="formContent">
    <!-- Tabs Titles 
    <h2 class="active"> Sign In </h2> --> 
    <!--<h2 class="active"><a href="sign-up.php">Sign Up </h2></a> -->

    <!-- Icon 
    <div class="fadeIn first">
      <img src="/assets/img/down-arrow.gif" id="icon" alt="User Icon" />
    </div> -->

    <!-- Login Form -->
    <form method="post" action="<?= base_url('auth/post_login');?>" class="mt-5">
      <input type="text" class="fadeIn second" name="username" placeholder="Username" required>
      <input type="password" class="fadeIn third" name="password" placeholder="Password" required>
      <!--<input type="submit" class="fadeIn fourth" value="Log In">-->
      <button type="submit" class="btn btn-primary mt-4 mb-4" name="login">Sign-In</button>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?= base_url('auth/register'); ?>">I need Account</a>
    </div>
  </div>
</div>
</div>

<!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->
<div class="content flex">
<p><?= $title; ?></p>
</div>
<!--Content ends-->
</body>
</html>