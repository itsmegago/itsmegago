<?php

class view extends config {
     
    public function viewdata() {
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll();

        echo "<h3 class='mb-4 mt-2'>PENDING TASK!</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
                 <tr>
                      <th>Task Item</th>
                      <th>Actions</th>
                     
                      
                 </tr>
               </thead><tbody>";

        foreach ($result as $data) {
            echo "<tr>";
            echo "<td>{$data['item']}</td>";
            echo "<td>
                   <a class = 'btn btn-outline-info btn-sm' href = 'index.php?complete={$data['id']}'>Completed!</a>
                   <a class = 'btn btn-outline-warning btn-sm'  href = 'index.php?delete={$data['id']}'>DELETE!</a>
                 </td>";
            echo "</tr>";
        }

        echo "</tbody></table>";
    }
    
    public function viewcompletedata() {
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll();
          
        echo "<h3 class='mb-4 mt-2'>COMPLETED TASK!</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
                 <tr>
                      <th>Task Item</th>
                      <th>Date Completed</th> 
                 </tr>
               </thead>
        <tbody>";
        foreach ($result as $data) {
            echo "<tr>";
            echo "<td>{$data['item']}</td>";
            echo "<td>{$data['date_completed']}
            <a class = 'btn btn-outline-warning btn-sm'  href = 'index.php?delete={$data['id']}'>DELETE!</a>
            </td>";            
        }    
        echo "</tbody></table>";
        
    }
}     
