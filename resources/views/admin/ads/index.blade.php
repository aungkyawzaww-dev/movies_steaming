@extends('admin.layout.master')

@section( 'content')
    <div class="mb-3 mt-3">
        <a href="{{ route('ads.create') }}" class="btn btn-primary"> Create Ads </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>On/Off</th>
                <th>Ads Type</th>
                <th>Ads Script</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>

            @foreach($ads as $ad)
                <tr>
                    <td>
                        @if($ad->on_off == "on")
                            <span class="badge badge-success">On</span>
                        @else
                            <span class="badge badge-danger">Off</span>
                        @endif
                    </td>
                    <td>{{ $ad->ads_type }}</td>
                    <td>{{ $ad->ads_script }}</td>
                    
                    <td>
                        <a href="{{route('ads.edit',$ad->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <form onsubmit="return confirm('Sure for delete?')" class="d-inline" action="{{route('ads.destroy',$ad->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <input type="submit" value="Delete" class="btn btn-sm btn-danger" />

                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>


@endsection