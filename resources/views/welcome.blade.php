@extends('layouts.app')

@section('content')

<style>
/* from http://stackoverflow.com/questions/23964193/bootstrap-3-0-responsive-5-images-in-one-row */
.col-sm-4cols{
    position: relative;
    min-height: 1px;
    padding-right: 10px;
    padding-left: 10px;
}

@media (min-width: 768px) {
.col-sm-4cols {
        width: 25%;
        float: left;
    }
}
</style>

<div class="container-fluid">
    <div class="row">
        <h3>Recent:</h3>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
