
<div class="trending-ads">
    <div class="container">
        <!-- slider -->
        <div class="agile-trend-ads">
            <h2>Recently Uploaded Ads</h2>
            @foreach($products as $product)
            <div class="col-md-3 biseller-column">
                <a href="{{route('viewproduct', ['cat' => $product->category->slug, 'slug' => $product->slug])}}/">
                    <img class="productimg" src="{{asset('uploads/'.(explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $product->filename)))))[0])}}" alt="" />
                    <span class="price">&#36; {{$product->price}}</span>
                </a>
                <div class="w3-ad-info">
                    <h5>{{$product->title}}</h5>
                    <span>{{$product->created_at->diffForHumans()}}</span>
                </div>
            </div>
                @endforeach

        </div>
    </div>
    <!-- //slider -->
</div>