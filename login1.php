<html> 
  <head>
      <title>login</title>
      <link rel="stylesheet" href="css/all.css" />
      <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/login1.css" />
  </head>
    <body>
    
        
        <section class="top">
            <div class="container d-flex justify-content-center text-center py-4">
             <div><a href="index1.html"><h2>TheGiftery</h2></a></div>
            </div>
        </section>
        
        <section class="myform py-2">
           <div class="container d-flex justify-content-center">
            <form method="post" >
               <div class="position-relative"> <input id="userName"  class="form-control myinpt" type="text" name="Username" required placeholder="Username" />
                 <i class=" myicone2 fa fa-user-alt"></i></div> 
                <div class="position-relative">  
                <input id="input" class="form-control myinpt" type="password" name="UserPassword" required placeholder="password" />
                    <i  class=" myicone fa fa-eye "></i>
               <i id="myicone1"  class="icone  myicone  fa fa-eye-slash"></i>
                
                
            </div>
               <div class="py-3"> 
                   <input type="checkbox" class="checkbox"  />
                   <span class="check-info">Remember me</span></div>
               <div class="text-center py-3"> <button id="myBtn" class="mybtn btn btn-primary form
                   " type="submit"> Get Start</button></div>
                
                <div class="text-center py-3">
                    <a class="forgot-a" href="register1.php">
                  <span class="frogot">Forgot Password ?<span class="create">Create Account </span></span></a>
                
                </div>
              </form>
            </div>
        </section>
        
        <section class="mb-5 px-5">
            <span class="Copyright">Copyright © 2017 UIGRID | All Rights Reserved | 
                <span class="Copyright-link"><a href="index1.html">www.thegiftery.com</a> </span>
            </span>
        </section>
        
    
    
    
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/login.js"></script>
     </body>
</html>