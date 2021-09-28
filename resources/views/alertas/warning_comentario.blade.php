@if ($errors->any())
    <div class="alert alert-warning alert-dismissable">
    	<p>¡Atento! Hay algunos cambios antes de volver a enviar el comentario.</p>
		<a><i class="fa fa-exclamation-triangle"></i></a> 
        <ul style="">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
		
    </div>
@endif