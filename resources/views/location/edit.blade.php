	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		<h4 class="modal-title">{!! trans('messages.edit').' '.trans('messages.location') !!}</h4>
	</div>
	<div class="modal-body">
		{!! Form::model($location,['method' => 'PATCH','route' => ['location.update',$location] ,'class' => 'location-form','id' => 'location-form-edit','data-form-table' => 'location_table']) !!}
			@include('location._form', ['buttonText' => trans('messages.update')])
		{!! Form::close() !!}
		<div class="clear"></div>
	</div>
	<div class="modal-footer">
	</div>