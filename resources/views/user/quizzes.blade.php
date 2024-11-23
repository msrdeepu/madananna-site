@extends('user.layouts.master')

@section('meta')

@endsection

@section('title')

@endsection

@section('styles')

@endsection

@section('content')
<style>
    .description {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Show only 5 lines */
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
}

.read-more-btn {
    color: #007bff;
    cursor: pointer;
    text-decoration: underline;
}

.full-text {
    -webkit-line-clamp: unset;
}

</style>
<style>
    .inner-course:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .case-title a:hover {
        color: #0056b3;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
 <style>
       body {
    background-color: #660000;
    color: #333;
}

.news-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

.card-header {
    background-color: #fff;
    padding: 10px;
    font-weight: bold;
    color: #000;
}

.menu-icon {
    font-size: 1.2rem;
    cursor: pointer;
}

.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.dots {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.dot {
    height: 8px;
    width: 8px;
    background-color: #ff0000;
    border-radius: 50%;
    margin: 0 4px;
}

.card-title {
    font-size: 1rem;
    text-align: center;
    font-weight: bold;
}

.btn-warning {
    color: #fff;
    background-color: #ffcc00;
    border: none;
    font-weight: bold;
}

.card-footer {
    background-color: #f0f0f0;
    padding: 5px;
    font-size: 0.85rem;
    text-align: center;
}

.card-footer a {
    color: #ffcc00;
    font-weight: bold;
}
.text-truncate-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Limit to 2 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 3rem; /* Adjust based on line height */
    line-height: 1.5rem; /* Adjust line height */
}

        
    </style>
  <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt-4">
                    <div class="container "> 
                        <div class="row d-none align-items-center back-vertical-middle shorting__course mb-50">
                            <div class="col-md-2">
                                <div class="all__icons">                                    
                                    <div class="list__icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                                    </div>
                                    <div class="result-count">Filters</div>
                                </div>
                            </div>
                            <div class="col-md-10 text-right">
                                <select class="from-control">
                                    <option>All Categories</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <select class="from-control">
                                    <option>All Language</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <select class="from-control">
                                    <option>All Prices</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <select class="from-control">
                                    <option>All Skills</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>
                                                                         
                        <div class="row">  
                        
                        @foreach($qyizzes as $item)
                             <div class="col-md-6 col-lg-3">
            <div class="news-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <a href='{{ route("quiz.playview", $item->slug) }}'><div class="menu-icon">&#9776;</div></a>
                    <h5 class="text-uppercase">{{$item->name}}</h5>
                </div>
                <img src="{{ asset('storage/' . $item->image) }}" alt="News Image" class="card-img-top">
                <div class="card-body">
                    <div class="dots">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                   <h6 class="card-title mt-3 text-truncate-2" style="text-align: left; line-height: 1.6;">
            {{ $item->description }}
        </h6>
     
<a href='{{ route("quiz.playview", $item->slug) }}' class="btn btn-warning w-100 mt-3">Play Quiz</a>
                </div>
           
            </div>
        </div>
                    
                        @endforeach
                           
                        </div>
                        
                        <!--================= Pagination Section Start Here =================-->
                       <div class='d-flex flex-row justify-content-center'>
                           {{$qyizzes->links()}}
                       </div>
                        <!--================= Pagination Section End Here =================-->
                    </div>
                </div>
                <!--================= Course Filter Section End Here =================--> 
                
            </div>
        </div>
        <!--================= Wrapper End Here =================-->
@endsection
@section('script')

<script>
$(document).ready(function() {
    $('.read-more-btn').click(function() {
        var description = $(this).prev('.description');
        description.toggleClass('full-text');

        if (description.hasClass('full-text')) {
            $(this).text('Read less');
        } else {
            $(this).text('Read more');
        }
    });
});
</script>
@endsection
