@extends('user.layouts.master')

@section('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .blog-post {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: left;
            border: 2px solid #eee;
        }

        .image-container {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }

        .blog-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .tag {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e63946;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 12px;
        }

        .blog-title {
            font-size: 1em;
            color: #222;
            margin: 15px 0 10px;
            font-weight: bold;
        }

        .blog-date {
            color: #888;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .blog-description {
            font-size: 13px;
            color: #555;
            margin-bottom: 10px;
        }

        .read-more {
            display: inline-block;
            text-decoration: none;
            color: #e63946;
            font-weight: bold;
            border-bottom: 2px solid #e63946;
        }

        .text-truncate-2 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            /* Limit to 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 6rem;
            /* Adjust based on line height */
            line-height: 1.5rem;
            /* Adjust line height */
        }
    </style>
@endsection

@section('content')
    <style>

    </style>
    <!--================= Course Filter Section Start Here =================-->
    <div class="react-course-filter back__course__page_grid pb---40 pt-4 card">
        <!-- Icon Grid Section -->
        <div class="container mt-4">
            <div class="row">

                @foreach ($blogs as $item)
                    <div class="col-md-3">
                        <div class="blog-post">
                            <div class="image-container">
                                <img src="{{ asset('storage/' . $item->thumb) }}" alt="{{ $item->title }}" class="blog-image">

                            </div>
                            <h2 class="blog-title">{{ $item->title }}</h2>
                            <p class="blog-date">
                                <b>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}&nbsp;&nbsp; -
                                    &nbsp;&nbsp; <span class='text-danger'> <i class="fas fa-eye"></i>
                                        {{ $item->views }}</span>
                                </b></p>
                            <hr />
                            <p class="blog-description text-truncate-2">
                                {{ $item->body1 }}
                            </p>
                            <a href="{{ route('front.readpost', $item->slug) }}" class="read-more">READ MORE</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>



    </div>


    </div>
    </div>
    <!--================= Wrapper End Here =================-->
@endsection
@section('script')
@endsection
