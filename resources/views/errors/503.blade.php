@extends('layouts.frontend.app')

@section('title', '503')

@section('content')
    <div class="page-content page-error text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>503</h1>
                    <h2>SERVICE UNAVAILABLE</h2>
                    <hr />
                    <div class="error-description">
                        <p>The server is currently unavailable (overloaded or down)</p>
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