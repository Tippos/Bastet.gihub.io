@extends('admin.admin')
@section('table')
    <div style="margin: auto;width: 1000px;" class="col-lg-9">
        <form action="/upProduct/{{$p->id}}" method="post">
            @csrf
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Product's Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputImage" class="col-sm-2 col-form-label">Image Address</label>
                <div class="col-sm-10">
                    <input type="text" name="image" class="form-control" id="inputImage">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" id="inputDescription">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputCost" class="col-sm-2 col-form-label">Cost</label>
                <div class="col-sm-10">
                    <input type="number" name="cost" class="form-control" id="inputCost">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
                <div class="col-sm-10">
                    <input type="number" name="class" class="form-control" id="inputClass">
                </div>
            </div>

            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>



@endsection
