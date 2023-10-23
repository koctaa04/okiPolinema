@extends('layouts.layouts-dashboard')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h5 class="mt-2 font-weight-bold text-primary">Badan Eksekutif Mahasiswa (BEM)</h5>
                    <!-- Button trigger modal -->
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editBiodataOKI">Edit</button>
                    <!-- Modal -->
                    <div class="modal  fade" id="editBiodataOKI" tabindex="-1" aria-labelledby="editBiodataOKILabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editBiodataOKILabel">Edit Biodata BEM</h5>
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
                            src="/dashboard/img/undraw_posting_photo.svg" alt="..." />
                    </div>
                    <h3>Badan Eksekutif Mahasiswa (BEM)</h3>
                    <p>
                        [Deskripsi paragraf 1 OKI] Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quod
                        voluptatibus atque magnam iste quae doloribus officiis, expedita dolore error illo, esse voluptatem
                        alias doloremque soluta aut
                        eum hic eaque?
                    </p>
                    <p>
                        [Deskripsi paragraf 2 OKI => Sejarh] Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ducimus aliquam placeat quod illum tenetur eaque amet saepe. Id sunt dolor odio. Dolorum dolores
                        harum laboriosam ut dolore
                        praesentium nobis corrupti.
                    </p>
                    <p>
                        [Deskripsi paragraf 2 OKI => Manfaat/Keunggulan] Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Ducimus aliquam placeat quod illum tenetur eaque amet saepe. Id sunt dolor odio. Dolorum
                        dolores harum laboriosam
                        ut dolore praesentium nobis corrupti.
                    </p>
                    <ul>
                        <li><span>Aut eum totam accusantium voluptatem.</span></li>
                        <li><span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                        <li><span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">BEM's Member</h5>
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
