@extends('admin.partials.navbar')
@extends('admin.partials.sidebar')

@section('content')
<div class="container-fluid">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h4><i class="fas fa-user"></i> Add New Event</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('event_details.store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="event_name">Event Name</label>
                                                        <input type="text" class="form-control" id="event_name" name="event_name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="event_date">Event Date</label>
                                                        <input type="date" class="form-control" id="event_date" name="event_date" required>
                                                    </div>
                                                    <!-- Add more fields as needed -->
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                                                <a href="{{ route('event_details.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
                                            </div>
                                        </form>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="p-0 m-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
