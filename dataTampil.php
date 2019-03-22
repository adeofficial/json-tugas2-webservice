<?php
	include'koneksi.php';
	$query = mysqli_query($konek,"SELECT * FROM customer");
?>
<!DOCTYPE html>
<html>
        <h1> Data Akademik</h1></br>
        <div>Customer</div>
          <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id customer</th>
            <th>username </th>
             <th>nama</th>
             <th>umur</th>
             <th>alamat</th>
             <th>telp</th>
             <th>email</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["id_customer"];?></td>
            <td><?php echo $data["username"];?></td>
             <td><?php echo $data["nama"];?></td>
              <td><?php echo $data["umur"];?></td>
               <td><?php echo $data["alamat"];?></td>
                <td><?php echo $data["telp"];?></td>
                 <td><?php echo $data["email"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</html>
<?php
	$query = mysqli_query($konek,"SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
		<div>Mahasiswa<div>
          <table border="1" cellpadding="0" cellspacing="0">
        <tr>
			<th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi </th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["nama"];?></td>
             <td><?php echo $data["prodi"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</html>

<?php
	$query = mysqli_query($konek,"SELECT * FROM matakuliah");
?>
<!DOCTYPE html>
<html>
        <div>Matakuliah</div>
          <table border="1" cellpadding="0" cellspacing="0">
        <tr>
			<th>No</th>
            <th>Kode Mk</th>
            <th>Nm Mk</th>
			<th>SKS</th>
            <th>Prodi </th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["kdmk"];?></td>
            <td><?php echo $data["nmmk"];?></td>
			<td><?php echo $data["sks"];?></td>
             <td><?php echo $data["prodi"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</html>

<?php
	$query = mysqli_query($konek,"SELECT * FROM nilai");
?>
<!DOCTYPE html>
<html>
        <div>Nilai</div>
          <table border="1" cellpadding="0" cellspacing="0">
        <tr>
			<th>No</th>
            <th>Th Akademik</th>
            <th>Nim</th>
			<th>Kode MK</th>
            <th>Nilai </th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["thakd"];?></td>
            <td><?php echo $data["nim"];?></td>
			<td><?php echo $data["kdmk"];?></td>
             <td><?php echo $data["nilai"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</html>