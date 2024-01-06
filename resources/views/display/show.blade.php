<!DOCTYPE html>
<html lang="en-US') }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>PirateNConfidential</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('build/images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('build/images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('build/images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('build/images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('build/images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('build/images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('build/images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('build/images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('build/images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ URL::asset('build/images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('build/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('build/images/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('build/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.js') }}on">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::asset('build/images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="{{ URL::asset('build/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ URL::asset('build/libs/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('build/libs/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('build/libs/et-line-font/et-line-font.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('build/libs/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('build/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('build/libs/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{ URL::asset('build/css/style.css') }}" rel="stylesheet">
    <link id="color-scheme" href="{{ URL::asset('build/css/colors/default.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<main>
      
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">PNC</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
              </li>
      </nav>
     
      <div class="main showcase-page">
        <section class="module-extra-small bg-dark">
          <div class="container">
            <div class="row">
              </div>
              <div class="col-sm-3 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Default Sorting</option>
                  <option>Popular</option>
                  <option>Latest</option>
                  <option>Average Price</option>
                  <option>High Price</option>
                  <option>Low Price</option>
                </select>
              </div>
              <div class="col-sm-2 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Woman</option>
                  <option>Man</option>
                </select>
              </div>
              <div class="col-sm-3 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">All</option>
                  <option>Coats</option>
                  <option>Jackets</option>
                  <option>Dresses</option>
                  <option>Jumpsuits</option>
                  <option>Tops</option>
                  <option>Trousers</option>
                </select>
              </div>
              <div class="col-sm-3">
                <button class="btn btn-block btn-round btn-g" type="submit">Apply</button>
              </div>
            </form>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="shop-items">
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product Details</h2>
            </div>
        </div>
    </div>
   
    <div class="shop-item">
        <!-- Check if the item has a related product -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                {{ $display->products->name }}
            </div>
        </div>
    </div>

    @if ($display->isNotEmpty())
    @php
        $itemId = request()->route('id'); // Retrieve the ID from the URL
        $item = \App\Display::with('products')->find($itemId); // Retrieve the item by ID along with its related product
    @endphp

    <!-- Check if the item is found -->
    @if ($item)
        <div class="shop-item">
            <!-- Check if the item has a related product -->
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                {{ $display->$products->name }}
            </div>
        </div>
            @if ($item->products)
                <div class="card-body">
                    <!-- Display image -->
                    @if (file_exists(public_path('uploads/products/' . basename($item->products->image))))
                        <img src="{{ asset('/uploads/products/' . $item->products->image) }}" width="150" height="150" alt="image">
                    @else
                        <!-- No image available -->
                        <p>No image available</p>
                        <!-- Debugging Info -->
                        <ul>
                            <li>Image Path: {{ 'uploads/products/' . basename($item->products->image) }}</li>
                            <li>Asset URL: {{ asset('/uploads/products/' . $item->products->image) }}</li>
                            <li>Storage URL: {{ Storage::disk('public')->url('uploads/products/' . basename($item->products->image)) }}</li>
                        </ul>
                    @endif
                    <!-- Display other product details -->
                    <h4 class="shop-item-title font-alt" style="margin-bottom: 5px;">{{ $item->products->name }}</h4>
                    <p style="margin-bottom: 5px;">RM{{ $item->products->price }}</p>
                    <p style="margin-bottom: 5px;">Discount: {{ $item->products->discount_percentage }}%</p>
                    <p style="margin-bottom: 5px;">RM{{ $item->products->price_after_discount }}</p>
                    <div class="shop-item-detail">
                        <!-- Additional item details or actions -->
                        <a href="{{ route('display.show', $item->id) }}" class="btn btn-round btn-b">
                            <span class="icon-basket">Add To Cart</span>
                        </a>
                    </div>
                </div>
            @else
                <p>No related product found for this item.</p>
            @endif
        </div>
    @else
        <p>Item not found for the specified ID: {{ $itemId }}</p>
    @endif

@else
    <p>No items to display.</p>
@endif

</div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="{{ URL::asset('build/libs/jquery/dist/jquery.js') }}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap/dist/js') }}/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/wow/dist/wow.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ URL::asset('build/libs/isotope/dist/isotope.pkgd.js') }}"></script>
    <script src="{{ URL::asset('build/libs/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ URL::asset('build/libs/flexslider/jquery.flexslider.js') }}"></script>
    <script src="{{ URL::asset('build/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/smoothscroll.js') }}"></script>
    <script src="{{ URL::asset('build/libs/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
    <script src="{{ URL::asset('build/libs/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('build/js/main.js') }}"></script>
  </body>
</html>