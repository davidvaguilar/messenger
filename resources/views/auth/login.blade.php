@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de sesion">
               <b-alert show>Por favor ingresa tus datos</b-alert>

               <b-form method="POST" action="{{ route('login') }}">
                   {{ csrf_field() }}

                  <b-form-group
                        label="Correo electronico" label-for="email"
                        description="Nunca compatiremos tu correo. Esta seguro con nosotros." >
                    <b-form-input type="email"
                        id="email" name="email"
                        value="{{ old('email') }}" autofocus required
                        placeholder="ejemplo@correo.cl">
                    </b-form-input>
                  </b-form-group>

                  <b-form-group
                        label="Coontraseña" label-for="password"
                        description="Nunca compatiremos tu correo. Esta seguro con nosotros." >
                    <b-form-input type="password"
                        id="password" name="password"
                        value="{{ old('password') }}" required>
                    </b-form-input>
                  </b-form-group>

                  <b-form-group>
                    <b-form-checkbox name="remember"
                          {{ old('remember') ? 'checked="true"' : '' }}> Recordar sesión
                    </b-form-checkbox>
                  </b-form-group>

                  <b-button type="submit"
                        variant="primary">Ingresar
                  </b-button>

                  <b-button href="{{ route('password.request') }}"
                        variant="link">¿Olvidaste tu contraseña?
                  </b-button>

               </b-form>
             </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
