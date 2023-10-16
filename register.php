<!DOCTYPE html>
<html lang ="en">
  <head>
    <meta charset = 'UTF-8'>
    <title> Sign Up</title>
    <link rel= "stylesheet" href="register.css">
  </head>
 <body>
   <div class = "container">
     <div class="row">
         <div class="col-md-12">
           <h2>Register</h2>
           <p> Please fill this form to create your account.</p>
           <form action = " " method="post">
             <div class = "form group">
               <label>Full name</label>
               <input type = "text" name="name" class = "form-control" required>
             </div>
              <div class = "form group">
               <label>Email address</label>
               <input type = "email" name="email" class = "form-control" required>
              </div>
              <div class = "form group">
               <label>Password</label>
               <input type = "password" name="password" class = "form-control" required>
              </div>
              <div class = "form group">
               <label>Confirm password</label>
               <input type = "password" name="confirm_password" class = "form-control" required>
              </div>
              <div class = "form group">
               <input type = "submit" name="submit" class = "btn btn-primary" value = "submit">
              </div>
             <p> ALready Have an Account? <a href = "login.php">Login Here</a>.</p>
           </form>
         </div>
     </div>
   </div>         
 </body> 
</html>
