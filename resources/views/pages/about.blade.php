@extends('layouts.default')

@section('content')

    <h1>About Bouffage</h1>
    <h4 class="lead">Use this website as per the type of user you are!</h4>
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-sm-3">
                <h5><strong>Unregistered Users:</strong></h5>
                <ul class="col-sm-12">
                    <li>Enter your ingredients</li>
                    <li>Find your recipes</li>
                    <li>View reviews and tips</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5><strong>Registered Users:</strong></h5>
                <ul class="col-sm-12">
                    <li>Enter your ingredients</li>
                    <li>Find your recipes</li>
                    <li>View and post reviews and tips</li>
                    <li>Chat with local chefs</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5><strong>Local Chefs:</strong></h5>
                <ul class="col-sm-12">
                    <li>Enter your ingredients</li>
                    <li>Find your recipes</li>
                    <li>View and post reviews and tips</li>
                    <li>Chat with other chefs</li>
                    <li>Post your own recipes</li>
                </ul>
            </div>
        </div>

        <hr>

    </div>

@endsection
