@extends('layouts.app')

@section('title', 'Daftar Pasca Ciptaan - Sentra HKI UG')

@section('content')
    <div class="container">
        <!-- Daftar Ciptaan -->
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Daftar Pasca Ciptaan</strong>
                <button type="button" class="btn btn-success" id="addCiptaan">+ Tambah</button>
            </div>
            <div class="card-body bg-white">
                <!-- Pencarian -->
                <div class="d-flex justify-content-end mb-3">
                    <div class="input-group" style="max-width: 400px;">
                        <input type="text" class="form-control" id="searchCiptaan" placeholder="Cari Ciptaan...">
                        <button class="btn btn-primary" id="searchButton">Cari</button>
                    </div>
                </div>

                <!-- Tabel Daftar Ciptaan yang Bisa Discroll ke Samping -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-nowrap">Nomor Permohonan</th>
                                <th class="text-nowrap">Nomor IPAS</th>
                                <th class="text-nowrap">Pengguna</th>
                                <th class="text-nowrap">Judul Ciptaan</th>
                                <th class="text-nowrap">Tanggal Pengajuan</th>
                                <th class="text-nowrap">Konsultan / Kuasa</th>
                                <th class="text-nowrap">Jenis Permohonan</th>
                                <th class="text-nowrap">Jenis Ciptaan</th>
                                <th class="text-nowrap">Masukan Kota</th>
                                <th class="text-nowrap">Status Pembayaran</th>
                                <th class="text-nowrap">Status Penerimaan</th>
                                <th class="text-nowrap">Tanggal Diterima</th>
                                <th class="text-nowrap">Diterima Oleh</th>
                                <th class="text-nowrap" style="position: sticky; right: 0; z-index: 2;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-nowrap"><a href="#">EC00202510533</a></td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">Widyo Nugroho</td>
                                <td class="text-nowrap">Program Enkripsi dan Dekripsi Citra Digital deng</td>
                                <td class="text-nowrap">21-01-2025 20:44:47</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">UMK, Lembaga Pendidikan, Lembaga Litbang Pemerin</td>
                                <td class="text-nowrap">Program Komputer</td>
                                <td class="text-nowrap">DEPOK</td>
                                <td class="text-nowrap">Lunas Pengajuan Pencatatan Ciptaan</td>
                                <td class="text-nowrap">Diterima</td>
                                <td class="text-nowrap">21-01-2025 20:49:03</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap" style="position: sticky; right: 0; z-index: 2;">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Hapus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap"><a href="#">EC00202510533</a></td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">Widyo Nugroho</td>
                                <td class="text-nowrap">Program Enkripsi dan Dekripsi Citra Digital deng</td>
                                <td class="text-nowrap">21-01-2025 20:44:47</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">UMK, Lembaga Pendidikan, Lembaga Litbang Pemerin</td>
                                <td class="text-nowrap">Program Komputer</td>
                                <td class="text-nowrap">DEPOK</td>
                                <td class="text-nowrap">Lunas Pengajuan Pencatatan Ciptaan</td>
                                <td class="text-nowrap">Diterima</td>
                                <td class="text-nowrap">21-01-2025 20:49:03</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap" style="position: sticky; right: 0; z-index: 2;">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Hapus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap"><a href="#">EC00202510290</a></td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">Widyo Nugroho</td>
                                <td class="text-nowrap">Forice: Aplikasi Berbasis Website Sebagai Alat B</td>
                                <td class="text-nowrap">21-01-2025 15:25:10</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">UMK, Lembaga Pendidikan, Lembaga Litbang Pemerin</td>
                                <td class="text-nowrap">Program Komputer</td>
                                <td class="text-nowrap">DEPOK</td>
                                <td class="text-nowrap">Lunas Pengajuan Pencatatan Ciptaan</td>
                                <td class="text-nowrap">Diterima</td>
                                <td class="text-nowrap">21-01-2025 15:30:04</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap" style="position: sticky; right: 0; z-index: 2;">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Hapus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap"><a href="#">EC00202510247</a></td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">Widyo Nugroho</td>
                                <td class="text-nowrap">Rancang Bangun MoistureResponseAutomation Berbas</td>
                                <td class="text-nowrap">21-01-2025 14:42:37</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">UMK, Lembaga Pendidikan, Lembaga Litbang Pemerin</td>
                                <td class="text-nowrap">Program Komputer</td>
                                <td class="text-nowrap">DEPOK</td>
                                <td class="text-nowrap">Lunas Pengajuan Pencatatan Ciptaan</td>
                                <td class="text-nowrap">Diterima</td>
                                <td class="text-nowrap">21-01-2025 14:48:02</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap" style="position: sticky; right: 0; z-index: 2;">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Hapus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap"><a href="#">EC00202509389</a></td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">Widyo Nugroho</td>
                                <td class="text-nowrap">Aplikasi E-Logistik untuk Kelompok Tani di Desa</td>
                                <td class="text-nowrap">20-01-2025 11:44:06</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">UMK, Lembaga Pendidikan, Lembaga Litbang Pemerin</td>
                                <td class="text-nowrap">Program Komputer</td>
                                <td class="text-nowrap">DEPOK</td>
                                <td class="text-nowrap">Lunas Pengajuan Pencatatan Ciptaan</td>
                                <td class="text-nowrap">Diterima</td>
                                <td class="text-nowrap">20-01-2025 11:47:02</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap" style="position: sticky; right: 0; z-index: 2;">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Hapus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap"><a href="#">EC00202509267</a></td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">Widyo Nugroho</td>
                                <td class="text-nowrap">Simulasi Dinamik Kendaraan dengan Software MSC A</td>
                                <td class="text-nowrap">20-01-2025 10:33:06</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap">UMK, Lembaga Pendidikan, Lembaga Litbang Pemerin</td>
                                <td class="text-nowrap">Buku Panduan/Petunjuk</td>
                                <td class="text-nowrap">DEPOK</td>
                                <td class="text-nowrap">Lunas Pengajuan Pencatatan Ciptaan</td>
                                <td class="text-nowrap">Diterima</td>
                                <td class="text-nowrap">20-01-2025 10:38:03</td>
                                <td class="text-nowrap"> </td>
                                <td class="text-nowrap" style="position: sticky; right: 0; z-index: 2;">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Hapus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>



                <!-- Pagination -->
                <div class="d-flex justify-content-end mt-3">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&laquo;
                                    Previous</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next &raquo;</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
