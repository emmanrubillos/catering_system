<!-- Show Inclusion Description Modal -->
<div class="modal fade" id="showInclusionDescriptionModal{{ $inclusion->id }}" tabindex="-1" role="dialog" aria-labelledby="showInclusionDescriptionModal{{ $inclusion->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h1 class="fw-bold text-white">
                    {{ $inclusion->name }}
                </h1>
            </div>
            <div class="modal-body">
                <!-- Show Inclusion Description -->

                    <div class="col">
                        <label class="fw-bold bg-warning text-white px-4 py-1 rounded" for="name">Description</label>
                        <p class="fw-bold">
                            @if(!empty($inclusion->description))
                                {{ $inclusion->description }}
                            @else
                                No description added
                            @endif
                        </p>
                    </div>

                <div class="modal-footer">
                    <button type="button" class="fw-bold btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>


