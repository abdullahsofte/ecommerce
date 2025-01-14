@extends('layouts.website')
@section('website-css')
<link rel="stylesheet" type="text/css" href="{{asset('/')}}website/vendor/photoswipe/photoswipe.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}website/vendor/photoswipe/default-skin/default-skin.min.css">
@endsection
@section('website-content')
 <!-- Start of Breadcrumb -->
 <nav class="breadcrumb-nav container">
    <ul class="breadcrumb bb-no">
        <li><a href="index.html">Home</a></li>
        <li>Products</li>
    </ul>
    <ul class="product-nav list-style-none">
        <li class="product-nav-prev">
            <a href="#">
                <i class="w-icon-angle-left"></i>
            </a>
            <span class="product-nav-popup">
                <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Product" width="110"
                    height="110" />


                    {{-- <?php 

                        $wishCount  = $this->db->query("SELECT COUNT(*) as wishCount FROM wishlist_products WHERE customer_id = '$product->id'")->row()->wishCount;

                    ?> --}}


                    
                <span class="product-name">{{ $product->name }}</span>
            </span>
        </li>
        <li class="product-nav-next">
            <a href="#">
                <i class="w-icon-angle-right"></i>
            </a>
            <span class="product-nav-popup">
                <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Product" width="110"
                    height="110" />
                <span class="product-name">{{ $product->name }}</span>
            </span>
        </li>
    </ul>
</nav>
<!-- End of Breadcrumb -->

<!-- Start of Page Content -->
<div class="page-content">
    <div class="container">
        <div class="row gutter-lg">
            <div class="main-content" style="width:100%">
                <div class="product product-single row">
                    <div class="col-md-6 mb-6">
                        <div class="product-gallery product-gallery-sticky">
                            <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                'navigation': {
                                    'nextEl': '.swiper-button-next',
                                    'prevEl': '.swiper-button-prev'
                                }
                            }">
                                <div class="swiper-wrapper row cols-1 gutter-no">
                                    <div class="swiper-slide">
                                        <figure class="product-image">
                                            <img src="{{ asset('uploads/product/'.$product->image) }}"
                                                data-zoom-image="{{ asset('uploads/product/'.$product->image) }}"
                                                alt="{{ $product->name }}" width="800" height="900">
                                        </figure>
                                    </div>
                                    @if(count($productImage) > 0)
                                    @foreach ($productImage as $item)
                                    <div class="swiper-slide">
                                        <figure class="product-image">
                                            <img src="{{ asset('uploads/otherImage/'.$item->otherImage) }}"
                                                data-zoom-image="{{ asset('uploads/otherImage/'.$item->otherImage) }}"
                                                alt="{{ $item->otherImage }}" width="488" height="549">
                                        </figure>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                                <a href="#" class="product-gallery-btn product-image-full"><i class="w-icon-zoom"></i></a>
                            </div>
                            <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                'navigation': {
                                    'nextEl': '.swiper-button-next',
                                    'prevEl': '.swiper-button-prev'
                                }
                            }">
                                <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                    <div class="product-thumb swiper-slide">
                                        <img src="{{ asset('uploads/product/'.$product->image) }}"
                                            alt="{{ $product->image }}" width="800" height="900">
                                    </div>
                                    @if(count($productImage) > 0)
                                    @foreach ($productImage as $item)
                                    <div class="product-thumb swiper-slide">
                                        <img src="{{ asset('uploads/otherImage/'.$item->otherImage) }}"
                                            alt="{{ $item->otherImage }}" width="800" height="900">
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-md-6">
                        <div class="product-details" data-sticky-options="{'minWidth': 767}">
                            <h1 class="product-title">{{ $product->name }}</h1>
                            <div class="product-bm-wrapper">
                                <figure class="brand">
                                    <img src="{{ asset($product->category->image) }}" alt="{{ $product->category->name }}"
                                        width="102" height="48" style="height: 48px" />
                                </figure>
                                <div class="product-meta">
                                    <div class="product-categories">
                                        Category:
                                        <span class="product-category"><a href="#">{{ $product->category->name }}</a></span>
                                    </div>
                                    <div class="product-sku">
                                        P-CODE: <span>{{ $product->code }}</span>
                                    </div>
                                </div>
                            </div>

                            <hr class="product-divider">

                            <div class="product-price"><ins class="new-price">{{ $product->price }}TK</ins></div>

                            {{-- <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#product-tab-reviews" class="rating-reviews scroll-to">(3
                                    Reviews)</a>
                            </div> --}}

                            <div class="product-short-desc">
                                {!! $product->short_details !!}
                            </div>

                            <hr class="product-divider">

                            {{-- <div class="product-form product-variation-form product-color-swatch">
                                <label>Color:</label>
                                <div class="product-variations">{{ optional($product->color)->name }}</div>
                                <div class="d-flex align-items-center product-variations">
                                    <a href="#" class="color" style="background-color: #ffcc01"></a>
                                    <a href="#" class="color" style="background-color: #ca6d00;"></a>
                                    <a href="#" class="color" style="background-color: #1c93cb;"></a>
                                    <a href="#" class="color" style="background-color: #ccc;"></a>
                                    <a href="#" class="color" style="background-color: #333;"></a>
                                </div>
                            </div> --}}
                            <div class="product-form product-variation-form product-size-swatch">
                                <label class="mb-1">Size:</label>
                                <div class="product-variations">
                                    {{ optional($product->size)->name }}
                                </div>
                                {{-- <div class="flex-wrap d-flex align-items-center product-variations">
                                    <a href="#" class="size">Small</a>
                                    <a href="#" class="size">Medium</a>
                                    <a href="#" class="size">Large</a>
                                    <a href="#" class="size">Extra Large</a>
                                </div> --}}
                                {{-- <a href="" class="product-variation-clean">Clean All</a> --}}
                            </div>
                            {{-- <div class="product-variation-price">
                                <span></span>
                            </div> --}}

                            <div class="fix-bottom product-sticky-content sticky-content">
                                <div class="product-form container">
                                    <div class="product-qty-form">
                                        <div class="input-group">
                                            <input class="quantity form-control" type="number" min="1"
                                                max="10000000" onchange="">
                                            <button class="quantity-plus w-icon-plus"></button>
                                            <button class="quantity-minus w-icon-minus"></button>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-cart" onclick="addToCard({{$product->id}})">
                                        <i class="w-icon-cart"></i>
                                        <span>Add to Cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a href="#product-tab-description" class="nav-link active">Description</a>
                        </li>
                        <li class="nav-item">
                            <a href="#product-tab-specification" class="nav-link">Specification</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#product-tab-reviews" class="nav-link">Customer Reviews (3)</a>
                        </li> --}}
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="product-tab-description">
                            <div class="row mb-4">
                                <div class="col-md-12 mb-5">
                                    <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>
                                    <div>

                                        <p class="mb-4">{!! $product->description !!}</p>
                                    </div>
                                
                                </div>
                        
                            </div>
                        </div>
                        <div class="tab-pane" id="product-tab-specification">
                            <div>
                                {!! $product->short_details !!}
                            </div>
                            {{-- <ul class="list-none">
                                <li>
                                    <label>Model</label>
                                    <p>Skysuite 320</p>
                                </li>
                                <li>
                                    <label>Color</label>
                                    <p>Black</p>
                                </li>
                                <li>
                                    <label>Size</label>
                                    <p>Large, Small</p>
                                </li>
                                <li>
                                    <label>Guarantee Time</label>
                                    <p>3 Months</p>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="tab-pane" id="product-tab-reviews">
                            {{-- <div class="row mb-4">
                                <div class="col-xl-4 col-lg-5 mb-4">
                                    <div class="ratings-wrapper">
                                        <div class="avg-rating-container">
                                            <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                            <div class="avg-rating">
                                                <p class="text-dark mb-1">Average Rating</p>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="ratings-value d-flex align-items-center text-dark ls-25">
                                            <span
                                                class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                class="count">(2 of 3)</span>
                                        </div>
                                        <div class="ratings-list">
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>70%</mark>
                                                </div>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>30%</mark>
                                                </div>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>40%</mark>
                                                </div>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 40%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>0%</mark>
                                                </div>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 20%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>0%</mark>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 mb-4">
                                    <div class="review-form-wrapper">
                                        <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                            Review</h3>
                                        <p class="mb-3">Your email address will not be published. Required
                                            fields are marked *</p>
                                        <form action="#" method="POST" class="review-form">
                                            <div class="rating-form">
                                                <label for="rating">Your Rating Of This Product :</label>
                                                <span class="rating-stars">
                                                    <a class="star-1" href="#">1</a>
                                                    <a class="star-2" href="#">2</a>
                                                    <a class="star-3" href="#">3</a>
                                                    <a class="star-4" href="#">4</a>
                                                    <a class="star-5" href="#">5</a>
                                                </span>
                                                <select name="rating" id="rating" required=""
                                                    style="display: none;">
                                                    <option value="">Rate…</option>
                                                    <option value="5">Perfect</option>
                                                    <option value="4">Good</option>
                                                    <option value="3">Average</option>
                                                    <option value="2">Not that bad</option>
                                                    <option value="1">Very poor</option>
                                                </select>
                                            </div>
                                            <textarea cols="30" rows="6"
                                                placeholder="Write Your Review Here..." class="form-control"
                                                id="review"></textarea>
                                            <div class="row gutter-md">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"
                                                        placeholder="Your Name" id="author">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"
                                                        placeholder="Your Email" id="email_1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" class="custom-checkbox"
                                                    id="save-checkbox">
                                                <label for="save-checkbox">Save my name, email, and website
                                                    in this browser for the next time I comment.</label>
                                            </div>
                                            <button type="submit" class="btn btn-dark">Submit
                                                Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#show-all" class="nav-link active">Show All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#helpful-positive" class="nav-link">Most Helpful
                                            Positive</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#helpful-negative" class="nav-link">Most Helpful
                                            Negative</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#highest-rating" class="nav-link">Highest Rating</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#lowest-rating" class="nav-link">Lowest Rating</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="show-all">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="website/images/agents/1-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:54 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings"
                                                                    style="width: 60%;"></span>
                                                                <span
                                                                    class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>pellentesque habitant morbi tristique senectus
                                                            et. In dictum non consectetur a erat.
                                                            Nunc ultrices eros in cursus turpis massa
                                                            tincidunt ante in nibh mauris cursus mattis.
                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                            ut tristique.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-1.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-1-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="website/images/agents/2-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:52 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings"
                                                                    style="width: 80%;"></span>
                                                                <span
                                                                    class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                            faucibus sapien.
                                                            Ultrices eros in cursus turpis massa tincidunt
                                                            ante in nibh mauris cursus mattis.
                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                            ut tristique.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-2.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-2.jpg" />
                                                                    </figure>
                                                                </a>
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-3.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-3.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="website/images/agents/3-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:21 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings"
                                                                    style="width: 60%;"></span>
                                                                <span
                                                                    class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>In fermentum et sollicitudin ac orci phasellus. A
                                                            condimentum vitae
                                                            sapien pellentesque habitant morbi tristique
                                                            senectus et. In dictum
                                                            non consectetur a erat. Nunc scelerisque viverra
                                                            mauris in aliquam sem fringilla.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful (0)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (1)
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="helpful-positive">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="website/images/agents/1-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:54 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings"
                                                                    style="width: 60%;"></span>
                                                                <span
                                                                    class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>pellentesque habitant morbi tristique senectus
                                                            et. In dictum non consectetur a erat.
                                                            Nunc ultrices eros in cursus turpis massa
                                                            tincidunt ante in nibh mauris cursus mattis.
                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                            ut tristique.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-1.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-1.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="website/images/agents/2-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:52 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings"
                                                                    style="width: 80%;"></span>
                                                                <span
                                                                    class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                            faucibus sapien.
                                                            Ultrices eros in cursus turpis massa tincidunt
                                                            ante in nibh mauris cursus mattis.
                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                            ut tristique.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-2.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-2-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-3.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-3-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="helpful-negative">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="website/images/agents/3-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:21 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings"
                                                                    style="width: 60%;"></span>
                                                                <span
                                                                    class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>In fermentum et sollicitudin ac orci phasellus. A
                                                            condimentum vitae
                                                            sapien pellentesque habitant morbi tristique
                                                            senectus et. In dictum
                                                            non consectetur a erat. Nunc scelerisque viverra
                                                            mauris in aliquam sem fringilla.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful (0)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (1)
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="highest-rating">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="website/images/agents/2-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:52 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings"
                                                                    style="width: 80%;"></span>
                                                                <span
                                                                    class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                            faucibus sapien.
                                                            Ultrices eros in cursus turpis massa tincidunt
                                                            ante in nibh mauris cursus mattis.
                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                            ut tristique.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-2.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-2-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-3.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-3-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="lowest-rating">
                                        <ul class="comments list-style-none">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure class="comment-avatar">
                                                        <img src="website/images/agents/1-100x100.png"
                                                            alt="Commenter Avatar" width="90" height="90">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author">
                                                            <a href="#">John Doe</a>
                                                            <span class="comment-date">March 22, 2021 at
                                                                1:54 pm</span>
                                                        </h4>
                                                        <div class="ratings-container comment-rating">
                                                            <div class="ratings-full">
                                                                <span class="ratings"
                                                                    style="width: 60%;"></span>
                                                                <span
                                                                    class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <p>pellentesque habitant morbi tristique senectus
                                                            et. In dictum non consectetur a erat.
                                                            Nunc ultrices eros in cursus turpis massa
                                                            tincidunt ante in nibh mauris cursus mattis.
                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                            ut tristique.</p>
                                                        <div class="comment-action">
                                                            <a href="#"
                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                (0)
                                                            </a>
                                                            <div class="review-image">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="website/images/products/default/review-img-3.jpg"
                                                                            width="60" height="60"
                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                            data-zoom-image="website/images/products/default/review-img-3-800x900.jpg" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                @isset($related)
                <section class="related-product-section">
                    <div class="title-link-wrapper mb-4">
                        <h4 class="title">Related Products</h4>
                        <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 5
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                            
                         @foreach ($related as $item)
                         <div class="swiper-slide product">
                            <figure class="product-media">
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <img src="{{ asset('uploads/product/'.$item->image) }}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                   
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                        View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="{{ route('product.details', $item->slug) }}">{{$item->name}}</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="{{ route('product.details', $item->slug) }}" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-pa-wrapper">
                                    <div class="product-price">{{$item->price}}Tk</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </section>
                @endisset
            </div>
            <!-- End of Main Content -->
            <!-- End of Sidebar -->
        </div>
    </div>
</div>
<!-- End of Page Content -->
@endsection

@push('website-js')
<script src="{{asset('/')}}website/vendor/photoswipe/photoswipe.js"></script>
<script src="{{asset('/')}}website/vendor/photoswipe/photoswipe-ui-default.js"></script>
@endpush
