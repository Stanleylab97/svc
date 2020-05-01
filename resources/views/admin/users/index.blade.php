@extends('base')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Utilisateurs</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom et prénoms</th>
                                    <th>Adresse</th>
                                    <th>Genre</th>
                                    <th>Roles</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>{{ $user->genre}}</td>
                                    <td>{{  implode(' | ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                    <td>
                                     @can('edit-users')   
                                      <a href="{{ route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-primary float-left">Editer</button></a>
                                     @endcan
                                     @can('delete-users')
                                        <form action="{{ route('admin.users.destroy', $user->id)}}" method="POST" class="float-left">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-warning">Supprimer</button>
                                        </form>
                                    @endcan
                                    </td>
                                </tr>

                             @endforeach
                                
                            </tbody>
                        </table>

                 </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection