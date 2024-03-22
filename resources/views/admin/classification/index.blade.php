@extends('admin.partials.navbar')
@extends('admin.partials.sidebar')
@section('content')
<div class="container-fluid">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="card col-sm-12 mt-5">
                        <div class="card-header breadcrumb-item active d-flex justify-content-between">
                            <div class="d-flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 42px;">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#000000" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
                                </svg>
                                <h3 class="mt-2 ml-2 text-dark fw-bold">Classifications</h3>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-success fw-bold" data-toggle="modal" data-target="#addClassificationModal">
                                    <i class="fas fa-plus"></i> Add Classification
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    <table class="table table-sm table-hover mb-0"  id="classifications-table"  style="overflow-x: scroll; max-width: 100%;" >
                        <thead class="border-0">
                            <tr class="border-0">
                                <th class="fw-bold" style="width:20%" scope="col">Action</th>
                                <th class="fw-bold" style="width:30%" scope="col">Name</th>
                                <th class="fw-bold" scope="col">Group</th>
                            </tr>
                        </thead>
                        <tbody class="border">
                            @foreach($classifications as $classification)
                            <tr>
                                <td>
                                    
                                    <a href="{{ route('classification.edit', ['classification' => $classification->id]) }}" class="btn btn-primary btn-sm edit-classification-btn"  
                                    data-toggle="modal" data-target="#editClassificationModal{{ $classification->id }}"><i class="fas fa-edit"></i></a>

                                    <form action="{{ route('classification.destroy', $classification->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="confirmDeleteClassification( {{ $classification->id }} )">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                </td>
                                
                                <td class="fw-bold">
                                    {{ $classification->name }}
                                </td>

                                <td class="fw-bold">
                                    <span class="badge badge-secondary">
                                        {{ $classification->group }}
                                    </span>
                                </td>


                                @include('admin.classification.partials._edit_classification_modal')
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script>
    new DataTable('#classifications-table');
</script>

@include('admin.classification.partials._add_classification_modal')
@include('admin.classification.partials.script')
@endsection