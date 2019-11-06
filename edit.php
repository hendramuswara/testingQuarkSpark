<?php 
include 'database.php';
$db = new database();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Update Data</title>
</head>
<body>
<div class="btn">
      <a href="index.php">back to book data</a>
    </div>
<div class="content">
<form action="proses.php?aksi=update"  method="post" enctype="multipart/form-data">
<?php
foreach($db->edit($_GET['id']) as $ED){
?>
<table border="0" cellspacing="0" cellpadding="10" align="center" width="100%">
    <tr>
        <td colspan="3" ><B>UBAH</B></td>
          <input type="hidden" name="action" id="action" value="update" />
          <input type="hidden" id="old_code_book" name="old_code_book" value="<?php echo $ED['code_book'] ; ?>" />
    </tr>

    
 		<tr>
        <td>Kode buku</td>
        <td>:</td>
        <td> <input type="text" id="code_book" name="code_book" value="<?php echo $ED['code_book'] ; ?>" readonly="readonly"/></td>
    </tr>
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">title_book</td>
      <td>:</td>
      <td><input type="text" name="title_book" id="title_book"  value="<?php echo $ED['title_book'] ; ?>"/></td>
    </tr>
    
    <tr valign="baseline">
        <td nowrap="nowrap" align="right">author</td>
        <td>:</td>
        <td><input type="text" name="author" id="author" value="<?php echo $ED['author'] ; ?>"  /></td>
    </tr>
    
    <tr valign="baseline">
        <td nowrap="nowrap" align="right">total_pages</td>
        <td>:</td>
        <td><input type="text" name="total_pages" id="total_pages" value="<?php echo $ED['total_pages'] ; ?>"  /></td>
    </tr>
		
    <tr valign="baseline">
        <td nowrap="nowrap" align="right">images</td>
        <td>:</td>
        <td><input type="file" name="images" id="images"   required="required"/></td>
    </tr>
    
    <tr valign="baseline">
        <td colspan="3"><div align="center"><input type="submit" value="Ubah Data" /></div></td>
    </tr>
    </table>
<?php } ?>
</form>
                 
       

</div>
</body>
</html>

