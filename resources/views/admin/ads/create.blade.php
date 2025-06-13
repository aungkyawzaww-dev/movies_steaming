@extends('admin.layout.master')

@section( 'content')
    <h2>Category</h2>
    <a href="{{ route('ads.index') }}" class="btn btn-primary mb-3"> All Ads </a>

    <form action="{{ route('ads.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ads_type">Enter Ads Type</label>
            <input type="text" name="ads_type" id="ads_type" class="form-control " placeholder="Please fill your Ads Type" />
        </div>

        <div class="form-group">
            <label for="ads_script">Enter Ads Script</label>
            <input type="text" name="ads_script" id="ads_script" class="form-control " placeholder="Please fill your Ads Script" />
        </div>

        <div class="form-group">
            <label for="on_off">On/Off</label>
            <select name="on_off" class="form-control">
                <option value="on">on</option>
                <option value="off">off</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Create" />

    </form>



@endsection