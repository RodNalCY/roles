<div class="form-group">
  {{ Form::label('name', 'Nombre del Producto') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('description', 'Nombre del Producto') }}
  {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', null, ['class' => 'form-control']) }}
  </div>