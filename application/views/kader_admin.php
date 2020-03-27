<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KADER</h2>
        </div>
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            FORMULIR DATA KADER
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <form action="<?= base_url(); ?>kader/kirim" method="post" enctype="multipart/form-data">
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <label for="">Foto Profil</label>
                                        <div class="">
                                            <span class="img-div">
                                                <div class="text-center img-placeholder" onClick="triggerClick()"></div>
                                                <img width="150px" src="<?= base_url(); ?>templates/images/profile.png" onClick="triggerClick()" id="profileDisplay">
                                                <input type="file" id="profileImage" name="profileImage" onchange="displayImage(this)" style="display: none;" class="form-control" required>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nik" placeholder="NIK" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_panggilan" placeholder="Nama Panggilan">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_kunyah" placeholder="Nama Kunyah">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line" id="bs_datepicker_container">
                                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="jenis_kelamin" class="form-control show-tick">
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="gol_darah" class="form-control show-tick">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" type="text" name="alamat" class="form-control no-resize" placeholder="Alamat"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" type="text" name="alamat_daerah" class="form-control no-resize" placeholder="Alamat Daerah"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="suku" class="form-control" placeholder="Suku">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="hp1" class="form-control" placeholder="No HP1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="5" name="hobby" type="text" class="form-control no-resize" placeholder="Hobby"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="hp2" class="form-control" placeholder="No HP2">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="jml_saudara" class="form-control" placeholder="Jumlah Saudara">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="anakke" class="form-control" placeholder="Anak ke-">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="status_nikah" class="form-control show-tick">
                                                <option value="menikah">menikah</option>
                                                <option value="belum nikah">belum nikah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="5" name="bakat" type="text" class="form-control no-resize" placeholder="Bakat"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="blog" class="form-control" placeholder="Blog">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="fb" class="form-control" placeholder="Facebook">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="tw" class="form-control" placeholder="Twitter">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary m-t-15 waves-effect">Kirim</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>