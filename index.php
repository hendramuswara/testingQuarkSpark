<?php 
include 'database.php';
$db = new database();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Book Data</title>
</head>
<body>
    <div class="btn">
      <a href="input.php">INSERT DATA</a>
    </div>

    <?php
    if($db-> tampil_data() == !null){
          foreach($db->tampil_data() as $row){
        ?>
      <div class="buku">
          <p class="judulbuku">
              <?php echo $row['title_book']; ?>
          </p>
          <img src="<?php echo $row['images'];?>" />

         <div class="ketbuku">
                <p class="fields"> Book Code </p> <p class="records">  <?php echo $row['code_book']; ?></p>
                   
                <p class="fields"> Author </p>
                    <p class="records">  <?php echo $row['author']; ?></p>
                <p class="fields"> Total Pages </p>
                    <p class="records">  <?php echo $row['total_pages']; ?></p>        
        </div>
        <br/>
          <a href="edit.php?id=<?php echo $row['code_book']; ?>&aksi=edit">Edit</a>  
          <a href="proses.php?id=<?php echo $row['code_book']; ?>&aksi=hapus" onclick="return confirm('Are you Sure Want to delete this data')">Delete</a> 
      </div>
      <?php
           }} else { ?>
           <h1>No Data </h1>
           <?php
           }
      ?>
</body>
</html>
 