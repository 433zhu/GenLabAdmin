@extends('adminlte::page')
@section('title','GLS | '.$title)
@section('content')

<div class="box box-primary">
<div class="box-header">
    <h1>{{$title}}</h1>
    <form method = 'get' action = '{!!url("news")!!}'>
        <button class = 'btn btn-danger'>News Index</button>
    </form>
</div>
<div class="box-body">
    
    <form method = 'POST' action = '{!! url("news")!!}/{!!$news->id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" name = "title" type="text" class="form-control" value="{!!$news->title!!}">
        </div>
         <div class="form-group">
            <label for="news">News Content</label>
            <textarea id="content" name="content" class="textarea form-control" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$news->content}}</textarea> 
        </div>       
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</div>
</div>
@endsection