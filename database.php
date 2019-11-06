<?php 
 
class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
    var $db = "db_book";
    
	function __construct(){
    mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
    }
    
    function tampil_data(){
		$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass,$this->db),"select * from books");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
    }

    function auto_kode(){
        $autokode = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass,$this->db),"SELECT max(right(code_book,4)) FROM books");
        $query = mysqli_fetch_array($autokode);
        $kd_new = 'BOOKS-'.str_pad(($query[0] + 1),4,'0',STR_PAD_LEFT);

        return $kd_new;
    }
    
    function input($code_book,$title_book,$author,$total_pages,$fl_name){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass,$this->db),"insert into books values('$code_book','$title_book','$author','$total_pages','images/$fl_name')");
    }
    
    function hapus($id){
        $conn = mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
		mysqli_query($conn,"delete from books where code_book='$id'");
    }
    
    function edit($id){
        $conn = mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        $data = mysqli_query($conn,"select * from books where code_book='$id'");
        while($ED = mysqli_fetch_array($data)){
            $hasil[] = $ED;
        }
        return $hasil;
    }
     
    function update($code_book,$title_book,$author,$total_pages,$fl_name){
        $conn = mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        mysqli_query($conn,"update books set  title_book ='$title_book', author = '$author' , total_pages='$total_pages' , images='images/$fl_name'  where code_book ='$code_book'");
    }
 
} 
 
?>