<?php 
         $obj_student= new student();
           $pages=0;
          if(isset($_GET['pages'])){
               if($_GET['pages']==1){
                     $pages=0;
               }else{
                   $pages=$_GET['pages']*5-5;
                   
               }
          }
         $staement=$obj_student->selectData_pagination($pages);
         
          if(isset($_GET['status'])){
              $id= $_GET['id'];
              if($_GET['status'] == 'delete' ){
                $message= $obj_student->delete_data($id);
                  
              }
             
         }
         
         
?>

<section class="mainright">
   <table class="tblone">
      <tr>
         <th>No</th>
         <th>Name</th>
         <th>Department</th>
         <th>Age</th>
         <th>Action</th>
      </tr>
  
   <?php foreach ($staement as  $value) {?>   
           <tr>
               <td><?php echo  $value['id']?></td>
               <td><?php echo  $value['name']?></td>
               <td><?php echo  $value['department']?></td>
               <td><?php echo  $value['age']?></td>
               <td>
                  <a href="edit.php?id=<?php   echo  $value['id']  ?>">Edit</a> ||
                  <a href="? status=delete&&id=<?php   echo  $value['id']  ?>" onClick="  return check_delete()  ">Delete   </a>
               </td>
            </tr>

   <?php }?>  
      
   </table>
    <?php 
        $staement=$obj_student->selectData();
         $total_row= $staement->rowCount($staement);
          $total_page= ceil($total_row/5);
           for($i=1; $i <= $total_page; $i++){
              ?> <a href="index.php?pages= <?php  echo $i; ?>  "> <?php    echo $i; ?>     </a> <?php
           }
    ?>
   
</section>
