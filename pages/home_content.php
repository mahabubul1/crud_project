<?php 
     if(isset($_POST['submit'])){
         $obj_student= new student();
          $message=$obj_student->insertData($_POST);
     }

?>

<section class="mainleft">
    <form action="" method="post">
        <table>
            <p style="color: #0099FF" > <?php if(isset( $message)) { echo $message;}?> </p>
            
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name"  placeholder=" user name" required="1"/></td>    
            </tr>

            <tr>
                <td>Department: </td>
                <td><input type="text" name="department" placeholder=" Department name" required="1"/></td>
            </tr>

            <tr>
                <td>Age: </td>
                <td><input type="text" name="age"  placeholder="age" required="1"/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit"/>
                    <input type="reset" value="Clear"/>
                </td>
            </tr>
        </table>
    </form>
    
   
</section>
