
@if((auth()->user()->can('user.name.edit') && $formMode === 'edit') || $formMode === 'create')
<div class="form-group {{ $errors->has('roles') ? 'has-error' : ''}}">
    {!! Form::label('roles', 'Role', ['class' => 'control-label']) !!}
    {!! Form::select('roles[]', $roles, isset($oldRoles)?$oldRoles:null, ['class' => 'form-control', 'id' => 'roles', 'data-toggle'=>'select2', 'multiple'] ) !!}
    {!! $errors->first('roles', '<p class="help-block">:message</p>') !!}
</div>
@endif

@if((auth()->user()->can('user.name.edit') && $formMode === 'edit') || $formMode === 'create')
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
@endif

@if((auth()->user()->can('user.email.edit') && $formMode === 'edit') || $formMode === 'create')
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
@endif

@if((auth()->user()->can('user.password.edit') && $formMode === 'edit') || $formMode === 'create')
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
@endif

@if((auth()->user()->can('user.mobile.edit') && $formMode === 'edit') || $formMode === 'create')
<div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
    {!! Form::label('mobile', 'Mobile', ['class' => 'control-label']) !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
    {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
</div>
@endif

@if((auth()->user()->can('user.address.edit') && $formMode === 'edit') || $formMode === 'create')
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'control-label']) !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
@endif

@if((auth()->user()->can('user.image.edit') && $formMode === 'edit') || $formMode === 'create')
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
@endif

@if((auth()->user()->can('user.type.edit') && $formMode === 'edit') || $formMode === 'create')
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    {!! Form::label('type', 'Type', ['class' => 'control-label']) !!}
    {!! Form::select('type', $types, old('type'), ['class' => 'form-control']) !!}
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
@endif

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
