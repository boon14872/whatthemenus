<?php 

    include_once('functions.php');

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $deletedata = new DB_con();
        $file = $deletedata->fetchonerecord($id);
        $row = mysqli_fetch_array($file);
        unlink($row['image']);
        $sql = $deletedata->delete($id);

        if ($sql) {
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

?>