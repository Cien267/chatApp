<?php
   session_start();
   if(isset($_SESSION['unique_id'])){ //if user logged in
       header("location: users.php");
   } 
?>

<?php
   include_once "header.php"; 
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>REAL TIME CHAT APP</header>
            <form action="#">
                <div class="error-txt"></div>
                
                <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="email"> 
                </div>
                <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="password"> 
                        <i class="fas fa-eye"></i>
                </div>
                
                <div class="field button">
                        <input type="submit" value="Continue to chat">
                </div>
                
            </form>
            <div class="link">
                not yet signed  up? 
                <a href="index.php">signup now</a>
            </div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>