<?php

include('database.php');

class issue extends Connect {
    // use display;

    public function retrieve($category){
        $sql_query = "SELECT * FROM problem where category='$category' and `status`='open' limit 2";
        $check = $this->dbc->query($sql_query);
        return $check;
    }

      public function all_issues($category){
        $query = "SELECT * FROM problem where category='$category'";
        $check = $this->dbc->query($query);
        return $check;
      }



      public function info($id){
        $query = "SELECT * FROM problem where issue_id='$id'";
        $check = $this->dbc->query($query);
        return $check;
    }
  
}

$show = new issue();

$check = $show->retrieve('ELECTRICITY');

$result = $show->retrieve('WATER');
$result_parking= $show->retrieve('PARKING');
$result_security= $show->retrieve('SECURITY');
$result_clean= $show->retrieve('CLEANLINESS');

