@extends('../layouts/admin_layout')

@section('content')
    <div class="tools" style="padding: 10px;">
        <button type="button" onclick="gotoUrl('/admin/page')"  class="btn btn-sm btn-success" title="Add Page"><span class="mdi mdi-plus"></span></button>
    </div>
    <table class="table table-hover table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $k=>$page)
                <tr>
                    <td>{{ ++$k }}</td>
                    <td>{{  $page->title }}</td>
                    <td>
                        <button type="button" title="Delete" onclick="gotoUrl('/admin/page/{{ $page->id }}/delete')" class="btn btn-sm btn-danger"><span class="mdi mdi-delete"></span></button>
                        <button type="button" title="Edit" onclick="gotoUrl('/admin/page/{{ $page->id }}')" class="btn btn-sm btn-info"><span class="mdi mdi-pencil"></span></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
