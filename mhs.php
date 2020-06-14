<html>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 15px;
  
}
</style>
<body><table style="width:50%">

	<tr>
    <td>NIM</td>
    <td><?php echo $_POST["NIM"]; ?></td> 
     </tr>
  <tr>
    <td>NAMA</td>
    <td><?php echo $_POST["NAMA"]; ?></td>
    </tr>
  <tr>
    <td>JENIS KELAMIN</td>
    <td><?php echo $_POST["KELAMIN"]; ?></td>
    </tr>
  <tr>
    <td>ALAMAT</td>
    <td><?php echo $_POST["ALAMAT"]; ?></td>
    </tr>
  <tr>
    <td>PROGRAM STUDI</td>
    <td><?php echo $_POST["PRODI"]; ?></td>
     </tr>
	 <tr>
    <td>BAHASA PEMROGRAMAN YANG DIKUASAI        </td>
    <td><?php if (isset($_POST['PILIH'])); {

        $PILIH=$_POST['PILIH'];
		echo "";
        for ($i=0; $i < count($PILIH) ; $i++){
            echo $PILIH[$i]."<br>";
        }
    }
 ?></td>
     </tr>
</table>
</body>
</html>