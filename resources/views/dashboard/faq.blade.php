@extends('layouts.layouts-dashboard')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h5 class="mt-2 font-weight-bold text-primary">Frequently Asked Questions (FAQ)</h5>
                    
                    <!-- Modal Edit FAQ -->
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
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0 d-flex justify-content-between align-items-center">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                              </button>
                              <button class="btn btn-primary" data-toggle="modal" data-target="#editBiodataOKI">Edit</button>
                            </h2>
                          </div>
                      
                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                            </div>
                          </div>
                        </div>
                      
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0 d-flex justify-content-between align-items-center">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                              </button>
                              <button class="btn btn-primary" data-toggle="modal" data-target="#editBiodataOKI">Edit</button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              Some placeholder content for the second accordion panel. This panel is hidden by default.
                            </div>
                          </div>
                        </div>
                      
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0 d-flex justify-content-between align-items-center">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                              </button>
                              <button class="btn btn-primary" data-toggle="modal" data-target="#editBiodataOKI">Edit</button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                            </div>
                          </div>
                        </div>
                      </div>
                      
                </div>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
