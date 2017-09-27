<?php include "inc/header.php"; ?>
  <?php 
         spl_autoload_register( function($class){
                 include 'classes/'. $class.  '.php';
              });
  ?>
 
<script type="text/javascript"> 
    function check_delete(){
        var check= confirm(" Are you sure to delete this");
        if(check){
            return true;
        }else{
            return false;
        }
    }
    
</script>


 <?php 
    if(isset($pages)){
       if($pages=="edit"){
         include './pages/edit_content.php';
       }
    }else{
       include './pages/home_content.php';
    }
 ?>
<?php include "inc/right.php"; ?>
<?php include "inc/footer.php"; ?>
