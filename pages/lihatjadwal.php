            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                          
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Hari</th>
                                        <th>Mata Kuliah</th>
                                        <th>Jam</th>
                                        <th>Pengajar</th>
                                        <th>Ruangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                             include "config.php";
                            $select = "SELECT * FROM jadwal";
                            $q_select = mysql_query($select) or die(mysql_error());
                            $row = mysql_num_rows($q_select);
                            $num = 1;
                            
                            while ($rows= mysql_fetch_array($q_select)){
                                $no         =   $rows['no'];
                                $hari       =   $rows['hari'];
                                $matkul     =   $rows['matkul'];
                                $jam        =   $rows['jam'];
                                $pengajar   =   $rows['pengajar'];
                                $ruangan    =   $rows['ruangan'];
                                                            
                                echo "<tr>";
                                echo "<td align=center>$num</td>
                                        <td>$hari</td>
                                        <td>$matkul</td>
                                        <td>$jam</td>
                                        <td>$pengajar</td>
                                        <td>$ruangan</td>
                                        <td>
                                        <a href='?pages=delete-jadwal&no=$no' onclick='return konfirmasi()' class='center btn btn-gradient btn-danger'>Delete</a>
                                        <a href='?pages=edit-jadwal&no=$no'  target='_blank' class='center btn btn-gradient btn-info'>Edit</a>
                                        </td>";
                                        echo "</tr>";
                                $num++;
                            }
                        
                        ?>
                                </tbody>
                               
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
           