@extends('layouts.MasterTemplate')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Laboratory Use
                                </li>
                            </ol>
                        </div>
                    </div>
                    <h3 class="content-header-title mb-0">Laboratory Use</h3>
                </div>

            </div>
            <div class="content-body">
                <section id="html5">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Laboratory Use</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <section id="modal-themes">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">

                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <div class="row my-2">
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <!-- Button trigger modal -->
                                                                            <button type="button"
                                                                                class="btn btn-outline-primary"
                                                                                data-toggle="modal" data-backdrop="false"
                                                                                data-target="#primary">
                                                                                Tambah Data Laboratory Use
                                                                            </button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <table class="table table-striped table-bordered dataex-html5-export">
                                            <thead>
                                                <tr>
                                                    <th>Nama Dose</th>
                                                    <th>Mata Pelajaran</th>
                                                    <th>Kelas</th>
                                                    <th>Jam Masuk Ruangan</th>
                                                    <th>Jam Keluar Ruangan</th>
                                                    <th>aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if ($LaboratoryUses->isNotEmpty())
                                                @foreach ($LaboratoryUses as $LaboratoryUse)
                                                    <tr>
                                                        <td>{{ $LaboratoryUse->teacher->name ?? 'None' }}</td>
                                                        <td>{{ $LaboratoryUse->study->name ?? 'None' }}</td>
                                                        <td>{{ $LaboratoryUse->classroom->name ?? 'None' }}</td>
                                                        <td>{{ $LaboratoryUse->entry_time }}</td>
                                                        <td>{{ $LaboratoryUse->close_time }}</td>
                                                        <td class="text-center">

                                                            {{-- <a href="{{ route('LaboratoryUse.show', $LaboratoryUse->id) }}"
                                                                class="btn btn-sm btn-dark">SHOW</a> --}}
                                                            <button data-toggle="modal" data-backdrop="false"
                                                                data-target="#primaryedit" class="btn btn-sm btn-primary"
                                                                data-id={{ $LaboratoryUse->id }}>
                                                                EDIT |
                                                            </button>

                                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                                action="{{ route('LaboratoryUse.destroy', $LaboratoryUse->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger">HAPUS</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                    <div class="alert alert-danger">
                                                            Data Products belum ada.
                                                        </div>
                                                @endif
                                                </tr>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                   <th>Nama Dose</th>
                                                    <th>Mata Pelajaran</th>
                                                    <th>Kelas</th>
                                                    <th>Jam Masuk Ruangan</th>
                                                    <th>Jam Keluar Ruangan</th>
                                                    <th>aksi</th>

                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel8" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary white">
                                    <h4 class="modal-title" id="myModalLabel8">Tambah Data Laboratory Use</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('LaboratoryUse.store') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                {{-- <h4 class="card-title" id="basic-layout-form">Project Info</h4> --}}
                                                <a class="heading-elements-toggle"><i
                                                        class="fa fa-ellipsis-v font-medium-3"></i></a>
                                            </div>
                                            <div class="card-content collapse show">
                                                <div class="card-body">
                                                    {{-- <form class="form"> --}}
                                                    <div class="form-body">
                                                        {{-- <h4 class="form-section"><i class="ft-user"></i>
                                                        </h4> --}}
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">NIP
                                                                        </label>
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nip Laboratory Use"
                                                                        name="nip">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">nama Laboratory Use
                                                                        </label>
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nama Laboratory Use"
                                                                        name="name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-actions">
                                                            <button type="button" class="btn btn-warning mr-1">
                                                                <i class="ft-x"></i> Cancel
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="fa fa-check-square-o"></i> Save
                                                            </button>
                                                        </div> --}}
                                                    {{-- </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn grey btn-outline-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-primary">Save
                                            changes</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    {{-- /modal --}}

                    <!-- Modal edit -->
                    <div class="modal fade text-left" id="primaryedit" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel8" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary white">
                                    <h4 class="modal-title" id="myModalLabel8">Edit Data Laboratory Usen</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @if ($LaboratoryUses->isNotEmpty()) 
                                <form action="{{ route('LaboratoryUse.update', $LaboratoryUse->id) }}" method="post">
                                 @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                {{-- <h4 class="card-title" id="basic-layout-form">Project Info</h4> --}}
                                                <a class="heading-elements-toggle"><i
                                                        class="fa fa-ellipsis-v font-medium-3"></i></a>
                                            </div>
                                            <div class="card-content collapse show">
                                                <div class="card-body">
                                                    {{-- <form class="form"> --}}
                                                    <div class="form-body">
                                                        {{-- <h4 class="form-section"><i class="ft-user"></i>
                                                        </h4> --}}
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">NIP
                                                                        </label>
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nip Laboratory Use"
                                                                        name="nip"
                                                                        value="{{ $LaboratoryUse->nip }}">
                                                                </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nama Laboratory Use"
                                                                        value="{{ $LaboratoryUse->name }}" name="name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-actions">
                                                            <button type="button" class="btn btn-warning mr-1">
                                                                <i class="ft-x"></i> Cancel
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="fa fa-check-square-o"></i> Save
                                                            </button>
                                                        </div> --}}
                                                    {{-- </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn grey btn-outline-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-primary">Save
                                            changes</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                                @else
                                <form action="" method="post">
                                 @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                {{-- <h4 class="card-title" id="basic-layout-form">Project Info</h4> --}}
                                                <a class="heading-elements-toggle"><i
                                                        class="fa fa-ellipsis-v font-medium-3"></i></a>
                                            </div>
                                            <div class="card-content collapse show">
                                                <div class="card-body">
                                                    {{-- <form class="form"> --}}
                                                    <div class="form-body">
                                                        {{-- <h4 class="form-section"><i class="ft-user"></i>
                                                        </h4> --}}
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">nama Mata
                                                                        Pelajaran</label>
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nama Laboratory Use"
                                                                        value="" name="name" hidden>
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nama Laboratory Use"
                                                                        value="" name="name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-actions">
                                                            <button type="button" class="btn btn-warning mr-1">
                                                                <i class="ft-x"></i> Cancel
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="fa fa-check-square-o"></i> Save
                                                            </button>
                                                        </div> --}}
                                                    {{-- </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn grey btn-outline-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-primary">Save
                                            changes</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                                @endif
                                   
                    {{-- /modal edit --}}




                </section>
                <!--/ HTML5 export buttons table -->
            </div>
        </div>
    </div>
@endsection
