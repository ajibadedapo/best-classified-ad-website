<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use Cocur\Slugify\Slugify;
use Carbon\Carbon;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        return view('post-ad')->withCats($cats);

    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/uploads/', $name);
                $data[] = $name;
                ImageOptimizer::optimize(public_path().'/uploads/'.$name);
            }
        }

        $form= new Product();
        $form->filename=json_encode($data);
        $form->title = ucfirst($request->title);
        $slugify = new Slugify();
        $form->slug = $slugify->slugify($request->title .'-'. substr(urlencode(sha1(time())) , 0, 4));
        $form->description = lcfirst($request->description);
        $form->price = $request->price;
        $form->negotiable = $request->negotiable;
        $form->condition = $request->condition;
        $form->name = $request->name;
        $form->email = $request->email;
        $form->phone = $request->phone;
        if (Auth::check())
        $form->user_id = Auth::id();
        $form->state = $request->state;
        $form->lga = $request->lga;
        $form->category_id = $request->category_id;
        $form->live = 0;

        $cat = Category::find($request->category_id);

        $form->save();

        return redirect()->route('viewproduct', ['cat' => $cat->slug, 'slug' => $form->slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewproduct($cat, $slug)
    {
        $product = Product::where('slug', $slug)->first();
       $images  = (explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $product->filename)))));
        $similarproducts = Product::where('category_id', $product->category->id)->latest()->get()->take(6)/*->diff($product)*/;

        // dd($images);
        return view('singleproduct')->withProduct($product)->withImages($images)->withSimilarproducts($similarproducts);
    }


    public function approveroute(Request $request)
    {
        $product = Product::find($request->productid);
        $product->live = 1;
        $product->update();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function reviewpost()
    {
        if (Auth::guest())
            abort(404);
        if (Auth::user()->email != 'ajibadehammed@gmail.com')
            abort(404);

        $products = Product::where('live', 0)->orderBy('created_at', 'desc')->get();
        return view('admin.reviewpost')->withProducts($products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
