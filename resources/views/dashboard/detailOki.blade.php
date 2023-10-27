@extends('layouts.layouts-dashboard')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="mb-4">
            <!-- achievement -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-start mb-4">
                <h1 class="h3 mb-0 mx-4 text-gray-800">{{ $detailOki->akronim_oki }}'s Achievement</h1>
                <i class="fas fa-solid fa-trophy fa-2x text-gray-300"></i>
            </div>
            <div class="row mb-3">
                @if ($prestasiData->isEmpty()) 
                    <div class="col-12">
                        <div class="alert alert-secondary" role="alert">
                            Data Prestasi Does not exist!!
                        </div>
                    </div>
                @endif
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
                                {{ $prestasi->peserta_lomba }}
                            </div>
                            <div class="text-xs font-weight-bold text-primary mt-2">
                                {{ $prestasi->waktu_pelaksanaan }} - {{ $prestasi->tempat_pelaksanaan }}
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <!-- Button trigger modal -->
                                    <button class="btn btn-sm btn-warning btn-block" data-toggle="modal" data-target="#editPrestasiOKI">Edit</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal  fade" id="editPrestasiOKI" tabindex="-1" aria-labelledby="editPrestasiOKILabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editPrestasiOKILabel">Edit {{ $detailOki->akronim_oki }}'s Prestasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" action="/dashboard/editPrestasi/{{ $prestasi->id }}">
                                            @csrf
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col form-group">
                                                        <label for="nama_prestasi">Nama Prestasi</label>
                                                        <input type="text" class="form-control" name="nama_prestasi" id="nama_prestasi"
                                                            placeholder="Example : Melukis Open 2023" value="{{ $prestasi->nama_prestasi }}"/>
                                                        </div>
                                                        <div class="col form-group">
                                                            <label for="juara">Juara Ke</label>
                                                            <input type="text" class="form-control" name="juara" id="juara"
                                                                placeholder="Example : 1st Winner" value="{{ $prestasi->juara }}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deskripsi_lomba">Deskripsi Lomba</label>
                                                        <textarea class="form-control" name="deskripsi_lomba" id="deskripsi_lomba" rows="3">{{ $prestasi->deskripsi_lomba }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="peserta_lomba">Peserta Lomba</label>
                                                        <textarea class="form-control" name="peserta_lomba" id="peserta_lomba" rows="3">{{ $prestasi->peserta_lomba }}</textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col form-group">
                                                            <label for="waktu_pelaksanaan">waktu Pelaksanaan</label>
                                                            <input type="date" class="form-control" name="waktu_pelaksanaan" id="waktu_pelaksanaan" value="{{ $prestasi->waktu_pelaksanaan }}" />
                                                        </div>
                                                        <div class="col form-group">
                                                            <label for="tempat_pelaksanaan">Tempat Pelaksanaan</label>
                                                            <input type="text" class="form-control" name="tempat_pelaksanaan" id="tempat_pelaksanaan"
                                                                placeholder="Example : Surabaya" value="{{ $prestasi->tempat_pelaksanaan }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
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
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editProfileOKI">Edit</button>
                    <!-- Modal -->
                    <div class="modal  fade" id="editProfileOKI" tabindex="-1" aria-labelledby="editProfileOKILabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProfileOKILabel">Edit {{ $detailOki->akronim_oki }}'s Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="{{ route('dashboard.editProfileOki', $detailOki->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                        <input type="hidden" name="slug" value="{{ $detailOki->slug }}">
                                        <div class="form-group">
                                            <label for="nama_oki">Nama OKI</label>
                                            <input type="text" class="form-control" name="nama_oki" id="nama_oki"
                                                placeholder="Example : Badan Eksekutif Mahasiswa" value="{{ $detailOki->nama_oki }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="akronim_oki">Akronim OKI</label>
                                            <input type="text" class="form-control" name="akronim_oki" id="akronim_oki"
                                                placeholder="Example : BEM" value="{{ $detailOki->akronim_oki }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="pengertian">Pengertian OKI</label>
                                            <textarea class="form-control" name="pengertian" id="pengertian" rows="3">{{ $detailOki->pengertian }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="sejarah">Sejarah OKI</label>
                                            <textarea class="form-control" name="sejarah" id="sejarah" rows="3">{{ $detailOki->sejarah }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="benefit">Benefit</label>
                                                <textarea class="form-control" name="benefit" id="benefit" rows="3">{{ $detailOki->benefit }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="info_terkini">Info terkini</label>
                                            <input type="text" class="form-control" name="info_terkini" id="info_terkini"
                                                placeholder="Example : OPEN RECRUITMENT ON JULY 2023" value="{{ $detailOki->info_terkini }}" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
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
                    <p>Sejarah : {{ $detailOki->sejarah }}</p>
                    <p>Benefit : {{ $detailOki->benefit }}</p>
                    <ul>
                        <li><span>Aut eum totam accusantium voluptatem.</span></li>
                        <li><span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                        <li><span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                    <div class="alert alert-info" role="alert">
                        Information : "{{ $detailOki->info_terkini }}"
                    </div>
                </div>
            </div>

            <!-- Activity -->
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-start mb-4">
                <h1 class="h3 mb-0 mx-4 text-gray-800">{{ $detailOki->akronim_oki }}'s Activity</h1>
                <i class="fas fa-solid fa-chart-line fa-2x text-gray-300"></i>
            </div>
            <div class="row mb-3">
                @if ($kegiatanData->isEmpty()) 
                    <div class="col-12">
                        <div class="alert alert-secondary" role="alert">
                            Data Prestasi Does not exist!!
                        </div>
                    </div>
                @endif
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
                        <h5 class="m-0 mx-4 font-weight-bold text-primary">{{ $detailOki->akronim_oki }}'s Member</h5>
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
                                    @foreach ($memberData as $member)
                                    <tr>
                                        <td>{{ $member->nim }}</td>
                                        <td>{{ $member->nickname }}</td>
                                        <td>{{ $member->jabatan_oki }}</td>
                                        <td>{{ $member->angkatan }}</td>
                                        <td>
                                            <span class="badge badge-pill badge-success">Active</span>
                                        </td>
                                        <td class="d-flex justify-content-around">
                                            <!-- Button Information -->
                                            <button data-toggle="modal" data-target="#infoMember" class="btn btn-info btn-circle">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="infoMember" tabindex="-1" aria-labelledby="infoMemberLabel">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="infoMemberLabel">Detail Information of {{ $member->fullname }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="p-2 table table-striped table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>NIM</td>
                                                                        <td>{{ $member->nim }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Born Date</td>
                                                                        <td>{{ $member->born_date }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jurusan</td>
                                                                        <td>{{ $member->jurusan }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Program Studi</td>
                                                                        <td>{{ $member->program_studi }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Asal</td>
                                                                        <td>{{ $member->asal }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Angkatan</td>
                                                                        <td>{{ $member->angkatan }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jabatan</td>
                                                                        <td>{{ $member->jabatan_oki }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tahun Jabatan</td>
                                                                        <td>2050</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            <!-- Button Edit -->
                                            <button data-toggle="modal" data-target="#editMemberOki" class="btn btn-warning btn-circle">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal  fade" id="editMemberOki" tabindex="-1" aria-labelledby="editMemberOkiLabel"
                                            aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editMemberOkiLabel">Edit {{ $detailOki->akronim_oki }}'s Member</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="/dashboard/editMember/{{ $member->nim }}">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="row mb-3">
                                                                <div class="col-6">
                                                                    <label for="nim">NIM </label>
                                                                    <input type="text" class="form-control" name="nim" id="nim"
                                                                        value="{{ $member->nim }}" disabled/>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="fullname">FullName</label>
                                                                    <input type="text" class="form-control" name="fullname" id="fullname"
                                                                        value="{{ $member->fullname }}" disabled/>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-6">
                                                                    <label for="jabatan_oki">Jabatan </label>
                                                                    <input type="text" class="form-control" name="jabatan_oki" id="jabatan_oki"
                                                                        placeholder="Ketua Umum" value="{{ $member->jabatan_oki }}"/>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="tahun_jabat">Tahun Jabatan</label>
                                                                    <input type="text" class="form-control" name="tahun_jabat" id="tahun_jabat"
                                                                        placeholder="2023" value="2050"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <button href="#" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
