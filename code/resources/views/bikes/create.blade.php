@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-header bg-primary text-light">Add Bike</div>
        <div class="card-body">
            <form action="{{ route('bikes.store') }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <input
                        id="name"
                        name="name"
                        placeholder="Name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                    />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <select id="category" name="category" class="form-select @error('category') is-invalid @enderror">
                        <option @if(!old('category')) selected @endif disabled class="d-none">Select Category</option>
                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                @if(old('category') == $category->id) selected @endif
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <select id="brand" name="brand" class="form-select @error('brand') is-invalid @enderror">
                        <option @if(!old('brand')) selected @endif disabled class="d-none">Select Brand</option>
                        @foreach($brands as $brand)
                            <option
                                value="{{ $brand->id }}"
                                @if(old('brand') == $brand->id) selected @endif
                            >
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('brand')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <select id="bike_model" name="bike_model" class="form-select d-none @error('bike_model') is-invalid @enderror">
                        <option @if(!old('bike_model')) selected @endif disabled class="d-none">Select Bike Model</option>
                        @foreach($bike_models as $bike_model)
                            <option
                                class="brand-{{ $bike_model->brand }} category-{{ $bike_model->category }}"
                                value="{{ $bike_model->id }}"
                                @if(old('bike_model') == $bike_model->id) selected @endif
                            >
                                {{ $bike_model->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('bike_model')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <select id="gender" name="gender" class="form-select @error('gender') is-invalid @enderror">
                        <option disabled>Select Gender</option>
                        <option @if(old('gender') && old('gender') === 1) selected @endif value="1">Men's Bike</option>
                        <option @if(old('gender') && old('gender') === 0) selected @endif value="0">Women's Bike</option>
                    </select>
                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <select id="wheel_size" name="wheel_size" class="form-select @error('wheel_size') is-invalid @enderror">
                        <option @if(!old('wheel_size')) selected @endif disabled>Select Wheel Size</option>
                        <option @if(old('wheel_size') == 12) selected @endif value="12">12"</option>
                        <option @if(old('wheel_size') == 14) selected @endif value="14">14"</option>
                        <option @if(old('wheel_size') == 16) selected @endif value="16">16"</option>
                        <option @if(old('wheel_size') == 18) selected @endif value="18">18"</option>
                        <option @if(old('wheel_size') == 20) selected @endif value="20">20"</option>
                        <option @if(old('wheel_size') == 24) selected @endif value="24">24"</option>
                    </select>
                    @error('wheel_size')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <input
                        id="description"
                        name="description"
                        placeholder="Description"
                        class="form-control @error('description') is-invalid @enderror"
                        value="{{ old('description') }}"
                    />
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <input
                        id="price"
                        name="price"
                        placeholder="Price"
                        type="number"
                        step="any"
                        class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price') }}"
                    />
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button class="btn btn-primary">Create New Bike</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#category, #brand").change(function() {
            if ($('#category').val() && $('#brand').val()) {
                $('#bike_model').removeClass('d-none');
                $('#bike_model option').each(function(index) {
                    if ($(this).hasClass('category-'+$('#category').val()) && $(this).hasClass('brand-'+$('#brand').val())) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                })
            } else {
                $('#bike_model').addClass('d-none');
            }
        });
    </script>
@endsection