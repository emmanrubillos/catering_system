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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2" style="width: 42px;">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#000000" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
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
                        <thead class="border border-0">
                            <tr class="border border-0">
                                <th class="fw-bold" style="width:20%" scope="col">Action</th>
                                <th class="fw-bold" style="width:30%" scope="col">Name</th>
                                <th class="fw-bold" scope="col">Group</th>
                            </tr>
                        </thead>
                        <tbody class="border border-0">
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