<!-- 
<?php
// Ambil ID pengajuan dari parameter URL
$id_pengajuan = isset($_GET['id_pengajuan']) ? intval($_GET['id_pengajuan']) : 0;

if ($id_pengajuan > 0) {
    // Query untuk mendapatkan data pengajuan berdasarkan ID
    $sql = "SELECT * FROM tb_pengajuan WHERE id_pengajuan = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id_pengajuan);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Ambil data pengajuan
        $pengajuan = $result->fetch_assoc();

    } else {
        echo "Data pengajuan tidak ditemukan.";
        exit;
    }
} else {
    echo "ID pengajuan tidak valid.";
    exit;
}

// $stmt->close();
// $koneksi->close();
?> -->



<section class="content">
    <div class="container">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-body">


                <div class="tab-content">
                    <div class="tab-pane active" >
                    <div class="container row text-sm">
                                <div style="width: 110px">ID pengajuan</div>
                                <div style="width: 220px"><input class="form-control text-sm bg-light"
                                        style="height: 30px" type="text" value= <?php echo $pengajuan['id_pengajuan'];?>
                                        readonly></div>
                                <div class="w-100 mb-1"></div>
                                <div style="width: 110px">Nama pengajuan</div>
                                <div style="width: 220px"><input class="form-control text-sm bg-light"
                                        style="height: 30px" type="text" value= <?php echo $pengajuan['Nama_Lengkap'];?> readonly>
                                </div>
                                <!-- <div class="w-100 mb-1"></div>
                                <div style="width: 110px">Status Layanan</div>
                                <div style="width: 220px">
                                    <span
                                        class="badge bg-warning">
                                        &nbsp;&nbsp;REGISTRASI&nbsp;&nbsp;</span>
                                </div> -->
                    </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 mt-3">
                                            <fieldset class="well bg-light">
                                                <legend class="well-legend bg-light"><strong>Data pengajuan</strong></legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="font-weight-normal">Nama Lengkap</label>
                                                            <input type="text" class="form-control text-sm bg-light" value= <?php echo $pengajuan['Nama_Lengkap'];?> readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="font-weight-normal">Tanggal Lahir</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control text-sm bg-light" value="" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="font-weight-normal">Nomor Identitas (KTP)</label>
                                                            <input type="text" class="form-control text-sm bg-light" value  = <?php echo $pengajuan['Nomor_Identitas_KTP'];?> readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="font-weight-normal">Alamat Email</label>
                                                            <input type="text" class="form-control text-sm bg-light"  value="<?php echo $pengajuan['Email'];?>" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="font-weight-normal">No Telepon Seluler (HP1)</label>
                                                            <input type="text" class="form-control text-sm phonehp bg-light" value=<?php echo $pengajuan['Nomor_Hp_1'];?> readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="font-weight-normal">No Telepon Seluler (HP2)</label>
                                                            <input type="text" class="form-control text-sm phonehp bg-light" value="<?php echo $pengajuan['Nomor_Hp_2'];?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <fieldset class="well bg-light">
                                                                <legend class="well-legend bg-light"><strong>Data Alamat Pemasangan</strong></legend>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-normal">Alamat Lengkap</label>
                                                                            <input type="text" class="form-control bg-light" value="<?php echo $pengajuan['Alamat_Pemasangan'];?>" readonly >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-normal">RT</label>
                                                                            <input type="text" class="form-control text-sm numeric bg-light" maxlength="3"
                                                                            value="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-normal">RW</label>
                                                                            <input type="text" class="form-control text-sm numeric bg-light"
                                                                            value="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-normal">Kode Pos</label>
                                                                            <input type="text" class="form-control text-sm bg-light" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-normal">Provinsi</label>
                                                                            <input type="text" class="form-control text-sm bg-light" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-normal">Kota/Kabupaten</label>
                                                                            <input type="text" class="form-control text-sm bg-light" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-normal">Kecamatan</label>
                                                                            <input type="text" value="" class="form-control text-sm bg-light" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-normal">Kelurahan</label>
                                                                            <input type="text" value="" class="form-control text-sm bg-light" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="bg-light col-md-11">
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-6">
                                            <fieldset class="well bg-light">
                                                <legend class="well-legend bg-light"><strong>Data Maps Alamat Pemasangan</strong></legend>
                                                    <div class="col-md-6 mt-3 mt-md-0">
                                                        <div class="form-group">
                                                            <label>Lokasi Maps:</label>
                                                            <input type="text" class="form-control form-control-sm bg-light" readonly/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Latitude:</label>
                                                            <input type="text" class="form-control form-control-sm bg-light" value="<?php echo $pengajuan['latitide'];?>" readonly/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Longitude:</label>
                                                            <input type="text" class="form-control form-control-sm bg-light" value="<?php echo $pengajuan['longitude'];?>" readonly/>
                                                        </div>
                                                    </div>
                                            </fieldset>
                                            <fieldset class="well bg-light">
                                                <legend class="well-legend bg-light"><strong>Data Layanan</strong></legend>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="font-weight-normal">Paket Layanan</label>
                                                        <input type="text" class="form-control text-sm numeric bg-light" value="<?php echo $pengajuan['nama_paket'];?>" readonly>
                                                    </div>
                                                </div>
                                                <hr />
                                            </fieldset>
                                        </div>   
                                        </div>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        
                                        <div class="col-md-12 mt-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset class="well bg-light">
                                                        <legend class="well-legend bg-light"><strong>Foto KTP</strong></legend>
                                                        <img id="preview1" src="/customer/image?id=&type=ktp" class="mt-2 img-fluid rounded mx-auto d-block" alt="KTP" title="KTP" style="max-height: 200px;">
                                                        <div class="mt-2 mb-3 ml-1 mr-1">
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" name="image_ktp" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" accept=".png, .jpg, .jpeg, .bmp">
                                                                    <label class="custom-file-label imgLabel1" for="inputGroupFile01" id="labelGroupFile01">Pilih berkas foto</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset class="well bg-light">
                                                        <legend class="well-legend bg-light"><strong>Foto Depan Rumah</strong></legend>
                                                        <img id="preview3" src="customer/image?id=&type=rumah" class="mt-2 img-fluid rounded mx-auto d-block" alt="Rumah" title="Rumah" style="max-height: 200px;">
                                                        <div class="mt-2 mb-3 ml-1 mr-1">
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupFileAddon03">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" name="image_rumah" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" accept=".png, .jpg, .jpeg, .bmp">
                                                                    <label class="custom-file-label imgLabel3" for="inputGroupFile03" id="labelGroupFile03">Pilih berkas foto</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <!-- batas akhir tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    