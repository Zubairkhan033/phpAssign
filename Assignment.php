<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link rel="stylesheet" href="abc.css">
</head>
<body class = "back">
  <form action="Table.php" method = "post">
        <h1 id = "abc">Student registration form</h1><br>
                      <label class="form-label" for="form3Example1m">First name: </label>
                      <input type="text" class="form-control form-control-lg" name = "firstName"><br><br>
   
                      <label class="form-label" for="form3Example1n">Last name: </label>
                      <input type="text" class="form-control form-control-lg" name = "lastName"><br> <br>
                      
                      <label class="form-label" for="form3Example1m1">Mother's name: </label>
                      <input type="text" class="form-control form-control-lg" name = "motherName"><br><br>
      
                      <label class="form-label" for="form3Example1n1">Father's name: </label>
                      <input type="text" class="form-control form-control-lg" name = "fatherName"><br><br>
        
                  <label class="form-label" for="form3Example8">Address: </label>
                  <input type="text" class="form-control form-control-lg" name = "Address"><br> 

                  <h3>Gender:</h3>     
                  <label name ="Gend" class = "gender"><input type="radio" name = "gender">Male</label>  
                  <label name ="Gend" class = "gender"><input type="radio" name = "gender"> Female</label><br><br>

               
                  <div class=" d-flex" >
                        <select class="select" name = "State">
                            <option value="" disabled>State</option>
                            <option >Pakistan</option>
                            <option >Turkey</option>
                            <option >Afghanistan</option>
                        </select>

                        <select class="select" name = "City">
                            <option value="" disabled>City</option>
                            <option>Karachi</option>
                            <option>Istanbul</option>
                            <option>Kabul</option>
                        </select>
                   </div> <br>
  
                  <label class="form-label" for="form3Example99">Course: </label>
                  <input type="text" name = "course"><br><br>

                  <label class="form-label" for="form3Example97">Email ID: </label>
                  <input type="email" name = "e-mail"><br><br>

                  <button type="submit" class="btn" name ="sub">Submit form</button> 
    </form>
</body>
</html>