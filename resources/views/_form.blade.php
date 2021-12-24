<div>
    <div class="col-4">
        {!!Form::text('name', 'Nome')!!}
    </div>
    <div class="col-4">
        {!!Form::text('email', 'Email')->type('email')!!}
    </div>
    <div class="col-4">
        {!!Form::textarea('description', 'Descrição')!!}
    </div>
    <div class="col-4">
        {!!Form::submit('Enviar')!!}
    </div>
</div>