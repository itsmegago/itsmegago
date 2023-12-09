<?php
   function Created(){
    if(!empty($_GET['items'])){
        $insert = new insert(($_GET['items']));
        if($insert->inserttask()){
           echo '<div class=" col-md-9 alert alert-success alert-dismissible fade show" role="alert">
           <strong>Task Added!</strong> 
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
     }else{
          echo '<div class=" col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Task Invalid</strong> Check your inputs!.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
     }
  }
 }

?>