@extends('../layouts/admin_layout')
@section('content')
<div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<form action="" method="post" >
    {{ csrf_field() }}

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $contact->email }}" />
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $contact->address }}" />
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-success"><span class="mdi mdi-save"></span> Save</button>
    </div>
</form>
@endsection