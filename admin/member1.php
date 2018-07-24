
<?php
include "../conn.php";
require("cekses.php");
?>
<div class="row mt">
          		<div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title">Data Member </h3> 
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                    <?php
                    $query1="select * from users";
                    
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  users 
	               where id_member like '%$qcari%'
	               or username '%$qcari%'  ";
                    }
                    $tampil=mysql_query($query1) or die(mysql_error());
                    ?>
                  <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  
                      <tr>
						<th bgcolor="#003399">Id Member</th>
                        <th bgcolor="#003399">Username</th>
                        <th bgcolor="#003399">Password</th>
                        <th bgcolor="#003399">Nama Lengkap</th>
                        <th bgcolor="#003399">Email</th>
						<th bgcolor="#003399">Nomor Telepon</th>
                        <th bgcolor="#003399">Tools</th>
                      </tr>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tr>
						<td><?php echo $data['id_member']; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo md5($data['password']);?></td>
						<td><?php echo $data['nama_lengkap'];?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['no_telp']; ?></td>
						
						<td>
						<center>
						<a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Hapus Member" href="hapus-member.php?hal=hapus_member&id_member=<?php echo $data['id_member'];?>">Hapus<span class="glyphicon glyphicon-trash"></a>
						-
						<a class="btn btn-sm btn-primary tooltips" data-placement="bottom" data-original-title="Edit Data Operator" href="edit-member.php?hal=edit-member&id_member=<?php echo $data['id_member'];?>">Edit<span class="glyphicon glyphicon-edit"></span></a>
                        </center>
						
					    </td>
					</tr>
					
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   </div>
				   <div class="text-right" align="right">
                  <a href="input-member.php" class="btn btn-sm btn-warning">Tambah Data Member<i class="fa fa-arrow-circle-right"></i></a>

                </div>
                
              </div> 
              </div>
            </div><!-- col-lg-12-->      	
          	</div>
