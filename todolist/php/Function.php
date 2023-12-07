 <?php
 
 function insertt(){
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
function deleted(){
   if(!empty($_GET['delete'])){
       $delete = new delete(($_GET['delete']));
       if($delete->deletetask()){
          echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Task Deleted!</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
   }else{
         echo '<div class=" col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
         <strong>Task Invalid</strong> Delete Error!.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
    }
 }
}
function editt(){
   if(!empty($_GET['complete'])){
       $edit = new edit(($_GET['complete']));
       if($edit->completetask()){
          echo '<div class=" col-md-9 alert alert-success alert-dismissible fade show" role="alert">
          <strong>CONGRATS!</strong> your task is completed! 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

    }else{
         echo '<div class=" col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
         <strong>ERROR!</strong> Check your inputs!.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
    }
 }
}
function viewtable(){
   $tignan = new view();
   $tignan->viewdata();
   $tignan->viewcompletedata();

}
function tools(){
   insertt();
   deleted();
   editt();
}
?>