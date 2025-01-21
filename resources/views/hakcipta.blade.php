@extends('layouts.app')

@section('title', 'Permohonan Hak Cipta - Sentra HKI UG')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-center">Permohonan Hak Cipta</h1>

        <form method="POST" action="">
            <!-- Detail Permohonan -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <strong>Detail</strong>
                    <div class="price-pascahakcipta d-flex align-items-center">
                        <p class="price mb-0">Rp <b>200,000</b></p>
                    </div>
                </div>
                @csrf
                <div class="card-body bg-white">

                    <!-- Jenis Permohonan -->
                    <div class="row align-items-center mb-3">
                        <label for="jenisPermohonan" class="col-md-3 col-form-label text-left">Jenis Permohonan<span
                                class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <select class="form-select" id="jenisPermohonan" name="jenisPermohonan" required>
                                <option value="" disabled selected>Pilih jenis permohonan</option>
                                <option value="UMK, Lembaga Pendidikan, Lembaga Litbang Pemerintah">
                                    UMK, Lembaga Pendidikan, Lembaga Litbang Pemerintah
                                </option>
                                <option value="Umum">Umum</option>
                            </select>
                        </div>
                    </div>

                    <!-- Jenis Ciptaan -->
                    <div class="row align-items-center mb-3">
                        <label for="jenisCiptaan" class="col-md-3 col-form-label text-left">Jenis Ciptaan<span
                                class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <select class="form-select" id="jenisCiptaan" name="jenisCiptaan" required>
                                <option value="" disabled selected>Pilih jenis ciptaan</option>
                                <option value="Karya Tulis">Karya Tulis</option>
                                <option value="Karya Seni">Karya Seni</option>
                                <option value="Komposisi Musik">Komposisi Musik</option>
                                <option value="Karya Audio Visual">Karya Audio Visual</option>
                                <option value="Karya Fotografi">Karya Fotografi</option>
                                <option value="Karya Drama & Koreografi">Karya Drama & Koreografi</option>
                                <option value="Karya Rekaman">Karya Rekaman</option>
                                <option value="Karya Lainnya">Karya Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <!-- Sub-Jenis Ciptaan -->
                    <div class="row align-items-center mb-3">
                        <label for="subJenisCiptaan" class="col-md-3 col-form-label text-left">Sub-Jenis Ciptaan<span
                                class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <select class="form-select" id="subJenisCiptaan" name="subJenisCiptaan" required>
                                <option value="" disabled selected>Pilih sub-jenis ciptaan</option>
                                <option value="Atlas">Atlas</option>
                                <option value="Biografi">Biografi</option>
                                <option value="Booklet">Booklet</option>
                                <option value="Buku">Buku</option>
                                <option value="Buku Mewarnai">Buku Mewarnai</option>
                                <option value="Buku Panduan/Petunjuk">Buku Panduan/Petunjuk</option>
                                <option value="Buku Pelajaran">Buku Pelajaran</option>
                                <option value="Buku Saku">Buku Saku</option>
                                <option value="Bunga Rampai">Bunga Rampai</option>
                                <option value="Cerita Bergambar">Cerita Bergambar</option>
                                <option value="Diktat">Diktat</option>
                                <option value="Dongeng">Dongeng</option>
                                <option value="e-Book">e-Book</option>
                                <option value="Ensiklopedia">Ensiklopedia</option>
                                <option value="Jurnal">Jurnal</option>
                                <option value="Kamus">Kamus</option>
                                <option value="Karya Ilmiah">Karya Ilmiah</option>
                                <option value="Karya Tulis">Karya Tulis</option>
                                <option value="Karya Tulis (Artikel)">Karya Tulis (Artikel)</option>
                                <option value="Karya Tulis (Disertasi)">Karya Tulis (Disertasi)</option>
                                <option value="Karya Tulis (Skripsi)">Karya Tulis (Skripsi)</option>
                                <option value="Karya Tulis (Tesis)">Karya Tulis (Tesis)</option>
                                <option value="Karya Tulis Lainnya">Karya Tulis Lainnya</option>
                                <option value="Komik">Komik</option>
                                <option value="Laporan Penelitian">Laporan Penelitian</option>
                                <option value="Majalah">Majalah</option>
                                <option value="Makalah">Makalah</option>
                                <option value="Modul">Modul</option>
                                <option value="Naskah Drama / Pertunjukan">Naskah Drama / Pertunjukan</option>
                                <option value="Naskah Film">Naskah Film</option>
                                <option value="Naskah Karya Siaran">Naskah Karya Siaran</option>
                                <option value="Naskah Karya Sinematografi">Naskah Karya Sinematografi</option>
                                <option value="Novel">Novel</option>
                                <option value="Perwajahan Karya Tulis">Perwajahan Karya Tulis</option>
                                <option value="Proposal Penelitian">Proposal Penelitian</option>
                                <option value="Puisi">Puisi</option>
                                <option value="Resensi">Resensi</option>
                                <option value="Resume/Ringkasan">Resume/Ringkasan</option>
                                <option value="Saduran">Saduran</option>
                                <option value="Sinopsis">Sinopsis</option>
                                <option value="Tafsir">Tafsir</option>
                                <option value="Terjemahan">Terjemahan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Judul -->
                    <div class="row align-items-center mb-3">
                        <label for="judul" class="col-md-3 col-form-label text-left">Judul<span
                                class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukkan Judul Ciptaan" required>
                        </div>
                    </div>

                    <!-- Label: Uraian Singkat Ciptaan -->
                    <div class="row align-items-center mb-3">
                        <label for="uraian" class="col-md-3 col-form-label text-left">Uraian Singkat Ciptaan<span
                                class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="uraian" name="uraian" rows="4"
                                placeholder="Masukkan uraian singkat ciptaan" required></textarea>
                        </div>
                    </div>

                    <!-- Label: Tanggal Pertama Kali Diumumkan -->
                    <div class="row align-items-center mb-3">
                        <label for="tanggalDiumumkan" class="col-md-3 col-form-label text-left">Tanggal Pertama Kali
                            Diumumkan<span class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" id="tanggalDiumumkan" name="tanggalDiumumkan"
                                required>
                        </div>
                    </div>

                    <!-- Label: Negara Pertama Kali Diumumkan -->
                    <div class="row align-items-center mb-3">
                        <label for="negaraDiumumkan" class="col-md-3 col-form-label text-left">Negara Pertama Kali
                            Diumumkan<span class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <!-- Input Dropdown untuk Negara Pertama Kali Diumumkan dengan default value Indonesia -->
                            <select class="form-select" id="negaraDiumumkan" name="negaraDiumumkan" required>
                                <option value="Indonesia" selected>Indonesia</option>
                                <option value="Afganistan">Afganistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Aljazair">Aljazair</option>
                                <option value="Amerika Serikat">Amerika Serikat</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua dan Barbuda">Antigua dan Barbuda</option>
                                <option value="Arab Saudi">Arab Saudi</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahama">Bahama</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belanda">Belanda</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia dan Herzegovina">Bosnia dan Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Buryatia">Buryatia</option>
                                <option value="Ceko">Ceko</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Kolombia</option>
                                <option value="Komoro">Komoro</option>
                                <option value="Kongo (Republik Kongo)">Kongo (Republik Kongo)</option>
                                <option value="Korea Selatan">Korea Selatan</option>
                                <option value="Kosta Rika">Kosta Rika</option>
                                <option value="Kuba">Kuba</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Letland">Letland</option>
                                <option value="Lichtenstein">Lichtenstein</option>
                                <option value="Lituania">Lituania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macedonia">Makedonia</option>
                                <option value="Madagaskar">Madagaskar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Maroko">Maroko</option>
                                <option value="Marshall Islands">Kepulauan Marshall</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mexico">Meksiko</option>
                                <option value="Mikronesia">Mikronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Mozambik">Mozambik</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Norwegia">Norwegia</option>
                                <option value="Nugini">Papua Nugini</option>
                                <option value="Oman">Oman</option>
                                <option value="Oman">Oman</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua Nugini">Papua Nugini</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Polandia">Polandia</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Prancis">Prancis</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republik Kongo">Republik Kongo</option>
                                <option value="Republik Korea">Republik Korea</option>
                                <option value="Republik Makedonia">Republik Makedonia</option>
                                <option value="Rusia">Rusia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome dan Principe">Sao Tome dan Principe</option>
                                <option value="Selandia Baru">Selandia Baru</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapura">Singapura</option>
                                <option value="Sint Eustatius">Sint Eustatius</option>
                                <option value="Siria">Siria</option>
                                <option value="Somalia">Somalia</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard</option>
                                <option value="Swedia">Swedia</option>
                                <option value="Swiss">Swiss</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor Leste">Timor Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad dan Tobago">Trinidad dan Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turki">Turki</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraina">Ukraina</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Yaman">Yaman</option>
                                <option value="Yordania">Yordania</option>
                                <option value="Yukon">Yukon</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>

                    <!-- Label: Kota Pertama Kali Diumumkan -->
                    <div class="row align-items-center mb-3">
                        <label for="kotaDiumumkan" class="col-md-3 col-form-label text-left">Kota Pertama Kali
                            Diumumkan<span class="required text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="kotaDiumumkan" name="kotaDiumumkan" class="form-control" required
                                placeholder="Masukkan Kota">
                        </div>
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

            <!-- Data Pencipta -->
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <strong>Data Pencipta</strong>
                    <button type="button" class="btn btn-success" id="addPencipta">Tambah</button>
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
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>Kecamatan</th>
                                    <th>Kode Pos</th>
                                    <th>Email/No. Telp</th>
                                    <th>Badan Hukum</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableDataPenciptaBody">
                                <!-- Row data will be inserted dynamically using JavaScript -->
                                <!-- Example row -->
                                <tr>
                                </tr>
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
                                <!-- Example row -->
                                <tr>

                                </tr>
                            </tbody>
                        </table>
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
                            <!-- Lampiran 1: Scan KTP Pemohon dan Pencipta -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Scan KTP Pemohon dan Pencipta<span
                                            class="required text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json"
                                        data-bucket="">
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
                                            <input type="hidden" class="hiddenAttachment" name="id_card"
                                                id="id_card">
                                        </span>
                                        <span class="fileinput-filename"></span>&nbsp;
                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput">
                                        </a>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 2: Surat Pernyataan -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Surat Pernyataan<span
                                            class="required text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json"
                                        data-bucket="">
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
                                            <input type="hidden" class="hiddenAttachment" name="disclaimer"
                                                id="disclaimer">
                                        </span>
                                        <span class="fileinput-filename"></span>&nbsp;
                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput">
                                        </a>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 3: Contoh Ciptaan -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Contoh Ciptaan<span
                                            class="required text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-9" id="fileciptaan">
                                    <multipleupload class="fileinput fileinput-new multiple" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json"
                                        data-bucket="">
                                        <span class="btn blue btn-file ciptaan-attachment" data-delay-show="100"
                                            data-delay-hide="200" data-title="Syarat Lampiran"
                                            data-placement="top-right">
                                            <b class="spinner">
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </b>
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file"
                                                accept="application/pdf, audio/mp3, image/png, image/jpeg, video/mp4"
                                                multiple="">
                                            <input type="hidden" class="hiddenAttachment" name="detail"
                                                id="detail">
                                        </span>
                                        <span class="error-placement"></span>
                                        <div class="multipleupload-container" id="filesContainer"></div>
                                    </multipleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 4: Contoh Ciptaan Link -->
                            <div class="row lampiran form-group form-md-line-input">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Contoh Ciptaan (Link)</label>
                                </div>
                                <div class="col-md-9 form-md-line-input" id="urlciptaan">
                                    <textarea class="form-control" name="url" placeholder="URL"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 5: Bukti Pengalihan Hak Cipta -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Bukti Pengalihan Hak Cipta</label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json"
                                        data-bucket="">
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
                                            <input type="hidden" class="hiddenAttachment" name="substantiation"
                                                id="substantiation">
                                        </span>
                                        <span class="fileinput-filename"></span>&nbsp;
                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput">
                                        </a>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12" id="kuasa" style="display: none;">
                            <!-- Lampiran 6: Surat Kuasa -->
                            <div class="row lampiran">
                                <div class="col-md-3 ">
                                    <label class="control-label text-left">Surat Kuasa <span
                                            class="required">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json"
                                        data-bucket="">
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
                                            <input type="hidden" class="hiddenAttachment" name="procuration"
                                                id="procuration">
                                        </span>
                                        <span class="fileinput-filename"></span>&nbsp;
                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput">
                                        </a>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 7: Salinan Resmi Akta Pendirian Badan Hukum -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Salinan Resmi Akta Pendirian Badan Hukum</label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json"
                                        data-bucket="">
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
                                            <input type="hidden" class="hiddenAttachment" name="transcript"
                                                id="transcript">
                                        </span>
                                        <span class="fileinput-filename"></span>&nbsp;
                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput">
                                        </a>
                                    </singleupload>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">
                            <!-- Lampiran 8: Scan NPWP -->
                            <div class="row lampiran">
                                <div class="col-md-3">
                                    <label class="control-label text-left">Scan NPWP perorangan / perusahaan</label>
                                </div>
                                <div class="col-md-9">
                                    <singleupload class="fileinput fileinput-new" data-provides="fileinput"
                                        data-url="https://e-hakcipta.dgip.go.id/index.php/attachment/upload_file.json"
                                        data-bucket="">
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
                                            <input type="hidden" class="hiddenAttachment" name="npwp"
                                                id="npwp">
                                        </span>
                                        <span class="fileinput-filename"></span>&nbsp;
                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput">
                                        </a>
                                    </singleupload>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alert Box untuk Template -->
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Unduh Template</h4>
                <p>Silahkan unduh template terbaru:</p>
                <ul>
                    <li><a href="https://e-hakcipta.dgip.go.id/assets/download/pernyataan_hak_cipta.docx"
                            target="_blank">Surat
                            Pernyataan (disini)</a></li>
                    <li><a href="https://e-hakcipta.dgip.go.id/assets/download/template_SPH.doc" target="_blank">Surat
                            Pengalihan
                            Hak (disini)</a></li>
                </ul>
            </div>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-primary btn-md py-3 px-5 my-5">Ajukan Permohonan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
