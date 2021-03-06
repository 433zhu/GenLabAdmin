@extends('adminlte::page_user')
@section('title','GLS | '.$title)
@section('content')

<?php use App\Http\Controllers\TransactionController;?>

<div class="box box-primary">
<div class="box-header">
    <h1>Active Transactions</h1>    
</div>
<div class="box-body">        
    <table class = "dataTable table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
			<th style="width: 30px">CartID</th>
			<th style="width: 30px">TransID</th>			
			<th>Status</th>
            <th>Actions</th>
        </thead>
        <tbody>
			@foreach($carts as $cart) 
				<tr id='{!!$cart->trans_id!!}'>
					<td>{!!$cart->cart_id!!}</td>
					<td><a href="transaction/{!!$cart->trans_id!!}">{!!$cart->trans_id!!}</a></td>								
					<td>
						<strong>
							@if($cart->status == "Completed")
								<font color="green">{!!$cart->status!!}</font>
							@elseif($cart->status == "Released")
								<font color="blue">{!!$cart->status!!}</font>
							@elseif($cart->status == "Prepared")
								<font color="orange">{!!$cart->status!!}</font>
							@elseif($cart->status == "Pending")
								<font color="red">{!!$cart->status!!}</font>
							@else
								<font color="grey">{!!$cart->status!!}</font>
							@endif
						</strong>
					</td>
					<td>
						<a data-toggle="tooltip" title="View Receipt" class = 'btn btn-success btn-sm' href = '/transaction/{{$cart->trans_id}}/show'>INFO</a>
					</td>
				</tr>
			@endforeach
        </tbody>
    </table>
</div>
</div>
@endsection