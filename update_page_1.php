<?php include ('header.php'); ?>
<?php include ('dbcon.php'); ?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

    $query = "select * from 'students' where 'id'='$id'"; 
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed: " . mysqli_error()); 
    } 
    else {
        $row = mysqli_fetch_row($result);
        
    
}
?>

<form>
<div class = "form-group">
                <label for ="f_name">First Name</label>
                <input type = "text" name="f_name" class="form-control">
            </div>
            <div class = "form-group">
                <label for ="f_name">Last Name</label>
                <input type = "text" name="l_name" class="form-control">
            </div>
            <div class = "form-group">
                <label for ="f_name">Age</label>
                <input type = "text" name="age" class="form-control">
            </div>
            </form>


<?php include('footer.php'); ?>