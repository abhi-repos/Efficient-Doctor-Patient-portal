<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register Form</title> 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
     
  <style type="text/css">
  #op_background{ /* For IE8 and earlier */
    
    background-image:url('{{ asset('images/12.jpg') }}');
    opacity: 0.9;
    background-size: 100%;
    
}
</style>

</head>
<body id="op_background">
    <div id="login">  
     <a href="{{ url('/login') }}">Already have an Account</a>    
           <h2>Register</h2>
   <form action="/patient_register_entry" name='form-login' method="post" enctype="multipart/form-data">
               {{ csrf_field() }} 
                 <span class="fontawesome-user"></span>
                            <input type="text" name="username" id="user" placeholder="Username">
       
                <span class="fontawesome-lock"></span>
                            <input type="password" name="password" id"pass" placeholder="Password">
        
                <span class="fa fa-phone"></span>
                               <input type="text" name="contact_number" id="contact_number"
                                 placeholder="Contact_number">

                <span class="fa fa-envelope-o fa-fw"></span>
                             <input type="text" name="email" id="user" placeholder="Email"> 
                   
                <span class="fa fa-home"></span>
                             <input type="text" name="address" id="user" placeholder="Address">
                        
                
        </br>
        </br>
        <input type="submit" value="Login">

</form>
  
  
</body>
</html>
