<div class="form-group">
	{!!form::label('name','nombre del producto')!!}
	{!!form::text('name',null,['class'=>'form-control'])!!}
	
</div>

<div class="form-group">
	{!!form::label('short','descripcion breve del porducto')!!}
	{!!form::text('short',null,['class'=>'form-control'])!!}
	
</div>

<div class="form-group">
	{!!form::label('body','descripcion del producto')!!}
	{!!form::textarea('body',null,['class'=>'form-control'])!!}
	
</div>

<div class="form-group">
	{!!form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
	
</div>