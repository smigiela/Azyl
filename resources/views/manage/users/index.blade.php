@extends('layouts.manage')

@section('content')

  <div class="flex-container">
   <div class="columns">
     <div class="column">
       <h1 class="title">Zarządzanie użytkownikami</h1>
     </div>
     <div class="column has-text-right">
       <a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i>Dodaj użytkownika</a>
     </div>
   </div>

   <div class="card">
     <div class="card-content">
       <table class="table is-narrow">
         <thead>
           <tr>
             <th>id</th>
             <th>Imię</th>
             <th>Email</th>
             <th>Data utworzenia</th>
             <th>Akcje</th>
           </tr>
         </thead>
         <tbody>
           @foreach ($users as $user)
             <tr>
               <th>{{$user->id}}</th>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->created_at->toFormattedDateString()}}</td>
               <td><a class="button is-outline" href="{{route('users.edit', $user->id)}}">Edytuj</a></td>
             </tr>

           @endforeach
         </tbody>
       </table>
     </div>
   </div><!--end of card -->
   {{$users->links()}}
  </div>

@endsection
