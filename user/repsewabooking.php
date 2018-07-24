<?php
require("cekses.php");
?>
<br><br>Data Booking<br><br>

<?php
                    $tampil=mysql_query("select * from pesandp order by id_pemesanan asc");
                    ?>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
	<td bgcolor="#00CCFF"><strong>No</strong></td>
    <td bgcolor="#00CCFF"><strong>ID Pemesanan</strong></td>
    <td bgcolor="#00CCFF"><strong>Team</strong></td>
    <td bgcolor="#00CCFF"><strong>Tanggal</strong></td>
    <td bgcolor="#00CCFF"><strong>Jam</strong></td>
    <td bgcolor="#00CCFF"><strong>DP</strong></td>
	<td bgcolor="#00CCFF"><strong>Keterangan</strong></td>
	<td bgcolor="#00CCFF"><strong>Tools</strong></td>
	
  </tr>

 <?php 
					
            
        $no=0;
        while($data=mysql_fetch_array($tampil))
        
        {
            $no++;
					  ?>
                    <tr>
					<td><?php echo $no; ?></td>
                    <td><?php echo $data['id_pemesanan']; ?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['tgldp']; ?></td>
                    <td><?php echo $data['jamdp'];?></td>
					<td><?php echo $data['jumlahdp'];?></td>
					<td><?php echo $data['ketdp'];?></td>
					<td>
					<a href="bon.php?id_pemesanan=<?php echo $data[0];  ?>"> Cetak Struk</button></a>
					- 
					<a href="laporan/struk.php?idtransaksi=<?php echo $data[0];  ?>"> Masukan Ke Jadwal</button></a>
					-
					<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Hapus Siswa" href="hapus-pesandp.php?hal=hapus&id_pemesanan=<?php echo $data[0]; ?>">Hapus</a>
					</td>
					
                    <?php   
              }
              ?>


  </table>

  
  
  
  <br><br>Jadwal Penggunaan Lapangan<br><br>
  <?php
                    $tampil=mysql_query("select * from pesanfix order by id_pemesanan asc");
                    ?>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
	<td bgcolor="#00CCFF"><strong>No</strong></td>
    <td bgcolor="#00CCFF"><strong>ID Pemesanan</strong></td>
    <td bgcolor="#00CCFF"><strong>Team</strong></td>
    <td bgcolor="#00CCFF"><strong>Tanggal</strong></td>
    <td bgcolor="#00CCFF"><strong>Jam</strong></td>
    <td bgcolor="#00CCFF"><strong>DP</strong></td>
	<td bgcolor="#00CCFF"><strong>Keterangan</strong></td>
	<td bgcolor="#00CCFF"><strong>Tools</strong></td>
	
  </tr>

 <?php 
					
            
        $no=0;
        while($data=mysql_fetch_array($tampil))
        
        {
            $no++;
					  ?>
                    <tr>
					<td><?php echo $no; ?></td>
                    <td><?php echo $data['id_pemesanan']; ?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['tgldp']; ?></td>
                    <td><?php echo $data['jamdp'];?></td>
					<td><?php echo $data['jumlahdp'];?></td>
					<td><?php echo $data['ketdp'];?></td>
					<td>
					<a href="laporan/struk.php?idtransaksi=<?php echo $data[0];  ?>"> Cetak Struk</button></a>
					- 
					<a href="laporan/struk.php?idtransaksi=<?php echo $data[0];  ?>"> Masukan Ke Jadwal</button></a>
					-
					<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Hapus Siswa" href="hapus-pesandp.php?hal=hapus&id_pemesanan=<?php echo $data[0]; ?>">Hapus</a>
					</td>
					
                    <?php   
              }
              ?>


  </table>
