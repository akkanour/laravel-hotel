@extends('layouts.master')
@section('title')
    AKKA Hotel's - Clients
@stop
@section('css')
@endsection
@section('title_2')
    Accueil
@endsection
@section('content-dashboard')
    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                            Ajouter Client
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un client</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('client_add')}}" method="POST">
                                        <div class="modal-body">
                                            {!! csrf_field() !!}
                                            <div class="mb-3">
                                                <label for="nomClient" class="form-label">Nom</label>
                                                <input type="text" class="form-control" id="nomClient" name="nomClient">
                                            </div>
                                            <div class="mb-3">
                                                <label for="prenomClient" class="form-label">Prénom</label>
                                                <input type="text" class="form-control" id="prenomClient" name="prenomClient">
                                            </div>
                                            <div class="mb-3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="gsm" class="form-label">Numéro Téléphone</label>
                                                <input type="text" class="form-control" id="gsm" name="gsm">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nationnalite" class="form-label">Nationnalité</label>
                                                <input type="text" class="form-control" id="nationnalite" name="nationnalite">
                                            </div>
                                            <div class="mb-3">
                                                <label for="cin" class="form-label">CIN</label>
                                                <input type="text" class="form-control" id="cin" name="cin">
                                            </div>
                                            <div class="mb-3">
                                                <label for="numPasseport" class="form-label">Passeport</label>
                                                <input type="text" class="form-control" id="numPasseport" name="numPasseport">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit"  class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Numéro Téléphone</th>
                                    <th>CIN</th>
                                    <th>Nationnalité</th>
                                    <th>Passeport</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ( $clients as $client)
                                    <tr>
                                        <th scope="row">{{ $client->id }}</th>
                                        <td>{{ $client->nomClient }}</td>
                                        <td>{{ $client->prenomClient }}</td>
                                        <td>{{ $client->gsm }}</td>
                                        <td>{{ $client->cin }}</td>
                                        <td>{{ $client->nationnalite }}</td>
                                        <td>{{ $client->numPasseport }}</td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modifier{{$client->id}}">
                                                Modifier
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="Modifier{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="Modifier{{$client->id}}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="Modifier{{$client->id}}" >Mofidier client</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('client_update',$client->id)}}" method="POST">
                                                            <div class="modal-body">
                                                                {!! csrf_field() !!}
                                                                <div class="mb-3">
                                                                    <label for="nom" class="form-label">Nom</label>
                                                                    <input type="text" class="form-control" id="nom" name="nomClient" value="{{$client->nomClient}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="prenomClient" class="form-label">Prénom</label>
                                                                    <input type="text" class="form-control" id="prenomClient" name="prenomClient" value="{{$client->prenomClient}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="gsm" class="form-label">Numéro Téléphone</label>
                                                                    <input type="text" class="form-control" id="gsm" name="gsm" value="{{$client->gsm}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="cin" class="form-label">CIN</label>
                                                                    <input type="text" class="form-control" id="cin" name="cin" value="{{$client->cin}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="nationnalite" class="form-label">Nationnalité</label>
                                                                    <input type="text" class="form-control" id="nationnalite" name="nationnalite" value="{{$client->nationnalite}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="numPasseport" class="form-label">Passeport</label>
                                                                    <input type="text" class="form-control" id="numPasseport" name="numPasseport" value="{{$client->numPasseport}}">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit"  class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->

                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Supprimer">
                                                Supprimer
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="Supprimer" tabindex="-1" role="dialog" aria-labelledby="Supprimer" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="Supprimer">Supprimer client</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a href="{{ route('client_delete',$client->id)}}"><button type="submit"   class="btn btn-primary">Save changes</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection

