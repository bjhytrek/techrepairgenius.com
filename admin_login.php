<!DOCTYPE html>
<html lang="en">
    <?php $active_page
                = 3; ?>
    <?php include 'modules/header.php'; ?>


<div class="page-header">
  <h1>Admin Login <small>Please Login</small></h1>
</div>
    
    <form>
  <?php 
          if(isset($message)){
          echo '<p class="notice">'.$message.'</p>';
          } ?>
          
           <form method="post" action="." id="loginfrm">
            <fieldset>
              <label for="username">Username</label>
              <input type="text" name="username" id="username" required>
              <label for="password">Password:</label>
              <input type="password" name="password" id="password" required>
              <label>&nbsp;</label>
              <input type="submit" name="action" id="action" value="Login">
            </fieldset>
          </form>
        
  <div class="push"></div>
</div>
    
<!--Footer  -->

<?php include 'modules/footer.php'; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>







</html>