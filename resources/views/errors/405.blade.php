@extends('layouts.frontend.app')

@section('title', '403')

@section('content')
    <div class="page-content page-error text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>405</h1>
                    <h2>OOPS! METHOD NOT ALLOWED EXCEPTION</h2>
                    <hr />
                    <div class="error-description">
                        <p>A request was made of a page using a request method not supported by that page</p>
                    </div>
                    <form class="form-horizontal">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                            <input type="submit" class="btn btn-default" value="SEARCH">
                        </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop