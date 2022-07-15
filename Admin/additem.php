<?php
if(isset($_POST['add_items'])){

  // echo  $_POST['pcompany'];  echo  $_POST['pcat']; die();
    $folder='images/';
    $folder = $folder.basename($_FILES['pimage']['name']);
  move_uploaded_file($_FILES['pimage']['tmp_name'],$folder);
    $img =$_FILES['pimage']['name'];
    //echo $img; die();
  
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pcat= $_POST['pcat'];
    $brand= $_POST['pbrand'];
    $query="insert into  products(pname,pprice,photo,pcat,pbrand) values('$pname' , '$pprice', '$img' , '$pcat','$brand')";
    mysqli_query($conn, $query);
    header('location:managefabrics.php');
}
	


?>
<!DOCTYPE html>
<html>
<head>
	<title>You Think We Wrap</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
	  <style>
	  </style>
</head>
<body>
<nav class="container-fluid py-3 nav-back">
            <div class="row">
                <div class="col-md-8">
                    <h4>ADMIN PANNEL &nbsp YOU THINK WE WRAP</h4>
                </div>
                <div class="col-md-4">
                    <a href="logout.php" class="btn btn-danger float-right">Logout</a>
                </div>
            </div>
                                 
       </nav>
	 <div class="container-fluid">
       <div class="row">
            <div class="col-md-2 cust-bg px-0">
                <?php include 'nav.php' ?>
            </div>
            <div class="col-md-8 mx-4 mt-4" style="background: #fff;">
                <form method="POST" enctype="multipart/form-data">

         <table class="table">
            <tr>
              <td colspan="2" class="text-color"> <center><h5><b> ADD GIFT</b></h5></center></td>
            </tr>
            <tr>
              <td style="text-align:right"><b>Gift Name</b></td>
              <td><input type="text" class="form-control" name="pname" placeholder="Enter Product Name" required></td>
            </tr>
            <tr>
              <td style="text-align:right"><b>Gift Price</b></td>
              <td><input type="text" class="form-control" name="pprice" placeholder="Enter Product Price"></td>
            </tr>
            <tr>
              <td style="text-align:right"><b>Gift Image</b></td>
              <td><input type="file" name="pimage" class="form-control-file"></td>
            </tr>
            
            <tr>
              <td style="text-align:right"><b>Fabric Category</b></td>
              <td><select name="pcat"  class="form-control">
                    <option value="">----SELECT CATEGORY----</option>
                    <?php while($row=mysqli_fetch_array($cat_records)) { ?>
                    <option value="<?php echo $row['catname']?>"><?php echo $row['catname']?></option>
                      <?php  }?>
                  </select>
            </td>
            </tr>
            <tr>
              <td></td>
              <td colspan=""><input type="submit" name="add_items" class="btn w-100 cust-btn btn-primary" value="ADD GIFT ITEM"/></td>
            </tr>
         </table>
          </form>
            </div>
        </div>
	  	 
	</div>
    <?php include 'footer.php'; ?>
</body>
</html>
