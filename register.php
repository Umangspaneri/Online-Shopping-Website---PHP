<!-- User Register or Signup Page -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
 <body> 
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
            <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
            <form action="insert.php" method="POST">  
                
            <div class="mb-3">
            <label for="">Username</label>
            <input type="text" name="name" placeholder="Enter Username" class="form-control">
            </div>
            <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
            </div>
            <div class="mb-3">
            <label for="">Mobile Number</label>
                <input type="number" name="number"  placeholder="Enter Mobile Number" class="form-control">
                </div>
                <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="passowrd" placeholder="Enter Password" class="form-control">
                </div>
                <div class="mb-3" >
                <button name="submit" class="w-100  bg-warning fs-4 text-white" >REGISTER</button>
                </div>
                <div>
                <button class="w-100  bg-danger fs-4 text-white" >Already Have an Account ?</button>
                </div><br>


            </form> 
             
        </div>
    </div> 
</div>
</body>  
</html>
