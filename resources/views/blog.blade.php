@extends('layout/main')

@section('container')
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php 
    foreach ($blogs as $b) {     
        
        ?>           
        
            <div class="col">
              <div class="card h-100">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                    <text x="10%" y="50%" fill="#dee2e6" dy=".3em">{{ $b['title'] }}</text>
                </svg>
                <div class="card-body">
                  <h5 class="card-title">{{ $b['title'] }}</h5>
                  <p class="card-text">{{ $b['author'] }}</p>
                  <p class="card-text">{{ $b['news'] }}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
           <?php  
           
        } ?>
        </div>
@endsection