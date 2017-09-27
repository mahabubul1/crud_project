<?php 
         $obj_student= new student();
         $student_id= $_GET['id'];
        $result= $obj_student->select_data_id($student_id);
 
        if(isset($_POST['submit'])){
             $message= $obj_student->update_data_info($_POST);
            
        }
        


?>




<section class="mainleft">
   <form action="" method="post">
       
      <table>
            <p style="color: #0099FF" > <?php if(isset( $message)) { echo $message;}?> </p>
         <tr>
            <td>Name: </td>
            <td>
                
                <input type="text" name="name"     value="<?php   echo $result['name'];  ?>"   />
                <input type="hidden" name="id"     value="<?php   echo $result['id'];  ?>"   />
            
            </td>    
         </tr>

         <tr>
            <td>Department: </td>
            <td><input type="text" name="department"  value="<?php   echo $result['department'];  ?>"  /></td>
         </tr>

         <tr>
            <td>Age: </td>
            <td><input type="text" name="age"    value="<?php  echo  $result['age'];?>" /></td>
         </tr>
         <tr>
            <td></td>
            <td>
               <input type="submit" name="submit" value="Update"/>
              
            </td>
         </tr>
      </table>
   </form>
</section>
