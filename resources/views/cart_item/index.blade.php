@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        ADMIN: Cart_item Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("cart_item")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New cart_item</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>cart_id</th>
            <th>item_id</th>
            <th>qty</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($cart_items as $cart_item) 
            <tr>
                <td>{!!$cart_item->cart_id!!}</td>
                <td>{!!$cart_item->item_id!!}</td>
                <td>{!!$cart_item->qty!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/cart_item/{!!$cart_item->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/cart_item/{!!$cart_item->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/cart_item/{!!$cart_item->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $cart_items->render() !!}

</section>
@endsection