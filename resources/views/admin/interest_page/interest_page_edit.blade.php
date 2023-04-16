@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #b70000;
            font-weight: 700px;
        }
    </style>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Interest Page </h4>

                            <form method="post" action="{{ route('update.interest.page') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $interest->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Interest Category
                                        Name</label>
                                    <div class="col-sm-10">
                                        <select name="interest_category_id" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">Open this select menu</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ $cat->id == $interest->interest_category_id ? 'selected' : '' }}>
                                                    {{ $cat->interest_category }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Interest Title</label>
                                    <div class="col-sm-10">
                                        <input name="interest_title" value="{{ $interest->interest_title }}" class="form-control"
                                            type="text" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Interest Tag</label>
                                    <div class="col-sm-10">
                                        <input name="interest_tag" value="{{ $interest->interest_tag }}" class="form-control"
                                            type="text" data-role="tagsinput">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Interest Summary</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="interest_summary">
                                          {{ $interest->interest_summary }}
                                        </textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Reference URL</label>
                                    <div class="col-sm-10">
                                        <input name="text_url" class="form-control" type="url" placeholder="https://example.com">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Update Blog Data">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
