@extends('layouts.app')

@section('content')
<div class="alert">
    @include('flash::message')
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('REGISTRARME') }}</div>
                <div class="card-body">
                    <form method="POST" name="registro"  action="{{ action('RegistroController@store')  }}" autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="nombre" class="col-md-4 col-form-label text-md-left">{{ __('NOMBRES') }}</label>
                                <div class="col-md-12">
                                    <input id="name" type="text" name="name" class="form-control Input{{ $errors->has('Nombre') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellido" class="col-md-4 col-form-label text-md-left">{{ __('APELLIDOS') }}</label>
                                <div class="col-md-12">
                                    <input id="apellido" type="text" class="form-control Input{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus>
                                    @if ($errors->has('apellido'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('apellido') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="dni" class="col-md-4 col-form-label text-md-left">{{ __('CEDULA') }}</label>
                                <div class="col-md-12">
                                    <input id="dni" type="text" class="form-control Input{{ $errors->has('dni') ? ' is-invalid' : '' }}" name="dni" value="{{ old('dni') }}" required autofocus>
                                    @if ($errors->has('dni'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dni') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div  class="form-group col-md-6">
                                <label for="fecha_nac" class="col-md-12 col-form-label text-md-left">{{ __('FECHA DE NACIMIENTO') }}</label>
                                <div class="col-md-12">
                                    <input id="fecha_nac" type="date" class="form-control Input{{ $errors->has('fecha_nac') ? ' is-invalid' : '' }}" name="fecha_nac" min="1970-01-01" max="2002-01-01" value="" required autofocus>
                                    @if ($errors->has('fecha_nac'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fecha_nac') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="direccion" class="col-md-4 col-form-label text-md-left">{{ __('DIRECCIÓN') }}</label>
                                <div class="col-md-12">
                                    <textarea rows="4" cols="50" id="direccion"class="form-control Input{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus></textarea>
                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tlf_contacto" class="col-md-8 col-form-label text-md-left">{{ __('TELÉFONO DE CONTACTO') }}</label>
                                <div class="col-md-12">
                                    <input id="tlf_contacto" type="text" class="form-control Input{{ $errors->has('tlf_contacto') ? ' is-invalid' : '' }}" name="tlf_contacto" value="{{ old('tlf_contacto') }}" required autofocus>
                                    @if ($errors->has('tlf_contacto'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tlf_contacto') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="tlf_secundario" class="col-md-12 col-form-label text-md-left">{{ __('TELÉFONO SECUNDARIO') }}</label>
                                <div class="col-md-12">
                                    <input id="tlf_secundario" type="text" class="form-control Input{{ $errors->has('tlf_secundario') ? ' is-invalid' : '' }}" name="tlf_secundario" value="{{ old('tlf_secundario') }}" required autofocus>
                                    @if ($errors->has('tlf_secundario'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tlf_secundario') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('CORREO ELÉCTRONICO') }}</label>
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control Input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('CONTRASEÑA') }}</label>
                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control Input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                           </div>
                           <div class="form-group col-md-6">
                                <label for="passwordConfirm" class="col-md-12 col-form-label text-md-left">{{ __('CONFIRMAR CONTRASEÑA') }}</label>
                                <div class="col-md-10">
                                    <input id="passwordConfirm" type="password" class="form-control Input" name="passwordConfirm" required>
                                    <div id="error2"></div>
                                </div>    
                           </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary BtnR" id="submit"value="submit" disabled>
                                    {{ __('REGISTRAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>


<script type="text/javascript">
    $(document).ready(function() {
    $('#passwordConfirm').keyup(function() {
    var password = $('#password').val();
    var passwordConfirm = $('#passwordConfirm').val();

    if ( password == passwordConfirm ) {
        $('#error2').css("background", "url(img/admin/check.png)");
        $( "#submit" ).prop( "disabled", false );

    } else {
        $('#error2').css("background", "url(img/admin/check-.png)");
        $( "#submit" ).prop( "disabled", true );

    }

});

}); 
</script>

<script type="text/javascript">
    window.addEventListener("load", function() {
    registro.name.addEventListener("keypress", soloLetras, false);
    });

//Solo permite introducir letras.
function soloLetras(e){
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
    event.preventDefault();
    return false;
  }
}
</script>
<script type="text/javascript">
    window.addEventListener("load", function(){
        registro.apellido.addEventListener("keypress", soloLetras, false);
    });
    //Solo permite introducir letras.
    function soloLetras(e){
        var regex = new RegExp("^[a-zA-Z ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
        event.preventDefault();
        return false;
  }
    }
</script>

<script type="text/javascript">
    window.addEventListener("load", function() {
      registro.tlf_contacto.addEventListener("keypress", soloNumeros, false);
    });
    
    //Solo permite introducir numeros.
    function soloNumeros(e){
      var key = window.event ? e.which : e.keyCode;
      if (key < 48 || key > 57) {
        e.preventDefault();
      }
    }
</script>
<script type="text/javascript">
    window.addEventListener("load", function() {
      registro.tlf_secundario.addEventListener("keypress", soloNumeros, false);
    });
    
    //Solo permite introducir numeros.
    function soloNumeros(e){
      var key = window.event ? e.which : e.keyCode;
      if (key < 48 || key > 57) {
        e.preventDefault();
      }
    }
</script>
<script type="text/javascript">
    window.addEventListener("load", function() {
      registro.dni.addEventListener("keypress", soloNumeros, false);
    });
    
    //Solo permite introducir numeros.
    function soloNumeros(e){
      var key = window.event ? e.which : e.keyCode;
      if (key < 48 || key > 57) {
        e.preventDefault();
      }
    }
</script>

@endsection
