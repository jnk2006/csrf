@extends('layouts.default')

@section('content')


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron jumbotron-fluid bg-dark">
        <div class="jumbotron-background">
            <img src="https://us.123rf.com/450wm/mitoimages/mitoimages1705/mitoimages170510083/78802448-close-up-of-raw-food-on-kitchen-counter-for-chicken-soup-munich-bavaria-germany.jpg" class="blur"
            width="1100px" height="500px">
        </div>
        <div class="container">
            <h1 class="display-3">Welcome to The Bouffage</h1>
            <h4> The only site that enables you to obtain the recipes based on the ingredients available in your
                    house.</h4>
            <p><a class="btn btn-primary btn-md" href="#" role="button">Click here</a> To enter your ingredients</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <figure>
                    <h3>Tips</h3>
                    <img src="http://www.listotic.com/wp-content/uploads/2014/04/The-BEST-list-of-kitchen-tips-and-tricks-I-didnt-know-about-most-of-these..jpg"
                         width="300px" height="350px">
                </figure>
            </div>
            <div class="col-md-4">
                <figure>
                    <h3>Bookmarks</h3>
                    <img src="http://www.thefoodsection.com/.a/6a00d8341c4ec753ef0120a5e4a05c970c-pi" width="300px"
                         height="400px">
                </figure>
            </div>
            <div class="col-md-4">
                <figure>
                    <h3>Shopping Lists</h3>
                    <img src="http://templatelab.com/wp-content/uploads/2018/03/grocery-list-template-10.jpg"
                         width="400px" height="400px">
                </figure>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->


@endsection
