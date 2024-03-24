<!-- Modal -->
<div class="modal fade" id="editInclusionModal{{ $inclusion->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editInclusionModal{{ $inclusion->id }} Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="iconmodal mr-3"
                    style="width: 42px;">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                        d="M308.5 135.3c7.1-6.3 9.9-16.2 6.2-25c-2.3-5.3-4.8-10.5-7.6-15.5L304 89.4c-3-5-6.3-9.9-9.8-14.6c-5.7-7.6-15.7-10.1-24.7-7.1l-28.2 9.3c-10.7-8.8-23-16-36.2-20.9L199 27.1c-1.9-9.3-9.1-16.7-18.5-17.8C173.9 8.4 167.2 8 160.4 8h-.7c-6.8 0-13.5 .4-20.1 1.2c-9.4 1.1-16.6 8.6-18.5 17.8L115 56.1c-13.3 5-25.5 12.1-36.2 20.9L50.5 67.8c-9-3-19-.5-24.7 7.1c-3.5 4.7-6.8 9.6-9.9 14.6l-3 5.3c-2.8 5-5.3 10.2-7.6 15.6c-3.7 8.7-.9 18.6 6.2 25l22.2 19.8C32.6 161.9 32 168.9 32 176s.6 14.1 1.7 20.9L11.5 216.7c-7.1 6.3-9.9 16.2-6.2 25c2.3 5.3 4.8 10.5 7.6 15.6l3 5.2c3 5.1 6.3 9.9 9.9 14.6c5.7 7.6 15.7 10.1 24.7 7.1l28.2-9.3c10.7 8.8 23 16 36.2 20.9l6.1 29.1c1.9 9.3 9.1 16.7 18.5 17.8c6.7 .8 13.5 1.2 20.4 1.2s13.7-.4 20.4-1.2c9.4-1.1 16.6-8.6 18.5-17.8l6.1-29.1c13.3-5 25.5-12.1 36.2-20.9l28.2 9.3c9 3 19 .5 24.7-7.1c3.5-4.7 6.8-9.5 9.8-14.6l3.1-5.4c2.8-5 5.3-10.2 7.6-15.5c3.7-8.7 .9-18.6-6.2-25l-22.2-19.8c1.1-6.8 1.7-13.8 1.7-20.9s-.6-14.1-1.7-20.9l22.2-19.8zM112 176a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM504.7 500.5c6.3 7.1 16.2 9.9 25 6.2c5.3-2.3 10.5-4.8 15.5-7.6l5.4-3.1c5-3 9.9-6.3 14.6-9.8c7.6-5.7 10.1-15.7 7.1-24.7l-9.3-28.2c8.8-10.7 16-23 20.9-36.2l29.1-6.1c9.3-1.9 16.7-9.1 17.8-18.5c.8-6.7 1.2-13.5 1.2-20.4s-.4-13.7-1.2-20.4c-1.1-9.4-8.6-16.6-17.8-18.5L583.9 307c-5-13.3-12.1-25.5-20.9-36.2l9.3-28.2c3-9 .5-19-7.1-24.7c-4.7-3.5-9.6-6.8-14.6-9.9l-5.3-3c-5-2.8-10.2-5.3-15.6-7.6c-8.7-3.7-18.6-.9-25 6.2l-19.8 22.2c-6.8-1.1-13.8-1.7-20.9-1.7s-14.1 .6-20.9 1.7l-19.8-22.2c-6.3-7.1-16.2-9.9-25-6.2c-5.3 2.3-10.5 4.8-15.6 7.6l-5.2 3c-5.1 3-9.9 6.3-14.6 9.9c-7.6 5.7-10.1 15.7-7.1 24.7l9.3 28.2c-8.8 10.7-16 23-20.9 36.2L315.1 313c-9.3 1.9-16.7 9.1-17.8 18.5c-.8 6.7-1.2 13.5-1.2 20.4s.4 13.7 1.2 20.4c1.1 9.4 8.6 16.6 17.8 18.5l29.1 6.1c5 13.3 12.1 25.5 20.9 36.2l-9.3 28.2c-3 9-.5 19 7.1 24.7c4.7 3.5 9.5 6.8 14.6 9.8l5.4 3.1c5 2.8 10.2 5.3 15.5 7.6c8.7 3.7 18.6 .9 25-6.2l19.8-22.2c6.8 1.1 13.8 1.7 20.9 1.7s14.1-.6 20.9-1.7l19.8 22.2zM464 304a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                </svg>
                <h5 class="modal-title fw-bold" id="addUserModalLabel">Edit Inclusion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="iconmodal">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ffffff"
                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm79 143c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form id="editInclusionForm" action="{{ route('inclusion.update', $inclusion->id) }}" method="POST"
                    id="inclusion-update-form">
                    @csrf
                    @method ('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bold bg-primary text-white px-4 py-1 rounded"
                                    for="name">Name</label>
                                <input type="text" class="form-control" id="edit-inclusion-name" name="name"
                                    placeholder="Incluson Name" value="{{ $inclusion->name }}">
                            </div>
                            <div class="form-group">
                                <span class="bg-primary pl-3 pr-4 py-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 20px;"
                                        class="mr-2">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                    </svg>
                                    <label class="fw-bold text-white" for="name">Classification Type</label>
                                </span>

                                <input type="text" class="form-control mt-1" id="search-edit-classification-type"
                                    name="search" placeholder="Classification Type">
                            </div>

                            <div class="col-md-12 mb-4 overflow-auto edit-scroll" style="height:200px;">
                                <div class="form-group">
                                    <label class="fw-bold bg-primary text-white px- 4 py-1 rounded"
                                        for="classification_id">Types</label>
                                    <div>
                                        @foreach ($classifications as $classification)
                                            <div class="form-check edit-form-check">
                                                @php
                                                    // dd($inclusion->inclusion_classification_ids, $classification->id);
                                                @endphp
                                                @if (is_array($inclusion->inclusion_classification_ids) && in_array($classification->id, $inclusion->inclusion_classification_ids))
                                                <input checked class="classification-checkbox form-check-input" type="checkbox"
                                                id="edit-classification-check-{{ $classification->id }}"
                                                name="edit-classification_id[]" value="{{ $classification->id }}">    
                                                @else
                                                <input class="classification-checkbox form-check-input" type="checkbox"
                                                id="edit-classification-check-{{ $classification->id }}"
                                                name="edit-classification_id[]" value="{{ $classification->id }}">
                                                @endif
                                                <label class="form-check-label edit-check fw-bold"
                                                    for="edit-classification_id{{ $classification->id }}">
                                                    {{ $classification->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bold bg-primary text-white px-4 py-1 rounded"
                                    for="description">Description</label>
                                <textarea type="text" class="form-control" placeholder="Enter a description ...." name="description"
                                    id="edit-inclusion-description" rows="5">{{ $inclusion->description }}</textarea>
                            </div>
                            
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fw-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary fw-bold" id="save-inclusion-btn">Save</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>


{{-- <script>
    console.log($);
</script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{ asset('assets/plugins/links/lodash.min.js') }}"></script>
<script>
    // Function to filter classifications based on input text
    function filterClassifications() {
        var input, filter, classifications, i, txtValue;
        input = document.getElementById("search-edit-classification-type");
        filter = input.value.toUpperCase();
        classifications = document.querySelectorAll(".edit-form-check");
        classifications.forEach(function(classification) {
            txtValue = classification.textContent || classification.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                classification.style.display = "";
            } else {
                classification.style.display = "none";
            }
        });
    }

    // Debounce the filter function
    var debouncedFilter = _.debounce(filterClassifications, 100);

    // Add event listener to call debounced filter function on input change
    document.getElementById("search-edit-classification-type").addEventListener("input", debouncedFilter);
</script>
