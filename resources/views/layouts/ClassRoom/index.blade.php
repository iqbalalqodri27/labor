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
                                <li class="breadcrumb-item active">Kelas
                                </li>
                            </ol>
                        </div>
                    </div>
                    <h3 class="content-header-title mb-0">Kelas</h3>
                </div>

            </div>
            <div class="content-body">
                <section id="html5">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Kelas</h4>
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
                                                                                Tambah Data Kelas
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
                                                    <th>Name</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if ($classrooms->isNotEmpty())
                                                @foreach ($classrooms as $classroom)
                                                    <tr>
                                                        <td>{{ $classroom->name }}</td>
                                                        <td class="text-center">

                                                            {{-- <a href="{{ route('classroom.show', $classroom->id) }}"
                                                                class="btn btn-sm btn-dark">SHOW</a> --}}
                                                            <button data-toggle="modal" data-backdrop="false"
                                                                data-target="#primaryedit" class="btn btn-sm btn-primary"
                                                                data-id={{ $classroom->id }}>
                                                                EDIT |
                                                            </button>

                                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                                action="{{ route('classroom.destroy', $classroom->id) }}"
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
                                                    <th>Name</th>

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
                                    <h4 class="modal-title" id="myModalLabel8">Tambah Data Kelas</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('classroom.store') }}" method="post">
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
                                                                    <label for="projectinput1">nama Mata
                                                                        Pelajaran</label>
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nama Kelas"
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
                                    <h4 class="modal-title" id="myModalLabel8">Edit Data Kelasn</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @if ($classrooms->isNotEmpty()) 
                                <form action="{{ route('classroom.update', $classroom->id) }}" method="post">
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
                                                                        placeholder="isi nama Kelas"
                                                                        value="{{ $classroom->id }}" name="name" hidden>
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nama Kelas"
                                                                        value="{{ $classroom->name }}" name="name">
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
                                                                        placeholder="isi nama Kelas"
                                                                        value="" name="name" hidden>
                                                                    <input type="text" id="projectinput1"
                                                                        class="form-control"
                                                                        placeholder="isi nama Kelas"
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
