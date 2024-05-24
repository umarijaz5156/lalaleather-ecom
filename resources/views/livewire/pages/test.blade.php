<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #301200;
            color: #fff
        }

        .nav-link:focus,
        .nav-link:hover {
            color: #fff;
        }

        .btn-outline-dark {
            color: #fff;
            border-color: #fff;
        }

        . .btn-outline-dark:hover {
            color: #301200;
            background-color: #fff;
            border-color: #301200;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #301200;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        .text-display-7 {
            color: #fff;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #fff;
            text-decoration: none;
        }

        .accordion-style .card {
            background: transparent;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
            margin-bottom: 15px;
            margin-top: 0 !important;
            border: none;
        }

        .accordion-style .card:last-child {
            margin-bottom: 0;
        }

        .accordion-style .card-header {
            border: 0;
            background: none;
            padding: 0;
            border-bottom: none;
        }

        .accordion-style .btn-link {
            color: #ffffff;
            position: relative;
            background: #301200;
            border: 1px solid #15395a;
            display: block;
            width: 100%;
            font-size: 18px;
            border-radius: 3px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            text-align: left;
            white-space: normal;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
            padding: 15px 55px;
            text-decoration: none;
        }

        .accordion-style .btn-link:hover {
            text-decoration: none;
        }

        .accordion-style .btn-link.collapsed {
            background: #301200;
            border: 1px solid #15395a;
            color: #ffff;
            border-radius: 3px;
        }

        .accordion-style .btn-link.collapsed:after {
            background: none;
            border-radius: 3px;
            content: "+";
            left: 16px;
            right: inherit;
            font-size: 20px;
            font-weight: 600;
            line-height: 26px;
            height: 26px;
            transform: none;
            width: 26px;
            top: 15px;
            text-align: center;
            background-color: #301200;
            color: #ffff;
        }

        .accordion-style .btn-link:after {
            background: #301200;
            border: none;
            border-radius: 3px;
            content: "-";
            left: 16px;
            right: inherit;
            font-size: 20px;
            font-weight: 600;
            height: 26px;
            line-height: 26px;
            transform: none;
            width: 26px;
            top: 15px;
            position: absolute;
            color: #fffff;
            text-align: center;
        }

        .accordion-style .card-body {
            color: #ffffff;
            padding: 20px;
            border-top: none;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-left: 1px solid #15395a;
            border-right: 1px solid #15395a;
            border-bottom: 1px solid #15395a;
        }

        @media screen and (max-width: 767px) {
            .accordion-style .btn-link {
                padding: 15px 40px 15px 55px;
            }
        }

        @media screen and (max-width: 575px) {
            .accordion-style .btn-link {
                padding: 15px 20px 15px 55px;
            }
        }

        .card-style1 {
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        .border-0 {
            border: 0 !important;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #301200;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }

        .mb-2-3,
        .my-2-3 {
            margin-bottom: 2.3rem;
        }

        .section-title {
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .text-primary {
            color: #ceaa4d !important;
        }

        .collapse.show {
            visibility: inherit !important;
        }

        .btn-link {
            color: #301200;
            text-decoration: none;
        }

        .review-list ul li .left span {
            width: 32px;
            height: 32px;
            display: inline-block;
        }

        .review-list ul li .left {
            flex: none;
            max-width: none;
            margin: 0 10px 0 0;
        }

        .review-list ul li .left span img {
            border-radius: 50%;
        }

        .review-list ul li .right h4 {
            font-size: 16px;
            margin: 0;
            display: flex;
        }

        .review-list ul li .right h4 .gig-rating {
            display: flex;
            align-items: center;
            margin-left: 10px;
            color: #ffbf00;
        }

        .review-list ul li .right h4 .gig-rating svg {
            margin: 0 4px 0 0px;
        }

        .country .country-flag {
            width: 16px;
            height: 16px;
            vertical-align: text-bottom;
            margin: 0 7px 0 0px;
            border: 1px solid #fff;
            border-radius: 50px;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);

        }

        .country .country-name {
            color: #95979d;
            font-size: 13px;
            font-weight: 600;
        }

        .review-list ul li {
            border-bottom: 1px solid #dadbdd;
            padding: 0 0 30px;
            margin: 0 0 30px;
        }

        .review-list ul li .right {
            flex: auto;
        }

        .review-list ul li .review-description {
            margin: 20px 0 0;
        }

        .review-list ul li .review-description p {
            font-size: 14px;
            margin: 0;
        }

        .review-list ul li .publish {
            font-size: 13px;
            color: #95979d;
        }

        .review-section h4 {
            font-size: 20px;
            color: #fff;
            font-weight: 700;
        }

        .review-section .stars-counters tr .stars-filter.fit-button {
            padding: 6px;
            border: none;
            color: #fff;
            text-align: left;
        }

        .review-section .fit-progressbar-bar .fit-progressbar-background {
            position: relative;
            height: 8px;
            background: #301200;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);

            background-color: #301200;
            ;
            border-radius: 999px;
        }

        .review-section .stars-counters tr .star-progress-bar .progress-fill {
            background-color: #ffb33e;
        }

        .review-section .fit-progressbar-bar .progress-fill {
            background: #2cdd9b;
            background-color: rgb(29, 191, 115);
            height: 100%;
            position: absolute;
            left: 0;
            z-index: 1;
            border-radius: 999px;
        }

        .review-section .fit-progressbar-bar {
            display: flex;
            align-items: center;
        }

        .review-section .stars-counters td {
            white-space: nowrap;
        }

        .review-section .stars-counters tr .progress-bar-container {
            width: 100%;
            padding: 0 10px 0 6px;
            margin: auto;
        }

        .ranking h6 {
            font-weight: 600;
            padding-bottom: 16px;
        }

        .ranking li {
            display: flex;
            justify-content: space-between;
            color: #95979d;
            padding-bottom: 8px;
        }

        .review-section .stars-counters td.star-num {
            color: #fff;
        }

        .ranking li>span {
            color: #62646a;
            white-space: nowrap;
        }

        a {
            color: #0d6efd;
            margin-left: 12px;
        }

        .review-section {
            padding-bottom: 24px;
            margin-bottom: 34px;
            padding-top: 64px;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        .review-section select,
        .review-section .select2-container {
            width: 188px !important;
            border-radius: 3px;
        }

        ul,
        ul li {
            list-style: none;
            margin: 0px;
        }

        .helpful-thumbs,
        .helpful-thumb {
            display: flex;
            align-items: center;
            font-weight: 700;
        }

        .default-box-shadow {
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        form {
            max-width: 600px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #301200;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #543100;
        }

        .modal-main-dev {
            background-color: #301200 !important;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5) !important;
            color: #fff !important;
        }

        .modal-title {
            color: #fff !important;
        }

        [type=text],
        [type=email],
        [type=url],
        [type=password],
        [type=number],
        [type=date],
        [type=datetime-local],
        [type=month],
        [type=search],
        [type=tel],
        [type=time],
        [type=week],
        [multiple],
        textarea,
        select {
            background-color: #301200;
            border: 1px solid #8b3605;
            border-radius: .25rem;
            color: #fff;
        }
    </style>
    <div style="background-color:#301200">
        <!-- Product section-->
        @if (isset($product))
            {{-- {{ dd($product->moneyExchange()) }} --}}
            <section class="py-5">
                <div class="container my-5">
                    <div class="row gx-4 gx-lg-5 align-items-center default-box-shadow">
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                                src="{{ Storage::url($product->files->first(fn($file) => $file->file_type === 'image' && $file->image_type === 'original')->file_path) }}"
                                alt="..." /></div>

                        <div class="col-md-6 py-10 px-10">
                            <div class="small mb-1">SKU: {{ $product->sku }}</div>
                            <h1 class="display-5 fw-bolder">{{ $product->title }}</h1>
                            <div class="fs-5 mb-2">
                                {{-- <span class="text-decoration-line-through">$45.00</span> --}}
                                <span>{{ currencyCalculator($product->price_original) }}</span><br>
                                {{-- gender tag --}}
                                <span class="text-muted">{{ $product->gender }}</span>
                            </div>
                            <p class="lead">{{ $product->description }}</p>
                            <div class="mb-2">
                                @if ($product->quantity < $product->moq && !$product->is_custom)
                                    <span class="text-danger">Out of stock</span>
                                @else
                                    <span class="text-muted mb-2">MOQ(minimum order quantity):
                                        {{ $product->moq }}</span>
                            </div>
                            {{-- $product->is_custom --}}
                            @if ($product->is_custom)
                                <div class="d-flex">
                                    <p>This product would be manufactured when an order is placed</p>
                                </div>
                            @endif
                            <div class="{{ $errors->has('quantity') ? '' : 'd-flex' }}">

                                <input class="form-control text-center me-3" wire:model='quantity'
                                    min='{{ $product->moq }}' max="{{ $product->quantity }}" id="inputQuantity"
                                    type="num" style="max-width: 5rem" />
                                @error('quantity')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                                <a wire:click.prevent="addToCart({{ $product->id }})" type="button"
                                    class="btn btn-outline-dark flex-shrink-0" type="button">
                                    <i class="bi-cart-fill me-1"></i>
                                    Add to cart
                                </a>
                            </div>
        @endif
    </div>
</div>
</div>
</section>
@endif
<!-- section  for products details-->
<div class="container my-5">
    <!-- Nav tabs -->
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $this->tab == 'features' ? 'active' : '' }}" id="pills-home-tab"
                data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                aria-controls="pills-home" aria-selected="true">PRODUCT
                FEATURE</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $this->tab == 'reviews' ? 'active' : '' }}" id="pills-profile-tab"
                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                aria-controls="pills-profile" aria-selected="false">REVIEW</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">SIZE &
                FIT</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-faqs"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FAQs</button>
        </li>
    </ul>
    @if (isset($product))
        <!-- Tab content -->
        <div class="tab-content " id="pills-tabContent">
            <div class="tab-pane fade {{ $this->tab == 'features' ? 'show active' : '' }}" id="pills-home"
                role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container">
                    <div id="reviews" class="review-section px-1">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Half for image -->
                                @if (isset($product->files))
                                    <img src="{{ Storage::url($product->files->first(fn($file) => $file->file_type === 'image' && $file->image_type === 'original')->file_path) }}"
                                        class="img-fluid rounded" alt="Product Image" width="100%">
                                @endif
                            </div>
                            <div class="col-md-6">
                                <!-- Half for text -->
                                <div class="product-features">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h3 class="m-0">Features</h3>
                                    </div>
                                    <ul
                                        class="list-unstyled mb-0 col-12 col-md-12 text-dark-l1 text-90 text-left my-4 my-md-0">
                                        @foreach ($product->features as $feature)
                                            <li>
                                                <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
                                                <span>
                                                    {{-- <span class="text-110">Donec id elit.</span> --}}
                                                    {{ $feature->feature }}
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- {{ dd($product->reviews) }} --}}
            <div class="tab-pane fade {{ $this->tab == 'reviews' || $tab == 'comments' ? 'show active' : '' }}"
                id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container">
                    <div id="reviews" class="review-section px-10">
                        {{-- success message thans for review, you review should updateed shortly --}}
                        @if (session()->has('messageReview'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('messageReview') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="m-0">{{ $product->reviews->where('status', '1')->count() }} Reviews</h4>
                            {{-- <select
                                class="custom-select custom-select-sm border-0 shadow-sm ml-2 select2-hidden-accessible"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Most Relevant</option>
                                <option>Most Recent</option>
                            </select> --}}
                            {{-- <span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="2" style="width: 188px;">
                                <span class="selection">
                                    <span class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-qd66-container">
                                        <span class="select2-selection__rendered" id="select2-qd66-container"
                                            role="textbox" aria-readonly="true" title="Most Relevant">Most
                                            Relevant</span>
                                        <span class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span>
                                    </span>
                                </span>
                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                            </span> --}}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="stars-counters">
                                    <tbody>
                                        {{-- $this->ratingsData --}}
                                        @for ($i = 5; $i >= 1; $i--)
                                            <tr class="">
                                                <td>
                                                    <span>
                                                        <button
                                                            class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">{{ $i }}
                                                            Stars</button>
                                                    </span>
                                                </td>
                                                <td class="progress-bar-container">
                                                    <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                        <div class="fit-progressbar-background">
                                                            <span class="progress-fill"
                                                                style="width: {{ $this->ratingsData[$i]['percentage'] ?? 0 }}%;"></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="star-num">({{ $this->ratingsData[$i]['count'] ?? 0 }})</td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">

                                <div class="ranking">
                                    <h6 class="text-display-7">Rating Breakdown</h6>
                                    <ul>
                                        <li>
                                            Seller communication level<span>5<span
                                                    class="review-star rate-10 show-one"></span></span>
                                        </li>
                                        <li>
                                            Recommend to a friend<span>5<span
                                                    class="review-star rate-10 show-one"></span></span>
                                        </li>
                                        <li>
                                            Service as described<span>4.9<span
                                                    class="review-star rate-10 show-one"></span></span>
                                        </li>
                                    </ul>
                                </div>
                                {{-- button to add review --}}
                                <div class="d-flex justify-content-end">
                                    <button type="button" wire:click="openReviewModal"
                                        class="btn btn-outline-dark flex-shrink-0" type="button"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi-cart-fill me-1"></i>
                                        Write a Review
                                    </button>
                                    {{-- add comment --}}
                                    <button type="button" wire:click="openCommentModal"
                                        class="btn btn-outline-dark flex-shrink-0" type="button"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi-cart-fill me-1"></i>
                                        Add a Comment
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $this->tab == 'reviews' ? 'active' : '' }}"
                                id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews"
                                type="button" role="tab" aria-controls="pills-reviews"
                                aria-selected="true">REVIEWS</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $this->tab == 'comments' ? 'active' : '' }}"
                                id="pills-comments-tab" data-bs-toggle="pill" data-bs-target="#pills-comments"
                                type="button" role="tab" aria-controls="pills-comments"
                                aria-selected="false">COMMENTS</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade {{ $this->tab == 'reviews' ? 'show active' : '' }}"
                            id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                            <div class="container">
                                {{-- {{ dd($productReviews) }} --}}
                                <div class="review-list">
                                    <ul>
                                        <li>

                                            {{-- review text and ration --}}
                                            @foreach ($productReviews as $review)
                                                {{-- {{ dd($review) }} --}}
                                                <div class="d-flex my-3">
                                                    <div class="left">
                                                        <span>
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                class="profile-pict-img img-fluid" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="right">
                                                        <h4>
                                                            {{ $review->user->name }}
                                                            <span class="gig-rating text-body-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 1792 1792" width="15"
                                                                    height="15">
                                                                    <path fill="currentColor"
                                                                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                                    </path>
                                                                </svg>
                                                                {{ $review->rating }}
                                                            </span>
                                                        </h4>

                                                        <div class="review-description">
                                                            <p>
                                                                {{ $review->comment }}
                                                            </p>
                                                        </div>
                                                        <span class="publish py-1 d-inline-block w-100">Published
                                                            {{ $review->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{ $productReviews->links() }}

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade {{ $this->tab == 'comments' ? 'show active' : '' }}"
                            id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab">
                            <div class="container">
                                <div class="review-list">
                                    <ul>
                                        <li>
                                            @foreach ($productComments as $comment)
                                                <div class="d-flex">
                                                    <!-- Display review information -->
                                                    <div class="left">
                                                        <span>
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                class="profile-pict-img img-fluid" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="right">
                                                        <h4>{{ $comment->user->username }}</h4>
                                                        <div class="review-description">
                                                            <p>{{ $comment->comment }}</p>
                                                        </div>
                                                        <!-- Reply button -->
                                                        <div class="helpful-thumbs">
                                                            <div class="helpful-thumb text-body-2 pt-3 ps-3">
                                                                <a href="#"
                                                                    wire:click="openCommentModal({{ $comment->id }})"
                                                                    style="color: #fff !important; text-decoration: none !important;">
                                                                    <span class="thumb-title">Reply</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <span class="publish py-1 d-inline-block w-100">Published
                                                            {{ $comment->created_at->diffForHumans() }}</span>

                                                        <!-- Display replies -->
                                                        @foreach ($comment->replies as $reply)
                                                            @if ($reply->status != 1)
                                                                @continue
                                                            @endif
                                                            <div class="response-item mt-4 d-flex">
                                                                <!-- Display reply information -->
                                                                <div class="left">
                                                                    <span>
                                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                                            class="profile-pict-img img-fluid"
                                                                            alt="" />
                                                                    </span>
                                                                </div>
                                                                <div class="right">
                                                                    <h4>{{ $reply->user->username }}</h4>
                                                                    <div class="country d-flex align-items-center">
                                                                        <!-- ... -->
                                                                    </div>
                                                                    <div class="review-description">
                                                                        <p>{{ $reply->comment }}</p>
                                                                    </div>
                                                                    <span
                                                                        class="publish py-1 d-inline-block w-100">Published
                                                                        {{ $reply->created_at->diffForHumans() }}</span>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{ $productComments->links() }}
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="rte py-md px-sm">
                    <style>
                        .size-flex {
                            display: flex;
                            justify-content: space-between;
                            margin-top: 30px;
                        }

                        .size-flex-img {
                            width: 32%;
                        }

                        .size-flex-content {
                            width: 100%;
                            margin-top: 30px;
                        }

                        table td {
                            text-align: center;
                            padding: 7px 5px !important;
                            border-color: #000 !important;
                            font-weight: 600;
                        }

                        .size-t-bottom {
                            margin-top: 50px;
                        }

                        .tabn-qie {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            margin-top: 30px;
                        }

                        .tabn-qie-shu {
                            margin-left: 20px;
                            display: flex;

                        }

                        .tabn-qie-shu>span {
                            background: #301200;
                            color: #fff;
                            margin: 0 5px;

                            padding: 7px 26px;
                            font-size: 14px;
                            border-radius: 5px;
                            cursor: pointer;
                            display: block;
                            width: 100px;
                            text-align: center;
                        }

                        .tabn-qie-shu>span.active {
                            background: #301200;
                            color: #fff;
                            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);

                        }

                        .tbody-inch {
                            display: none;
                        }

                        .tabn-layout table {
                            box-shadow: 0 0 0 0.1rem #000 !important;
                        }

                        .size-botom-flwex {
                            display: flex;
                            margin-top: 30px;

                        }

                        .size-botom-flwex-img {
                            width: 45%;
                        }

                        .size-botom-flwex-content {
                            width: 55%;
                        }

                        .size-botom-flwex-content>h3 {
                            font-size: 20px;
                            font-weight: 600;
                        }

                        .size-botom-flwex-content>p {
                            font-size: 14px;
                            margin: -10px 0 20px;
                        }

                        .tabn-logo {
                            margin: 0 auto;
                            max-width: 200px;
                        }


                        @media(max-width:749px) {
                            .size-flex-img {
                                display: none;
                            }

                            .size-flex-content {
                                width: 100%;
                            }

                            table td {
                                text-align: center;
                                padding: 5px 0px !important;
                                font-size: 12px;
                            }

                            .tabn-logo {
                                max-width: 125px;
                            }

                            .size-botom-flwex {
                                flex-wrap: wrap;
                            }

                            .size-botom-flwex-img {
                                width: 100%;
                            }

                            .size-botom-flwex-content {
                                width: 100%
                            }


                        }
                    </style>
                    <div class="tabn-layout default-box-shadow">

                        <div class="tabn-qie py-4">
                            <div>Measurement:</div>
                            <div class="tabn-qie-shu">
                                <span class="tabn-qie-cm active">CM</span> <span class="tabn-qie-inch">INCH
                                </span>
                            </div>
                        </div>
                        <div class="size-flex px-4">
                            <table style="width: 38%">
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="py-3">Lalaleather Recommended Size Chart:
                                            <span class="cin-inch-sjh">CM</span>
                                        </td>
                                    </tr>
                                    <tr style="background: #a9a9a9;">
                                        <td>SIZE</td>
                                        <td>HEIGHT</td>
                                        <td>KG</td>
                                        <td>CHEST</td>
                                    </tr>
                                    <tr>
                                        <td>XS</td>
                                        <td>&lt;<span class="tbody-cm" style="display: inline;">168</span><span
                                                class="tbody-inch" style="display: none;">5'6"</span>
                                        </td>
                                        <td>&lt;<span class="tbody-cm" style="display: inline;">50KG</span><span
                                                class="tbody-inch" style="display: none;">110lbs</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">102</span><span
                                                class="tbody-inch" style="display: none;">40.2</span>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td>S</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">165</span><span
                                                class="tbody-inch" style="display: none;">5'5</span>-<span
                                                class="tbody-cm" style="display: inline;">170</span><span
                                                class="tbody-inch" style="display: none;">5'7"</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">50-60</span><span
                                                class="tbody-inch" style="display: none;">110-132</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">104</span><span
                                                class="tbody-inch" style="display: none;">40.9</span>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td>M</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">170</span><span
                                                class="tbody-inch" style="display: none;">5'7"</span>-<span
                                                class="tbody-cm" style="display: inline;">180</span><span
                                                class="tbody-inch" style="display: none;">5'11"</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">60-70</span><span
                                                class="tbody-inch" style="display: none;">132-154</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;"> 106</span><span
                                                class="tbody-inch" style="display: none;">41.7</span>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td>L</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">170</span><span
                                                class="tbody-inch" style="display: none;">5'11"</span>-<span
                                                class="tbody-cm" style="display: inline;">185</span><span
                                                class="tbody-inch" style="display: none;">6'1"</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">70-80</span><span
                                                class="tbody-inch" style="display: none;">154-176</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;"> 110</span><span
                                                class="tbody-inch" style="display: none;">43.3</span>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td>XL</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">170</span><span
                                                class="tbody-inch" style="display: none;">5'11"</span>-<span
                                                class="tbody-cm" style="display: inline;">185</span><span
                                                class="tbody-inch" style="display: none;">6'1"</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">80-90</span><span
                                                class="tbody-inch" style="display: none;">176-198</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;"> 114</span><span
                                                class="tbody-inch" style="display: none;">44.9</span>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td>2XL</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">175</span><span
                                                class="tbody-inch" style="display: none;">5'9"</span>-<span
                                                class="tbody-cm" style="display: inline;">185</span><span
                                                class="tbody-inch" style="display: none;">6'1"</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">90-100</span><span
                                                class="tbody-inch" style="display: none;">198-220</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;"> 118</span><span
                                                class="tbody-inch" style="display: none;">46.5</span>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td>3XL</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">180</span><span
                                                class="tbody-inch" style="display: none;">5'11"</span>-<span
                                                class="tbody-cm" style="display: inline;">195</span><span
                                                class="tbody-inch" style="display: none;">6'5"</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">100-110</span><span
                                                class="tbody-inch" style="display: none;">220-243</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;"> 122</span><span
                                                class="tbody-inch" style="display: none;">48</span>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td>4XL</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">180</span><span
                                                class="tbody-inch" style="display: none;">5'11"</span>-<span
                                                class="tbody-cm" style="display: inline;">195</span><span
                                                class="tbody-inch" style="display: none;">6'5"</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">110-120</span><span
                                                class="tbody-inch" style="display: none;">243-264</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;"> 126</span><span
                                                class="tbody-inch" style="display: none;">49.6</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width: 58%">
                                <tbody>
                                    <tr>
                                        <td colspan="9">Lalaleather Jacket Sizing</td>
                                    </tr>
                                    <tr style="background: #a9a9a9;">
                                        <td class="cin-inch-sjh">CM</td>
                                        <td>XS</td>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                        <td>XL</td>
                                        <td>XXL</td>
                                        <td>3XL</td>
                                        <td>4XL</td>
                                    </tr>
                                    <tr>
                                        <td>Shoulder</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">47</span><span
                                                class="tbody-inch" style="display: none;">18.5</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">47.5</span><span
                                                class="tbody-inch" style="display: none;">18.7</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">48</span><span
                                                class="tbody-inch" style="display: none;">18.9</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">49</span><span
                                                class="tbody-inch" style="display: none;">19.3</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">50</span><span
                                                class="tbody-inch" style="display: none;">19.7</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">51</span><span
                                                class="tbody-inch" style="display: none;">20.1</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">52</span><span
                                                class="tbody-inch" style="display: none;">20.5</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">53</span><span
                                                class="tbody-inch" style="display: none;">20.9</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chest</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">108</span><span
                                                class="tbody-inch" style="display: none;">42.5</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">110</span><span
                                                class="tbody-inch" style="display: none;">43.3</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">112</span><span
                                                class="tbody-inch" style="display: none;">44.1</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">116</span><span
                                                class="tbody-inch" style="display: none;">45.7</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">120</span><span
                                                class="tbody-inch" style="display: none;">47.2</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">124</span><span
                                                class="tbody-inch" style="display: none;">48.8</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">128</span><span
                                                class="tbody-inch" style="display: none;">50.4</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">132</span><span
                                                class="tbody-inch" style="display: none;">52</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sleeve length</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">62.5</span><span
                                                class="tbody-inch" style="display: none;">24.6</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">63</span><span
                                                class="tbody-inch" style="display: none;">24.8</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">63.5</span><span
                                                class="tbody-inch" style="display: none;">25</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">64</span><span
                                                class="tbody-inch" style="display: none;">25.2</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">65</span><span
                                                class="tbody-inch" style="display: none;">25.6</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">66</span><span
                                                class="tbody-inch" style="display: none;">26</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">67</span><span
                                                class="tbody-inch" style="display: none;">26.4</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">68</span><span
                                                class="tbody-inch" style="display: none;">26.8</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sleeve width</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">39.4</span><span
                                                class="tbody-inch" style="display: none;">15.5</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">40</span><span
                                                class="tbody-inch" style="display: none;">15.8</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">40.6</span><span
                                                class="tbody-inch" style="display: none;">16</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">41.8</span><span
                                                class="tbody-inch" style="display: none;">16.46</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">43</span><span
                                                class="tbody-inch" style="display: none;">16.9</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">44.3</span><span
                                                class="tbody-inch" style="display: none;">17.4</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">45.6</span><span
                                                class="tbody-inch" style="display: none;">18</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">46.9</span><span
                                                class="tbody-inch" style="display: none;">18.5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wrist</td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">20</span><span
                                                class="tbody-inch" style="display: none;">7.9</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">20.5</span><span
                                                class="tbody-inch" style="display: none;">8.1</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">20.5</span><span
                                                class="tbody-inch" style="display: none;">8.1</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">21.5</span><span
                                                class="tbody-inch" style="display: none;">8.5</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">21.5</span><span
                                                class="tbody-inch" style="display: none;">8.5</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">22</span><span
                                                class="tbody-inch" style="display: none;">8.7</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">22</span><span
                                                class="tbody-inch" style="display: none;">8.7</span>
                                        </td>
                                        <td>
                                            <span class="tbody-cm" style="display: inline;">22.5</span><span
                                                class="tbody-inch" style="display: none;">8.7</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="size-t-bottom">

                        </div>
                        <div class="size-botom-flwex px-4">
                            <div class="size-botom-flwex-img"><img loading="lazy"
                                    srcset="https://cdn.shopify.com/s/files/1/0275/9249/1119/files/size-image.png?v=1692015319">
                            </div>
                            <div class="size-botom-flwex-content px-4">
                                <h3>NECK</h3>
                                <p>Start with a collared shirt that fits you well. Lay the fully buttoned collar
                                    flat.
                                    Measure with tape inside of the collar going around to the far end of
                                    opposite
                                    buttonhole until tape overlaps.</p>
                                <h3>CHEST</h3>
                                <p>Measure just under arms and across shoulder blades holding tape firm and
                                    parallel to
                                    the floor.</p>
                                <h3>SLEEVE LENGTH</h3>
                                <p>With arm relaxed at your side and slightly bent, measure from center back
                                    neck, over
                                    the shoulder, down the outside of the arm to the wrist. Sleeve length is
                                    always in
                                    whole numbers so round up if necessary.</p>
                                <h3>WAIST</h3>
                                <p>With feet together, measure around the fullest point of seat while standing.
                                    It can
                                    be helpful to use a mirror in front of you to guarantee the tape being level
                                    across
                                    the backside.<br> To ensure proper fit, please refer to the fit guide below
                                    and if
                                    you have any questions, please feel free to email us at <a
                                        href="mailto:support@Lalaleather.com">support@Lalaleather.com</a></p>
                            </div>
                        </div>
                    </div>
                    <script>
                        var cmTab = document.querySelector('.tabn-qie-cm');
                        var inchTab = document.querySelector('.tabn-qie-inch');
                        var cinInchElements = document.querySelectorAll('.cin-inch-sjh');
                        var cmElements = document.querySelectorAll('.tbody-cm');
                        var inchElements = document.querySelectorAll('.tbody-inch');

                        function handleCmTabClick() {
                            cmTab.classList.add('active');
                            inchTab.classList.remove('active');

                            cinInchElements.forEach(function(element) {
                                element.textContent = 'CM';
                            });

                            cmElements.forEach(function(element) {
                                element.style.display = 'inline';
                            });

                            inchElements.forEach(function(element) {
                                element.style.display = 'none';
                            });
                        }

                        function handleInchTabClick() {
                            inchTab.classList.add('active');
                            cmTab.classList.remove('active');

                            cinInchElements.forEach(function(element) {
                                element.textContent = 'INCH';
                            });

                            cmElements.forEach(function(element) {
                                element.style.display = 'none';
                            });

                            inchElements.forEach(function(element) {
                                element.style.display = 'inline';
                            });
                        }
                        cmTab.addEventListener('click', handleCmTabClick);
                        inchTab.addEventListener('click', handleInchTabClick);
                    </script>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-faqs" role="tabpanel" aria-labelledby="pills-contact-tab">
                {{-- pills-faqs --}}
                <section class="">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card card-style1 border-0">
                                    <div class="card-body p-4 p-md-5 p-xl-6">
                                        <div id="accordion" class="accordion-style">
                                            @forelse ($product->faqs as $faq)
                                                <div class="card mb-3">
                                                    <div class="card-header" id="heading{{ $faq->id }}">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $faq->id }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse{{ $faq->id }}"><span
                                                                    class="text-theme-secondary me-2">Q.</span>
                                                                {{ $faq->question }}</button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapse{{ $faq->id }}"
                                                        class="collapse {{ $loop->index == '0' ? 'show' : '' }}"
                                                        aria-labelledby="heading{{ $faq->id }}"
                                                        data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            {{ $faq->answer }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                {{-- no FAQs available --}}
                                                <div class="card-header text-center">
                                                    <h5 class="mb-0">
                                                        No FAQs available
                                                    </h5>
                                                </div>
                                            @endforelse

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    @endif

    <!-- Related items section-->
    <section class="py-5 ">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View
                                    options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill">dfdfdfdfdf</div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                    to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                    to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                    to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-modals.modal wire:model="reviewModal" maxWidth="2xl">
            @slot('headerTitle')
                {{ ___('Write a Review') }}
            @endslot

            @slot('content')
                <div class="mt-4">
                    {{-- session existingReview --}}
                    @if (session()->has('existingReview'))
                        <div class="alert alert-danger">
                            {{ session('existingReview') }}
                        </div>
                    @endif

                    {{-- rating --}}
                    {{-- @php $rating @endphp --}}
                    <x-jet-label for="rating" class="text-white" value="{{ ___('Rating') }}" />
                    <div class="flex items-center mt-2">
                        @for ($i = 1; $i <= 5; $i++)
                            <input type="radio" id="star{{ $i }}" name="rating" wire:model="rating"
                                value="{{ $i }}" class="hidden" />
                            <label for="star{{ $i }}" class="text-3xl cursor-pointer"
                                title="{{ $i }} stars">
                                @if ($rating >= $i)
                                    &#9733; {{-- Filled star --}}
                                @else
                                    &#9734; {{-- Unfilled star --}}
                                @endif
                            </label>
                        @endfor
                    </div>
                    @error('rating')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                    {{-- review --}}
                    <x-jet-label for="review" class="text-white" value="{{ ___('Review') }}" />
                    <textarea id="review" class="block mt-1 w-full" wire:model="review" autocomplete="review" maxlength="250"
                        required></textarea>

                    @error('review')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                    {{-- file --}}
                    <x-jet-label for="images" class="text-white" value="{{ ___('Picture/Video (optional):') }}" />

                    <x-form.upload-files style="width: 100%" wire:model="images" fileName="images" perview multiple
                        allowFileTypes="['image/png','image/jpeg','image/jpg','image/gif',]" />
                    @error('images')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror



                </div>

            @endslot

            @slot('footer')
                <x-jet-secondary-button class="btn-cancel" wire:click="$toggle('reviewModal')"
                    wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2 btn-primary" wire:click="storeReview" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-jet-button>
            @endslot
        </x-modals.modal>
        <x-modals.modal wire:model="commentModal" maxWidth="2xl">
            @slot('headerTitle')
                {{ ___('Add Comment') }}
            @endslot

            @slot('content')
                <div class="mt-4">


                    {{-- review --}}
                    <x-jet-label for="comment" class="text-white" value="{{ ___('Comment') }}" />
                    <textarea id="comment" class="block mt-1 w-full" wire:model="comment" autocomplete="comment" maxlength="250"
                        required></textarea>

                    @error('comment')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

            @endslot

            @slot('footer')
                <x-jet-secondary-button class="btn-cancel" wire:click="$toggle('commentModal')"
                    wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2 btn-primary" wire:click="storeComment" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-jet-button>
            @endslot
        </x-modals.modal>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</div>
