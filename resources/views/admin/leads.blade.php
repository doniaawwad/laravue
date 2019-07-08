@extends('../layouts/admin_layout')

@section('content')
    
    <table class="table table-hover table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $k=>$lead)
                <tr>
                    <td>{{ ++$k }}</td>
                    <td>{{  $lead->name }}</td>
                    <td>{{  $lead->email }}</td>
                    <td>{{  $lead->phone }}</td>
                    <td>{{  $lead->address }}</td>
                    
                </tr>
                <tr>
                    <td style="background: white;text-align: center;padding: 20px;" colspan="5">{{ $lead->notes }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
