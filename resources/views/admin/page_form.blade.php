@extends('../layouts/admin_layout')
@section('content')
<div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}" />
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5">{{ $page->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image"  />
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"><span class="mdi mdi-save"></span> Save</button>
    </div>
</form>
@endsection
