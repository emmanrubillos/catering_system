<!-- Edit Modal -->
<div class="modal fade" id="editPackageModal{{ $package->id }}" tabindex="-1" role="dialog" aria-labelledby="editPackageModalLabel{{ $package->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPackageModalLabel">Edit Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editPackageForm" action="{{ route('package.update', ['package' => $package->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $package->name }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="Pax" @if($package->type == 'Pax') selected @endif>Pax</option>
                            <option value="Package" @if($package->type == 'Package') selected @endif>Package</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control tinymce-editor" id="description" name="description" rows="3">{{ $package->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">₱</span>
                            </div>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $package->price }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button> <!-- Changed button text to "Update" -->
                    <a href="{{ route('package.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

