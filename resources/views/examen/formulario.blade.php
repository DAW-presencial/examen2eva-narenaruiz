@extends('examen.layout')

@section('title', 'Formulario')

@section('content')

<div class="container">
  <div class="container">
    <h1>Formulario:</h1>
    <h4>Lista De Errores:</h4>
    @if($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </div>
  <div class="container">
  <!-- Formulario de bootstrap con validacion -->
    <form class="needs-validation" method="POST" action="{{ route('tutores.store') }}">
      @csrf
      <div class="col-md-6 mb-3">
        <label for="empresa"><b>{{ __('Business') }}</b></label>
        <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Jose antonio" value="{{ old('empresa') }}" required >
        {!! $errors->first('empresa', '<small>:message</small>') !!}
      </div>
      <fieldset class="form-group">
        <div class="row">
          <b class="col-form-label col-sm-1 pt-0">{{ __('Document Type') }}</b>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipoDocumento" value="dni" {{ (old('titularidad') == "dni") ? "checked" : ""}} id="dni">
              <label class="form-check-label" for="dni">
                {{ __('DNI') }}
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipoDocumento" value="otro" {{ (old('titularidad') == "otro") ? "checked" : ""}} id="otro">
              <label class="form-check-label" for="otro">
                {{ __('Other') }}
              </label>
            </div>
            {!! $errors->first('tipoDocumento', '<small>:message</small>') !!}
          </div>
        </div>
      </fieldset>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="documentoIdentidad"><b>{{ __('Identity Document') }}</b></label>
          <input type="text" class="form-control" name="documentoIdentidad" id="documentoIdentidad" placeholder="" value="{{ old('documentoIdentidad') }}" required >
          {!! $errors->first('documentoIdentidad', '<small>:message</small>') !!}
        </div>
        <div class="col-md-6 mb-3">
          <label for="name"><b>{{ __('Name') }}</b></label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Nicolás" value="{{ old('name') }}" required >
          {!! $errors->first('name', '<small>:message</small>') !!}
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="apellido1"><b>{{ __('Surname 1') }}</b></label>
          <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="Arena" value="{{ old('apellido1') }}" required >
          {!! $errors->first('apellido1', '<small>:message</small>') !!}
        </div>
        <div class="col-md-6 mb-3">
          <label for="apellido2"><b>{{ __('Surname 2') }}</b></label>
          <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="Ruiz" value="{{ old('apellido2') }}" required >
          {!! $errors->first('apellido2', '<small>:message</small>') !!}
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="pais"><b>{{ __('Country') }}</b></label>
          <input type="text" class="form-control" name="pais" id="pais" placeholder="España" value="{{ old('pais') }}" >
          {!! $errors->first('pais', '<small>:message</small>') !!}
        </div>
        <div class="col-md-6 mb-3">
          <label for="provincia"><b>{{ __('Province') }}</b></label>
          <input type="text" class="form-control" name="provincia" id="provincia" placeholder="" value="{{ old('provincia') }}" >
          {!! $errors->first('provincia', '<small>:message</small>') !!}
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="municipio"><b>{{ __('Municipality') }}</b></label>
          <input type="text" class="form-control" name="municipio" id="municipio" placeholder="" value="{{ old('municipio') }}" >
          {!! $errors->first('municipio', '<small>:message</small>') !!}
        </div>
        <div class="col-md-6 mb-3">
          <label for="estado" class="form-label">{{ __('Status') }}</label>
          <select class="form-control" name='estado' id="estado">
              <option value="continua" @if (old('estado') === 'activo') selected @endif>{{ __('Active') }}</option>
              <option value="partida" @if (old('estado') === 'inactivo') selected @endif>{{ __('Inactive') }}</option>
          </select>
      </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="telefono"><b>{{ __('Phone') }}</b></label>
          <input type="number" class="form-control" name="telefono" id="telefono" placeholder="971231231" value="{{ old('telefono') }}" required >
          {!! $errors->first('telefono', '<small>:message</small>') !!}
        </div>
        <div class="col-md-6 mb-3">
          <label for="email"><b>{{ __('E-Mail Address') }}</b></label>
          <input type="text" class="form-control" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required >
          {!! $errors->first('email', '<small>:message</small>') !!}
        </div>
      </div>
      <button class="btn btn-primary" type="submit">{{ __('Register') }}</button>
    </form>
  </div>
</div>
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

@endsection