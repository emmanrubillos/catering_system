
<script>
    $(document).ready( function () {
        $('#packages-table').DataTable({
            responsive: true,
            initComplete: function(){
                $('.dataTables_filter ').append('<a href="{{ route("packages.create") }}" class="btn btn-sm btn-primary ml-3">New User</a>');
            },
            processing: true,
            serverSide: true,
            ajax: '{{ route('packages.index') }}',
            columns: [
                {   data: 'DT_RowIndex',
                    name: 'index'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'type',
                    name: 'type'
                },

                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },

            ],
            "order": [[ 3, 'asc']]

        });
    } );
    </script>
