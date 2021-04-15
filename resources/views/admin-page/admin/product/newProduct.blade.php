@extends('admin-page.admin.admin')
@section('table')

    <div style="margin-left: 300px;width: 1000px;" class="col-lg-9">
        <form action="/addProduct" enctype="multipart/form-data" method="post">
            @csrf
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Product's Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName">
                </div>
            </div>

{{--            <div class="form-group row">--}}
{{--                <label for="inputImage" class="col-sm-2 col-form-label">Image</label>--}}
{{--                <div class="col-sm-10">--}}
{{--                    <input type="file" name="image" class="form-control" required="true">--}}
{{--                </div>--}}
{{--                <br/>--}}
{{--            </div>--}}

            {{--JS Preview Image Before Upload--}}
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#blah').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            {{--form image--}}
                        <div class="form-group row">
                            <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input id="image" type="file" name="image" class="form-control" required="true">
                                <img style="width: 100px;height: 100px" id="blah" src="" alt="">
                            </div>
                            <br/>
                        </div>
            <script>
                $("#image").change(function() {
                    readURL(this);
                });
            </script>
            {{--Het Script--}}

            <div class="form-group row">
                <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" id="inputDescription" ">
                </div>
            </div>


            <div class="form-group row">
                <label for="inputCost" class="col-sm-2 col-form-label">Cost</label>
                <div class="col-sm-10">
                    <input type="number" name="cost" class="form-control" id="inputCost" placeholder=".000VND">
                </div>
            </div>


            <div class="form-group row">
                <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
                <div class="col-sm-10">
                    <input type="number" name="class" class="form-control" id="inputClass">
                </div>
            </div>

            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-warning">Add</button>
        </form>
    </div>



@endsection
