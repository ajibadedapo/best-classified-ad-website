<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\State;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function regions()
    {
        $states = State::all();

      //($states[0]->localGovernments);

        return view('regions')->withStates($states);

    }

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->where('live', 1)->get()->take(8);
       // $images  = (explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $product->filename)))));
        $category = null;
        return view('index')->withCategory($category)->withProducts($products);
    }

    public function viewcategory($cat)
    {
        $category = Category::where('slug', $cat)->first();
        $products = Product::where('category_id', $category->id)->orderBy('created_at', 'desc')->where('live', 1)->paginate(15);
        //dd($category);
        if (isset($_GET['sort']))
        {
            if ($_GET['sort']== 'l2h')
            {
                $products = Product::where('category_id', $category->id)->where('live', 1)->orderBy('price', 'asc')->paginate(15);

            }elseif ($_GET['sort']== 'h2l')
            {
                $products = Product::where('category_id', $category->id)->where('live', 1)->orderBy('price', 'desc')->paginate(15);
            }
        }
       // $states = State::all();

        return view('categorydetail')->withCategory($category)->withProducts($products);
    }

    public function viewseller($slug)
    {
        $user = User::where('slug', $slug)->first();
        //dd($category);
        $products = Product::where('user_id', $user->id)->where('live', 1)->orderBy('created_at', 'desc')->get();
       // $states = State::all();

        return view('viewseller')->withUser($user)->withProducts($products);
    }

    public function localsearch(Request $request)
    {

        $products = Product::where('state', $request->state)->where('lga', $request->lga)->where('title', 'LIKE', '%'. $request->searchquery .'%')->orderBy('created_at', 'desc')->where('live', 1)->paginate(15);
        $category = null;
        if (isset($_GET['sort']))
        {
            if ($_GET['sort']== 'l2h')
            {
                $products=Product::where('state', $request->state)->where('lga', $request->lga)->where('title', 'LIKE', '%'. $request->searchquery .'%')->where('live', 1)->orderBy('price', 'asc')->paginate(15);

            }elseif ($_GET['sort']== 'h2l')
            {
                $products = Product::where('state', $request->state)->where('lga', $request->lga)->where('title', 'LIKE', '%'. $request->searchquery .'%')->where('live', 1)->orderBy('price', 'desc')->paginate(15);
            }
        }

        return view('categorydetail')->withCategory($category)->withProducts($products)->withSearchquery($request->searchquery)
            ->withLocationsearch(1);
    }

    public function categorysearch(Request $request)
    {

        if ($request->category == 'all')
        {
            $category = null;
            $products = Product::where('title', 'LIKE', '%'. $request->searchquery .'%')->orderBy('created_at', 'desc')->where('live', 1)->paginate(15);

            if (isset($_GET['sort']))
            {
                if ($_GET['sort']== 'l2h')
                {
                   $products = Product::where('title', 'LIKE', '%'. $request->searchquery .'%')->where('live', 1)->orderBy('price', 'asc')->paginate(15);

                }elseif ($_GET['sort']== 'h2l')
                {
                   $products = Product::where('title', 'LIKE', '%'. $request->searchquery .'%')->where('live', 1)->orderBy('price', 'desc')->paginate(15);
                }
            }

        }else{
            $category = Category::find($request->category)->first();
            $products = Product::where('category_id', $request->category)->where('title', 'LIKE', '%'. $request->searchquery .'%')->where('live', 1)->paginate(15);

            if (isset($_GET['sort']))
            {
                if ($_GET['sort']== 'l2h')
                {
                    $products = Product::where('category_id', $request->category)->where('title', 'LIKE', '%'. $request->searchquery .'%')->where('live', 1)->orderBy('price', 'asc')->paginate(15);

                }elseif ($_GET['sort']== 'h2l')
                {
                    $products = Product::where('category_id', $request->category)->where('title', 'LIKE', '%'. $request->searchquery .'%')->where('live', 1)->orderBy('price', 'desc')->paginate(15);
                }
            }

        }
        return view('categorydetail')->withCategory($category)->withProducts($products)->withSearchquery($request->searchquery)
            ->withCatsearch(1);
    }

    public function all_listings()
    {
        $products = Product::orderBy('created_at', 'desc')->where('live', 1)->paginate(15);
        $category = null;

        if (isset($_GET['sort']))
        {
            if ($_GET['sort']== 'l2h')
            {
                $products = Product::where('live', 1)->orderBy('price', 'asc')->paginate(15);

            }elseif ($_GET['sort']== 'h2l')
            {
                $products = Product::where('live', 1)->orderBy('price', 'desc')->paginate(15);
            }
        }
        $all_listings =1;
        return view('categorydetail')->withCategory($category)->withProducts($products)->withAlllistings($all_listings);
    }
}
