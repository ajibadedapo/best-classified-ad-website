<header>
    <div class="w3ls-header"><!--header-one-->
        <div class="w3ls-header-left">
            <p><a href="/"><i class="fa fa-buysellads" aria-hidden="true"></i>{{config('app.name')}}</a></p>
        </div>
        <div class="w3ls-header-right">
            <ul>
                <li class="dropdown head-dpdn">
                @if(Auth::check())
                    <a href="{{ url('/logout') }}" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> logout </a>
                    @else
                        <a href="{{ url('/login') }}" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> login/Register </a>
                    @endif

                </li>
                <li class="dropdown head-dpdn">
                    <a href="/howitworks"><i class="fa fa-question-circle" aria-hidden="true"></i> How it works</a>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="/about-us"><i class="fa fa-globe" aria-hidden="true"></i>about us</a>
                </li>
                <li class="dropdown head-dpdn">
                    <div class="header-right">
                        <!-- Large modal -->
                        <div class="agile-its-selectregion">
                            @if(Auth::check())
                            <a href="{{route('viewseller', [Auth::user()->slug])}}">
                            <button class="btn btn-primary" >
                                <i class="fa fa-user" aria-hidden="true"></i>Profile</button>
                            </a>
                            @endif
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                &times;</button>
                                            <h4 class="modal-title" id="myModalLabel">
                                                Please Choose Your Location</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="#" method="get">
                                                <div class="form-group">
                                                    <select id="basic2" class="show-tick form-control" multiple>
                                                                                                         </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
    <div class="container">
        <div class="agile-its-header">
            <div class="logo">
                <h1><a href="/"><span>AJIBADE</span>HAMMED</a></h1>
            </div>
            <div class="agileits_search">
                <form method="get" action="{{route('categorysearch')}}">
                    <input  type="text" @if(isset($searchquery)) value="{{$searchquery}}" @endif name="searchquery" placeholder="How can we help you today?" required="" />
                    <select id="agileinfo_search" name="category" required="">
                        <option value="all">All Categories</option>
                        @foreach(\App\Category::all() as $category)
                            <option  @if(isset($_GET['category'])) @if($_GET['category']==$category->id) selected @endif @endif value="{{$category->id}}" > {{$category->name}}</option>
                            @endforeach
                    </select>
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                </form>
                <a class="post-w3layouts-ad" href="{{route('postform')}}">Post Free Ad</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>