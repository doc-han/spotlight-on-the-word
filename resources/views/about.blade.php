@extends('layouts.default')

@section('body')
    <!--Top of Page-->
    <div class="top-phrase w-100" style="background-image: url({{ asset('aged.jpg')}}); background-size: 100%; background-repeat: no-repeat">
        <div class="transparent-cover">
            <h1 class="display-4 text-center text-white">About</h1>
        </div>
    </div>

    <!--Main body-->
    <div class="container mt-5">
        <!--Write up about SOTW-->
        <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Amet nihil reprehenderit inventore. Pariatur porro, omnis nihil, 
            aut ut eveniet nisi corporis sit molestias totam iure magni quasi! Corrupti, eligendi voluptatem!
        </p>
        
        <!--Our Team-->
        <div>
            <h1 class="display-4 text-center">Our Team</h1>

            <div class="row">
                <div class="col-md-3">
                    <h3>Member 1</h3>
                </div>

                <div class="col-md-3">
                    <h3>Member 2</h3>
                </div>

                <div class="col-md-3">
                    <h3>Member 3</h3>
                </div>

                <div class="col-md-3">
                    <h3>Member 4</h3>
                </div>
            </div>
        </div>
        
    </div>
@endsection

