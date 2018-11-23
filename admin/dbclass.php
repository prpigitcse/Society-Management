
<?php
include("database.php");

    class show extends Connect  {

        public function update($name, $id){
        $update= mysqli_query($this->dbc,"UPDATE problem SET labour_name='$name' WHERE issue_id='$id'");
    // if ($update) {
    //     echo "Updated successfully";
    // }
    // else
    // {
    // echo "Error: " . $sql . "" . mysqli_error($conn);
    // }

    }

    function dbRowInsert($table_name, $form_data)
    {

        // retrieve the keys of the array (column titles)
        $fields = array_keys($form_data);

        $sql = "INSERT INTO ".$table_name."(`".implode('`,`', $fields)."`)
                    VALUES('".implode("','", $form_data)."')";

  
   if (mysqli_query($this->dbc, $sql)) {
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error( $this->dbc);
    }
}

    public function getinfo_labour($con,$id){
    $info=mysqli_query($con,"select * from problem where issue_id='$id'");
        return $info;
    }


    public function labour($con,$name){
    $contact=mysqli_query($con,"select * from labour_table where labour_name='$name'");
    return $contact;
    }
    }

    $show = new show();
 
?>