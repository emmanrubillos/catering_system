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
                        </div>
                    </div>
                </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                                <i class="fas fa-users"></i>
                                                Event Details
                                            </div>
                                            <div class="col-md-6 col-12 text-right">
                                                <a href="{{ route('event_details.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add New Event</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        <table class="table table-sm table-hover mb-0" id="_event_details-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Event Type</th>
                                                    <th scope="col">Package Type</th>
                                                    <th scope="col">Guest</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($event_details as $event)
                                                <tr>
                                                    <td>{{ $event->id }}</td>
                                                    <td>{{ $event->full_name }}</td>
                                                    <td>{{ $event->event_type }}</td>
                                                    <td>{{ $event->package_type }}</td>
                                                    <td>{{ $event->guest }}</td>
                                                    <td>

                                                        <a href="{{ route('event_details.edit', $event->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                        <form action="{{ route('event_details.destroy', $event->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                        </form>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
