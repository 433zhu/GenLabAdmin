@extends('adminlte::page')
@section('title','Show')
@section('content')
<style>
    .dropdown{
        background-color: green;
        color: white;
    }
</style>
<section class='content'>
<div class="box box-primary">
<div class="box-header">
    <h1>Show cart</h1>
    <form method = 'GET'>
         @if($searchWord != "")
            Showing search results for "<b>{{$searchWord}}</b>".
        @endif
        <div class="input-group" >
            <input type="text" name="search" class="form-control pull-right" placeholder="Search" value='{!!$searchWord!!}'>
            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
    <br>
    <form method = 'get' action = '{!!url("cart")!!}'>
        <button class = 'btn btn-primary'>cart Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>borrower: </i></b>
                </td>
                <td>{!!$cart->borrower_id!!} : {!!\Helper::student_name($cart->borrower_id);!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>status: </i></b>
                </td>
                <td>{!!$cart->status!!}</td>
            </tr>
            <tr>
                 <td><b><i>subject: </i></b>
                 <td>{!!$cart->subject!!}</td>
            </tr>
            <tr>
                <td><b><i>group members: </i></b>
                <td>
                @foreach($groupmembers as $member)
                    <li>{!!$member->user_id!!} : {!!\Helper::student_name($member->user_id);!!}</li>
                @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="box-body">
    <form method = 'POST' action = '/transaction/{!!$transaction->id!!}/prepare'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
            <thead>
                <th>item_id</th>
                <th>qty</th>
                <th>actions</th>
            </thead>
            <tbody>
                @foreach($cart_items as $cart_item) 
                <tr>
                    <td>{!!$cart_item->item_id!!}</td>
                    <td>{!!$cart_item->qty!!}</td>
                    <td>
                        <a href = '{!!url("cart")."/".$cart_item->cart_id!!}' data-link='/cart_item/{!!$cart_item->id!!}/delete' class = 'delete btn btn-danger btn-xs'><i class = 'material-icons'>delete</i></a>
                        <a href = '/cart_item/{!!$cart_item->id!!}/edit' class = 'viewEdit btn btn-warning btn-xs' data-link = '/cart_item/{!!$cart_item->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '/item/{!!$cart_item->id!!}' data-toggle="modal" data-target="#myModal" class = 'delete btn btn-primary btn-xs' data-link = "/item/{!!$cart_item->id!!}/showModal" ><i class="fa fa-info" aria-hidden="true"></i>  Item Info</a>
                        <select name="status_{!!$cart_item->id!!}" class="dropdown btn btn-xs">
                          <option value="0">Not Available</option>
                          <option value="1">Released</option>
                          <option value="2">Damaged</option>
                          <option value="3">Returned</option>
                        </select>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
        <button class = 'btn btn-primary' type ='submit'>Ready</button
>    </form>
</div>
</div>
</section>
@endsection