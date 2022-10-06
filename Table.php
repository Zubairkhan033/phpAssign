
    <?php
    
      if(isset($_POST["sub"])){
        $FirstName = $_POST["firstName"];
        $LastName = $_POST["lastName"];
        $Mother = $_POST["motherName"];
        $Father = $_POST["fatherName"];
        $Adress = $_POST["Address"];
        $State = $_POST["State"];
        $City = $_POST["City"];
        // $gender = $_POST["Gend"];
        $Course = $_POST["course"];
        $Email = $_POST["e-mail"];
     

      if($FirstName == "" || $LastName == ""){
        echo "<script> alert('Login Failed!') </script>";
        echo "<script> alert('Please Fill your First & Last Name' ) </script>";
        }
        else{
            echo "<script> alert('Login successfuly') </script>";
            } 
      }

    ?>

    <table border = 2>
        <tr>
            <th>First Name</th>
            <td><?=@$FirstName ?></td>
        </tr>

        <tr>
            <th>LastName</th>
            <td><?=@$LastName ?></td>
        </tr>

        <tr>
            <th>MotherName</th>
            <td><?=@$Mother ?></td>
        </tr>

        <tr>
            <th>Father Name</th>
            <td><?=@$Father ?></td>
        </tr>

        <tr>
            <th>Address</th>
            <td><?=@$Adress ?></td>
        </tr>

        <tr>
            <th>State</th>
            <td><?=@$State?></td>
        </tr>

        <tr>
            <th>City</th>
            <td><?=@$City?></td>
        </tr>

        <tr>
            <th>Gender</th>
            <td><?=@$Gender?></td>
        </tr>

        <tr>
            <th>Course</th>
            <td><?=@$Course?></td>
        </tr>

        <tr>
            <th>E-mail</th>
            <td><?=@$Email?></td>
        </tr>


    </table>
