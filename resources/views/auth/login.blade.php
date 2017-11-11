@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Zaloguj się</h1>


                <form action="{{route('login')}}" method="POST" role="form">
                    {{ csrf_field() }}
                <div class="field">
                    <label for="email" class="label">Adres email</label>
                    <p class="control">
                        <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                    </p>
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                    
                </div>

                <div class="field">
                    <label for="password" class="label">Hasło</label>
                    <p class="control">
                        <input class="input  {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" placeholder="Hasło">
                    </p>
                    @if ($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>

                <b-checkbox name="remember" class="m-t-20">Pamiętaj mnie</b-checkbox>

                <button class="button is-primary is-outlined is-fullwidth m-t-30">Zaloguj</button>
                </form>
            </div> <!-- end of card-content -->
          </div><!-- end of action form -->
          <h5 class="has-text-centered m-t-15"><a href="{{ route('password.request') }}" class="is-muted">Zapomniałeś hasła?</a></h5>
    </div>
</div>
@endsection
