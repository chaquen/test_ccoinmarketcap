<div>
	
	
	

	<select>
	@forelse  (json_decode($data) as $js)
	    <option value="{{$js->id}}">{{ $js->name." (".$js->symbol.")"}}</option>
	@empty
	    <select>
	    	<option value="#">Ho hay datos</option>
	@endforelse
	</select>
	

</div>