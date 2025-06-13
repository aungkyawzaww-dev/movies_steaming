@extends('admin.layout.master')

@section( 'content')

    <div class="mb-3 mt-3">
        <a href="{{ route('ads.index') }}" class="btn btn-primary mb-3"> All Ads </a>
    </div>
    

    <form action="{{ route('ads.update',$ads->id)}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="ads_type">Enter Ads Type</label>
            <input type="text" name="ads_type" id="ads_type" class="form-control " value="{{$ads->ads_type}}" />
        </div>

        <div class="form-group">
            <label for="ads_script">Enter Ads Script</label>
            <input type="text" name="ads_script" id="ads_script" class="form-control " value="{{old('ads_script',$ads->ads_script)}}" />
        </div>

        <div class="form-group">
            <label for="on_off">On/Off</label>
            <select name="on_off" class="form-control" >
                <option value="on" {{ $ads->on_off == "on" ? "selected" : "" }}>on</option>
                <option value="off" {{ $ads->on_off == "off" ? "selected" : "" }}>off</option>
            </select>
        </div>

        <input type="submit" value="Update" class="btn btn-primary" />

    </form>



@endsection