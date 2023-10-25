@extends('layouts.layouts-dashboard')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="mb-4">
            <!-- DPM's achievement -->
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-start mb-4">
                <h1 class="h3 mb-0 mx-4 text-gray-800">DPM's Achievement</h1>
                <i class="fas fa-solid fa-trophy fa-2x text-gray-300"></i>
            </div>
            <div class="row">
                @foreach ($prestasiData as $prestasi)
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-1">
                        <div class="card-body">
                            <div class="text-xm font-weight-bold text-primary text-uppercase mb-2">
                                {{ $prestasi->nama_prestasi }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 mb-2">{{ $prestasi->juara }}</div>
                            <div class="mb-0 text-gray-800 mb-2">
                                <p class="font-weight-light" style="font-size: .8rem; margin: 0;">{{ $prestasi->deskripsi_lomba }}</p>
                            </div>
                            <div class="text-xs font-weight-bold text-primary">
                                {{ implode(', ', json_decode($prestasi->peserta_lomba)) }}
                            </div>
                            <div class="text-xs font-weight-bold text-primary">
                                Abdul Rozak - D-IV Teknik Informatika 2022
                            </div>
                            <div class="text-xs font-weight-bold text-primary">
                                Bayu Setiwan - D-IV Sistem Informasi Bisnis 2022
                            </div>
                            <div class="text-xs font-weight-bold text-primary mt-2">
                                20 Januari 2023 - Surabaya
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <button class="btn btn-sm btn-warning btn-block" type="button">Edit</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-sm btn-danger btn-block" type="button">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                        <h5 class="mt-2 font-weight-bold text-primary">{{ $detailOki->akronim_oki }}'s Profile
                        </h5>

                    <!-- Button trigger modal -->
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editBiodataOKI">Edit</button>
                    <!-- Modal -->
                    <div class="modal  fade" id="editBiodataOKI" tabindex="-1" aria-labelledby="editBiodataOKILabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editBiodataOKILabel">Edit Biodata DPM</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="nameOKI">Name</label>
                                            <input type="text" class="form-control" id="nameOKI"
                                                placeholder="Badan Eksekutif Mahasiswa [nama OKI]" />
                                        </div>
                                        <div class="form-group">
                                            <label for="acronym">Acronym</label>
                                            <input type="text" class="form-control" id="acronym"
                                                placeholder="BEM [acronym OKI]" />
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Example textarea</label>
                                            <textarea class="form-control" id="description" rows="3"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem"
                            src="/assets-dashboard/img/undraw_posting_photo.svg" alt="..." />
                    </div>
                    <h3>{{ $detailOki->nama_oki }} ({{ $detailOki->akronim_oki }})</h3>
                    <p>{{ $detailOki->pengertian }}</p>
                    <p>{{ $detailOki->sejarah }}</p>
                    <p>{{ $detailOki->benefit }}</p>
                    <ul>
                        <li><span>Aut eum totam accusantium voluptatem.</span></li>
                        <li><span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                        <li><span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                </div>
            </div>

            <!-- DPM's Activity -->
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-start mb-4">
                <h1 class="h3 mb-0 mx-4 text-gray-800">{{ $detailOki->akronim_oki }}'s Activity</h1>
                <i class="fas fa-solid fa-chart-line fa-2x text-gray-300"></i>
            </div>
            <div class="row">
                @foreach ($kegiatanData as $kegiatan)
                <div class="col-lg-4">
                     <!-- Dropdown Card Example -->
                     <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $kegiatan->nama_kegiatan }}</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Action:</div>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Archive</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class=" text-primary text-gray-800 mb-2">
                                {{ $kegiatan->deskripsi_kegiatan }}</div>
                            <div class="text-xs font-weight-bold text-primary">
                                Attended By: {{ $kegiatan->peserta }}</div>
                            <div class="text-xs font-weight-bold text-primary">
                                {{ $kegiatan->periode }} activities</div>
                            <div class="text-xs font-weight-bold text-primary mt-2">
                                {{ $kegiatan->waktu_pelaksanaan }} - {{ $kegiatan->tempat_pelaksanaan }}</div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>

            <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-sm-flex align-items-center justify-content-start mb-4">
                        <h5 class="m-0 mx-4 font-weight-bold text-primary">DPM's Member</h5>
                        <i class="fas fa-solid fa-users fa-2x text-gray-300"></i>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Batch</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Batch</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>234172999</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>2023</td>
                                        <td>
                                            <span class="badge badge-pill badge-success">Active</span>
                                        </td>
                                        <td class="d-flex justify-content-around">
                                            <a href="#" class="btn btn-info btn-circle">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            <a href="#" class="btn btn-warning btn-circle">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>234172999</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>2018</td>
                                        <td>
                                            <span class="badge badge-pill badge-secondary">Alumnus</span>
                                        </td>
                                        <td class="d-flex justify-content-around">
                                            <a href="#" class="btn btn-info btn-circle">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            <a href="#" class="btn btn-warning btn-circle">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
