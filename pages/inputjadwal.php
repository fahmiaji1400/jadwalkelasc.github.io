            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Jadwal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="?pages=input-jadwal-aksi" method="POST" onsubmit="return validasi_input(this)" role="form">
                                        <div class="form-group">
                                            <label>Hari</label>
                                            <input class="form-control" type="text" name="hari">
                                            
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Mata Kuliah</label>
                                            <input class="form-control" type="text" name="matkul">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jam</label>
                                            <input class="form-control" type="time" name="jam">
                                            <p class="help-block">ex: 08:00 AM</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Dosen</label>
                                            <input class="form-control" type="text" name="pengajar">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Ruang Kelas</label>
                                            <input class="form-control" type="text" name="ruangan">
                                            
                                        </div>

                                        <p>
                                           <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                                        </p>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->