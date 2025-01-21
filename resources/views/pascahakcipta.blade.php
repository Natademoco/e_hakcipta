@extends('layouts.app')

@section('title', 'Permohonan Pasca Hak Cipta - Sentra HKI UG')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-center">Pasca Permohonan Pendaftaran Ciptaan Secara Elektronik</h1>

        <form method="POST" action="">
            @csrf
            <!-- Detail Permohonan -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <strong>Detail</strong>
                    <div class="price-pascahakcipta d-flex align-items-center">
                        <p class="price mb-0">Rp <b>200,000</b></p>
                    </div>
                </div>
                <div class="card-body bg-white">

                    <!-- Jenis Permohonan -->
                    <div class="row align-items-center mb-3">
                        <label for="jenisPermohonan" class="col-md-3 col-form-label text-left">Jenis Permohonan<span
                                class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <select class="form-select" id="jenisPermohonan" name="jenisPermohonan" required>
                                <option value="">Pilih jenis permohonan</option>
                                <option value="1">Permohonan Pencatatan Pengalihan Hak atas Ciptaan dan/atau Produk Hak
                                    Terkait</option>
                                <option value="2">Permohonan Perubahan Nama dan Alamat Pencipta dan/atau Pemilik Hak
                                    Terkait</option>
                                <option value="3">Permohonan Petikan Tiap Pencatatan Ciptaan dan/atau Produk Hak
                                    Terkait</option>
                                <option value="4">Permohonan Salinan Surat Pencatatan Ciptaan dan/atau Produk Hak
                                    Terkait</option>
                                <option value="5">Pencatatan Lisensi atas Ciptaan dan/atau Produk Hak Terkait</option>
                                <option value="6">Permohonan Keterangan Tertulis Mengenai Ciptaan dan/atau Produk Hak
                                    Terkait</option>
                                <option value="7">Permohonan Perbaikan Data Permohonan Pencatatan Ciptaan dan/atau
                                    Produk Hak Terkait</option>
                                <option value="8">Permohonan Koreksi Surat Pencatatan Ciptaan dan/atau Produk Hak
                                    Terkait</option>
                                <option value="9">Koreksi Surat atas Kesalahan DJKI</option>
                                <option value="10">Tanggapan Surat Kekurangan Formalitas</option>
                                <option value="11">Tanggapan Surat atas Keberatan Batal demi Hukum</option>
                                <option value="12">Tanggapan Surat atas Keberatan Tidak Dicatatkan</option>
                                <option value="13">Pertanyaan Status</option>
                                <option value="14">Surat Lainnya</option>
                                <option value="15">Perbaikan Contoh Ciptaan</option>
                                <option value="17">Pengajuan Penghapusan Ciptaan atas permintaan sendiri</option>
                            </select>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="row align-items-center mb-3">
                        <label for="description" class="col-md-3 col-form-label text-left">Deskripsi<span
                                class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Permohonan Terkait -->
            <div class="card mt-4">
                <div class="card-header">
                    <strong>Permohonan Terkait</strong>
                </div>
                <div class="card-body bg-white">

                    <!-- Nomor Permohonan -->
                    <div class="row align-items-center mb-3">
                        <label for="nomorPermohonan" class="col-md-3 col-form-label text-left">Nomor Permohonan<span
                                class="required text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="nomorPermohonan" name="nomorPermohonan"
                                placeholder="Masukkan nomor permohonan" required>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success" id="tambahNomorPermohonan">+ Tambah Nomor
                                Permohonan</button>
                        </div>
                    </div>

                    <!-- Tabel Nomor Permohonan -->
                    <div class="mt-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor Permohonan</th>
                                    <th>Detail Permohonan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tablePermohonanBody">
                                <!-- Data akan dimasukkan di sini menggunakan JavaScript -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Data Pencipta -->
            <div class="card mt-4">
                <div class="card-header">
                    <strong>Data Pencipta</strong>
                </div>
                <div class="card-body bg-white">

                    <!-- Tabel Data Pencipta -->
                    <div class="mt-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Alamat</th>
                                    <th>Kode Pos</th>
                                    <th>Kota</th>
                                    <th>Provinsi</th>
                                </tr>
                            </thead>
                            <tbody id="tableDataPenciptaBody">
                                <!-- Data akan dimasukkan di sini menggunakan JavaScript -->
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>

            <!-- Data Pemegang Hak Cipta -->
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <strong>Data Pemegang Hak Cipta</strong>
                    <button type="button" class="btn btn-success" id="addPemegangHakCipta">Tambah</button>
                </div>
                <div class="card-body bg-white">

                    <!-- Tabel Data Pemegang Hak Cipta -->
                    <div class="mt-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Alamat</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>Kecamatan</th>
                                    <th>Kode Pos</th>
                                    <th>Email/No. Telp</th>
                                    <th>Badan Hukum</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableDataPemegangHakCiptaBody">
                                <!-- Row data will be inserted dynamically using JavaScript -->
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Data Kuasa -->
            <div class="card mt-4">
                <div class="card-header">
                    <strong>Data Kuasa</strong>
                </div>
                <div class="card-body bg-white">
                    <!-- Melalui Kuasa -->
                    <div class="row align-items-center mb-3">
                        <label for="melaluiKuasa" class="col-md-3 col-form-label text-left">Melalui Kuasa</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="melaluiKuasa" id="melaluiKuasaYes"
                                    value="Yes" required>
                                <label class="form-check-label" for="melaluiKuasaYes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="melaluiKuasa" id="melaluiKuasaNo"
                                    value="No" checked>
                                <label class="form-check-label" for="melaluiKuasaNo">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lampiran -->
            <div class="card mt-4">
                <div class="card-header">
                    <strong>Lampiran</strong>
                </div>
                <div class="card-body bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Lampiran 1: Surat Permohonan Pemindahan Hak -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Surat Permohonan Pemindahan Hak<span
                                            class="required text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json">
                                        <span class="btn blue btn-file pernyataan-attachment" data-delay-show="100"
                                            data-delay-hide="200" data-title="Syarat Lampiran"
                                            data-placement="top-right">
                                            <b class="spinner">
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </b>
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file"
                                                accept="application/pdf, image/png, image/jpeg, video/mp4">
                                            <input type="hidden" class="hiddenAttachment"
                                                name="permohonan_pemindahan_hak" id="permohonan_pemindahan_hak">
                                        </span>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 2: Surat Perjanjian -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Surat Perjanjian<span
                                            class="required text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json">
                                        <span class="btn blue btn-file pernyataan-attachment" data-delay-show="100"
                                            data-delay-hide="200" data-title="Syarat Lampiran"
                                            data-placement="top-right">
                                            <b class="spinner">
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </b>
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file"
                                                accept="application/pdf, image/png, image/jpeg, video/mp4">
                                            <input type="hidden" class="hiddenAttachment" name="surat_perjanjian"
                                                id="surat_perjanjian">
                                        </span>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 3: Bukti Pengalihan Hak -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Bukti Pengalihan Hak<span
                                            class="required text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json">
                                        <span class="btn blue btn-file pernyataan-attachment" data-delay-show="100"
                                            data-delay-hide="200" data-title="Syarat Lampiran"
                                            data-placement="top-right">
                                            <b class="spinner">
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </b>
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file"
                                                accept="application/pdf, image/png, image/jpeg, video/mp4">
                                            <input type="hidden" class="hiddenAttachment" name="bukti_pengalihan_hak"
                                                id="bukti_pengalihan_hak">
                                        </span>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 4: KTP -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">KTP<span
                                            class="required text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json">
                                        <span class="btn blue btn-file pernyataan-attachment" data-delay-show="100"
                                            data-delay-hide="200" data-title="Syarat Lampiran"
                                            data-placement="top-right">
                                            <b class="spinner">
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </b>
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file"
                                                accept="application/pdf, image/png, image/jpeg, video/mp4">
                                            <input type="hidden" class="hiddenAttachment" name="ktp"
                                                id="ktp">
                                        </span>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 5: Surat Kuasa (Apabila Melalui Kuasa) -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Surat Kuasa (Apabila Melalui Kuasa)<span
                                            class="required text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json">
                                        <span class="btn blue btn-file pernyataan-attachment" data-delay-show="100"
                                            data-delay-hide="200" data-title="Syarat Lampiran"
                                            data-placement="top-right">
                                            <b class="spinner">
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </b>
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file"
                                                accept="application/pdf, image/png, image/jpeg, video/mp4">
                                            <input type="hidden" class="hiddenAttachment" name="surat_kuasa"
                                                id="surat_kuasa">
                                        </span>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 6: Akta Perusahaan (Apabila Pemegang Badan Hukum) -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Akta Perusahaan (Apabila Pemegang Badan
                                        Hukum)<span class="required text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json">
                                        <span class="btn blue btn-file pernyataan-attachment" data-delay-show="100"
                                            data-delay-hide="200" data-title="Syarat Lampiran"
                                            data-placement="top-right">
                                            <b class="spinner">
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </b>
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file"
                                                accept="application/pdf, image/png, image/jpeg, video/mp4">
                                            <input type="hidden" class="hiddenAttachment" name="akta_perusahaan"
                                                id="akta_perusahaan">
                                        </span>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 7: Dokumen Lainnya -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Dokumen Lainnya</label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json">
                                        <span class="btn blue btn-file pernyataan-attachment" data-delay-show="100"
                                            data-delay-hide="200" data-title="Syarat Lampiran"
                                            data-placement="top-right">
                                            <b class="spinner">
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </b>
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file"
                                                accept="application/pdf, image/png, image/jpeg, video/mp4">
                                            <input type="hidden" class="hiddenAttachment" name="dokumen_lainnya"
                                                id="dokumen_lainnya">
                                        </span>
                                    </singleupload>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between">
                    <button type="button" class="btn btn-warning btn-md py-3 px-5 my-5" id="resetForm">Mengatur
                        Ulang</button>
                    <button type="submit" class="btn btn-primary btn-md py-3 px-5 my-5">Ajukan Permohonan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
