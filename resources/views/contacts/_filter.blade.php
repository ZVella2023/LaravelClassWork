<div class="row">
    <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <select class="custom-select">
                            <option value="" selected>All Companies</option>
                            @foreach ($companies as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>