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
    <title>Insert Data</title>
</head>
<body>

<div class="content">

<div class="btn">
      <a href="index.php">back to Book Data</a>
    </div>
   <form action="proses.php?aksi=tambah"  method="post" enctype="multipart/form-data">
   <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%"  >
    <tr>
        <td colspan="3" ><div align="center"><B>TAMBAH DATA</B></div></td>
    </tr>
    <tr> 	
 		<tr valign="baseline" >
        <td width="29%" align="right" nowrap="nowrap">Book Code</td>
        <td width="2%">:</td>
        <td width="69%"><input type="text" id="code_book" name="code_book" required="required" value="<?php echo $db->auto_kode() ?>" readonly="readonly" /></td>
    </tr>
    
    <tr valign="baseline">
        <td nowrap="nowrap" align="right">Book Title</td>
        <td>:</td>
        <td><input type="text" name="title_book"id="title_book" value="" required="required" /></td>
    </tr>
    <tr valign="baseline">
        <td nowrap="nowrap" align="right">Author</td>
        <td>:</td>
        <td><input type="text" name="author"id="author" value=""  required="required"/></td>
    </tr>
    <tr valign="baseline">
        <td nowrap="nowrap" align="right">Total Pages</td>
        <td>:</td>
        <td><input type="text" name="total_pages"id="total_pages" value=""  required="required"/></td>
    </tr>
    <tr valign="baseline">
        <td nowrap="nowrap" align="right">Images</td>
        <td>:</td>
        <td><input type="file" name="images" id="images"  required="required" /></td>
    </tr>
    <tr valign="baseline">
        <td colspan="3"><div align="center"><input type="submit" value="Insert Data" name="insert" onclick="return confirm('Are you Sure Want to insert this data')" /></div></td>
    </tr>
</div>
</table>
</body>
</html>

<!-- <h1>CRUD OOP PHP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<h3>Tambah Data User</h3>
 
<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form> -->