@extends('main')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js" type="text/javascript"></script>

    <div class="container post-container">
        <div class="col-md-8 wrap ">
            {{--Content--}}
            <div class="row">
                <div class="pos">


                    <div class="container">
                        <div class="page-header">
                            <h1>Manage Submitted Articles{{-- <a  class="btn btn-lg btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Nová aktualita</a>--}}</h1>
                        </div>
                    </div>

                    <div class="container" id="reviewapp">
                        <div class="panel panel-default">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr id="product{{$product->id}}" v-show="product{{$product->id}}">
                                        <td>{{$product->created_at}}</td>
                                        <td><a href="{{route('viewproduct', [$product->category->slug, $product->slug])}}">{{$product->title}}</a></td>
                                        <td data-article_id="{{$product->id}}">
                                            <button type="button" v-on:click="approve({{$product->id}})"  class="approvearticle btn btn-default btn-xs actionbtn"><span class="fa fa-mark"></span>Approve</button>
                                            <button type="button" v-on:click="" class="deletearticle {{$product->id}} btn btn-danger actionbtn btn-xs"><span class="fa fa-delete"></span> Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--//banner-->

        <!--1-->
    </div>

    <script>
        new Vue({
           el: "#reviewapp",
            data: {

            },
            methods:{
               approve: function (productid) {
                   $.ajax({
                       method: 'POST',
                       url: '/approveroute',
                       data:{'productid': productid},
                       success: function () {
                            console.log('succeed')
                           $('#product'+ productid).hide();
                       }
                   });
               },

               disprove: function () {

               }
            }
        });
    </script>

@endsection