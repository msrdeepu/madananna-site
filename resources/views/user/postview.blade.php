@extends('user.layouts.master')


@section('meta')
    @if($postdata->meta)
        <meta name="description" content="{{ $postdata->meta }}">
    @endif

    @if($postdata->keywords)
        <meta name="keywords" content="{{ $postdata->keywords }}">
    @endif
@endsection

@section('title')

@endsection


@section('styles')
<style>
    body {
        font-family: 'Open Sans', sans-serif;
      
    }
    .blog-title {
        font-family: 'Merriweather', serif;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }
    .featured-image {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .content-section {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 25px;
        text-align: justify;
    }
    .content-section strong {
        color: #e63946;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
    }
    
    
    /*social share*/
 .social-share-fixed {
    position: fixed;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 15px;
    z-index: 1000;
}

/* Social Icon Styling */
.social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    text-decoration: none;
    color: #fff;
    border-radius: 50%;
    transition: all 0.3s ease;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.social-icon i {
    font-size: 20px;
}

/* Platform-specific colors */
.social-icon.facebook {
    background-color: #4267B2;
}

.social-icon.twitter {
    background-color: #1DA1F2;
}

.social-icon.linkedin {
    background-color: #2867B2;
}

.social-icon.whatsapp {
    background-color: #25D366;
}

/* Hover effect */
.social-icon:hover {
    transform: scale(1.1);
    opacity: 0.9;
}

/* Mobile: Move buttons to the bottom */
@media (max-width: 768px) {
    .social-share-fixed {
        flex-direction: row;
        bottom: 0;
        left: 0;
        right: 0;
        top: auto;
        transform: none;
        justify-content: center;
        padding: 10px 0;
        background-color: rgba(255, 255, 255, 0.9); /* Optional background */
        box-shadow: 0px -2px 6px rgba(0, 0, 0, 0.1); /* Shadow for mobile bar */
    }

    .social-icon {
        width: 40px;
        height: 40px;
        margin: 0 8px;
    }
}
</style>



@endsection


@section('og:title', $postdata->title)
@section('og:description', Str::limit($postdata->body1, 150))
@section('og:image', asset('storage/' . $postdata->featured_image))


@section('content')

  <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt-4">
                     <div class="container">
<h1 class="blog-title" style="text-align: left;">{{$postdata->title}}</h1>

        
         @if($postdata->featured_image)
         <img class="featured-image"  src="{{ asset('storage/' . $postdata->featured_image) }}" alt="Thumb Image" width="100">
     @endif
     
     <div class="breadcrumb" style="text-align: left; font-size: 14px; color: #555;">
    <span> {{ $postdata->created_at->format('F d, Y') }}</span> &nbsp;&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp;
    <span>Views: {{ $postdata->views }}</span>
</div>
<hr />
        
        @if(!empty($postdata->body2))
            <div class="content-section">
                {!! $postdata->body2 !!}
            </div>
        @endif
        @if(!empty($postdata->body3))
            <div class="content-section">
                {!! $postdata->body3 !!}
            </div>
        @endif
        @if(!empty($postdata->body4))
            <div class="content-section">
                {!! $postdata->body4 !!}
            </div>
        @endif
        @if(!empty($postdata->body5))
            <div class="content-section">
                {!! $postdata->body5 !!}
            </div>
        @endif
        @if(!empty($postdata->body6))
            <div class="content-section">
                {!! $postdata->body6 !!}
            </div>
        @endif
        
        
       <div class="social-share-fixed">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
        target="_blank" class="social-icon facebook" title="Share on Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($postdata->title) }}" 
        target="_blank" class="social-icon twitter" title="Share on Twitter">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($postdata->title) }}" 
        target="_blank" class="social-icon linkedin" title="Share on LinkedIn">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a href="https://api.whatsapp.com/send?text={{ urlencode($postdata->title) }}%20{{ urlencode(url()->current()) }}" 
        target="_blank" class="social-icon whatsapp" title="Share on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>




       
    </div>
                </div>
              
                
            </div>
        </div>
        
       

        <!--================= Wrapper End Here =================-->
       
@endsection
@section('script')

<script>

</script>





@endsection