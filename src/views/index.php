<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stash Sign In - RAK Wireless</title>
    <link href='//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='/assets/css/stash.css' rel='stylesheet' type='text/css'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3498db">
    

</head>
<body>

<div class="outer">
<div class="middle">
<div class="center">

    <form method="post">
    <div class="box">
    
    <?php if ($_SESSION['auth_status'] === 'AUTH_FAILED'): ?>
    <p style="background-color: #18374c;margin-top: 0px;padding: 10px;">Authentication Failed</p>
    <?php elseif ($_SESSION['auth_status'] === 'AUTH_REQUIRED'): ?>
    <p style="background-color: #18374c;margin-top: 0px;padding: 10px;">Authentication Required</p>
    <?php elseif ($_SESSION['auth_status'] === 'AUTH_END'): ?>
    <p style="background-color: #18374c;margin-top: 0px;padding: 10px;">Session Terminated</p>
    <?php elseif ($_SESSION['auth_status'] === 'INTRUSION_BLOCKED'): ?>
    <p style="background-color: #18374c;margin-top: 0px;padding: 10px;">System Intrusion Blocked</p>
    <?php endif; ?>

    <h1>Sign In</h1>

    <input type="email" name="email" placeholder="Email Address" required="true" class="txt-input poppins"<?=(!empty($_SESSION['auth_email'])?' value="'.htmlspecialchars($_SESSION['auth_email']).'"':' autofocus="true"')?>>
    
    <input type="password" name="password" placeholder="Password" required="true" class="txt-input poppins"<?=(!empty($_SESSION['auth_email'])?' autofocus="true"':'')?>>
    
    <div class="btn-group">
        <button class="btn poppins m-8right" type="submit">Sign In</button>
        <a class="td-none m-8left" href="/signup/"><div class="btn2 poppins">Sign Up</div></a>
    </div>
    </div>
    
    </form>

    <p class="margin-bottom-zero">Forgot your password? <a href="/reset/" style="color:#f1c40f;">Reset here</a></p>

</div>
</div>
</div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/stash.js" type="text/javascript"></script>
</body>
</html>

<?php
if ($_SESSION['auth_status'] !== 'ACTIVE'):
    session_unset();
endif;
?>