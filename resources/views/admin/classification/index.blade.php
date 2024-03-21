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
                                <img width="42" height="42" src="https://img.icons8.com/glyph-neue/64/restaurant-pickup.png" 
                                alt="restaurant-pickup"/>
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
                                <th class="fw-bold" scope="col">Name</th>
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

                                @include('admin.classification.partials.script')
                                @include('admin.classification.partials._add_classification_modal')
                                @include('admin.classification.partials._edit_classification_modal')
                            </tr>
                            @endforeach

                            <tr>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script> --}}

<script>
    new DataTable('#classifications-table');
</script>


@endsection