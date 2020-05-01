@extends('base')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h3>Edition du compte de {{$user->name}}</h3>
              </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_content">
                    <form id="demo-form2" action="{{route('admin.users.update',$user->id)}}"  method="POST" class="form-horizontal form-label-left" novalidate="">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="col-md-6">
                          <div>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus placeholder="E-mail" required="" />
                            @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                         </div><br>

                         <div>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Nom & prénoms" required="" />
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                         </div><br>
                         
                         <div>
                           <label for="roles">Roles attribués à l'utilisateur :</label><br>
                            @foreach ($roles as $role)
                              <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{$role->id}}"
                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                <label>{{$role->name}}</label>
                              </div>
                            @endforeach
                         </div>
                           
                        
                        </div>
                       
                        
                      
                      
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <a href="{{route('admin.users.index')}}"> <button class="btn btn-default" type="button">Annuler</button></a>
                            </div>
                        </div>

                    </form>
                 </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection