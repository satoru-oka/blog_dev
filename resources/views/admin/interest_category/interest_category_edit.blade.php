@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Interest Category Page</h4><br>

                            <form method="post" action="{{ route('update.interest.category', $interestcategory->id) }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Interest Category
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input name="interest_category" class="form-control" type="text"
                                            value="{{ $interestcategory->interest_category }}" id="example-text-input">
                                        @error('interest_category')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Update Interest Category">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
@endsection
