<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PROFIL SEKRETARIAT</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABEL DATA SEKRETARIAT
                        </h2>
                        <br>
                        <button type="button" data-toggle="modal" data-target="#tambahData" class="btn btn-primary waves-effect">TAMBAH DATA SEKRETARIAT <i class="material-icons">add</i></button>
                    </div>
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama DPD</th>
                                        <th>Alamat Kantor</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Tahun Berdiri</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama DPD</th>
                                        <th>Alamat Kantor</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Tahun Berdiri</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i =  1; ?>
                                    <?php foreach ($datasekret as $dsekret) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $dsekret['nama_dpd']; ?></td>
                                            <td><?= $dsekret['alamat_kantor']; ?></td>
                                            <td><?= $dsekret['alamat_email']; ?></td>
                                            <td><?= $dsekret['no_telp']; ?></td>
                                            <td><?= $dsekret['tahun_berdiri']; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#detailKader">
                                                    <i class="material-icons">info</i>
                                                </button>
                                                <button type="button" class="btn btn-warning waves-effect">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?');" type="button" class="btn btn-danger waves-effect">
                                                    <i class="material-icons">delete_outline</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tambahData">Tambah Data Sekretariat</h4>
            </div>
            <hr>
            <div class="modal-body">
                <form action="<?= base_url(); ?>sekretariat/tambah_data" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label>Nama DPW</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_dpd" placeholder="Nama DPD" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Alamat Kantor</label>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea rows="3" type="text" name="alamat_kantor" class="form-control no-resize" placeholder="Alamat Kantor" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Email</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>No Telepon</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="no_telp" class="form-control" placeholder="No Telpon" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Tahun Berdiri</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" name="tahun_berdiri" placeholder="Tahun Berdiri" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Status Kantor</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="status_kantor" class="form-control show-tick" required>
                                    <option value=""></option>
                                    <option value="Kontrak">Kontrak</option>
                                    <option value="Milik DPD">Milik DPD</option>
                                    <option value="Pnjam">Pinjam</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Papan Nama Kantor</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="plang" class="form-control show-tick" required>
                                    <option value=""></option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Komputer</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="komputer" class="form-control show-tick" required>
                                    <option value=""></option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Mobil</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" name="mobil" placeholder="Mobil" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Motor</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" name="motor" placeholder="Motor" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>Staf Tetap</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="staf_tetap" class="form-control show-tick" required>
                                    <option value=""></option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>SK Kepengurusan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" class="form-control" name="sk_pengurus" required>
                                <div class="help-info">Max. 2 MB (.jpg, .jpeg, .png)</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label>SKT Organisasi</label>
                        <div class="form-group">
                            <div class="form-line">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="skt_org" required>
                                    <div class="help-info">Max. 2 MB (.jpg, .jpeg, .png)</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="button" class="btn btn-lg btn-default m-t-15 waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-lg btn-primary m-t-15 waves-effect">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->

            </div>
        </div>
    </div>
</div>