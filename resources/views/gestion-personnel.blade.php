@extends('layouts.master')
@section('title')
    AKKA Hotel's - Personnels
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
                            Ajouter Personnel
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un personnel</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('personnel_add')}}" method="POST">
                                        <div class="modal-body">
                                            {!! csrf_field() !!}
                                            <div class="mb-3">
                                                <label for="nom" class="form-label">Nom</label>
                                                <input type="text" class="form-control" id="nom" name="nom">
                                            </div>
                                            <div class="mb-3">
                                                <label for="prenom" class="form-label">Prénom</label>
                                                <input type="text" class="form-control" id="prenom" name="prenom">
                                            </div>
                                            <div class="mb-3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="numTel" class="form-label">Numéro</label>
                                                <input type="text" class="form-control" id="numTel" name="numTel">
                                            </div>
                                            <div class="mb-3">
                                                <label for="adresse" class="form-label">Adresse</label>
                                                <input type="text" class="form-control" id="adresse" name="adresse">
                                            </div>
                                            <div class="mb-3">
                                                <label for="typePoste" class="form-label">Type Poste</label>
                                                    <select name="typePoste" id="typePoste">
                                                        <option value="Directeur">Directeur</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Receptionniste">Receptionniste</option>
                                                        <option value="ValetDeChambre">ValetDeChambre</option>
                                                        <option value="Serveur">Serveur</option>
                                                        <option value="Employe">Employe</option>
                                                    </select>
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
                                    <th>Adresse</th>
                                    <th>Poste</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ( $personnels as $personnel)
                                    <tr>
                                        <th scope="row">{{ $personnel->id }}</th>
                                        <td>{{ $personnel->nom }}</td>
                                        <td>{{ $personnel->prenom }}</td>
                                        <td>{{ $personnel->numTel }}</td>
                                        <td>{{ $personnel->adresse }}</td>
                                        <td>{{ $personnel->typePoste }}</td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modifier{{$personnel->id}}">
                                                Modifier
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="Modifier{{$personnel->id}}" tabindex="-1" role="dialog" aria-labelledby="Modifier{{$personnel->id}}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="Modifier{{$personnel->id}}" >Mofidier Personnel</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('personnel_update',$personnel->id)}}" method="POST">
                                                            <div class="modal-body">
                                                                {!! csrf_field() !!}
                                                                <div class="mb-3">
                                                                    <label for="nom" class="form-label">Nom</label>
                                                                    <input type="text" class="form-control" id="nom" name="nom" value="{{$personnel->nom}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="prenom" class="form-label">Prénom</label>
                                                                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{$personnel->prenom}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="numTel" class="form-label">Numéro</label>
                                                                    <input type="text" class="form-control" id="numTel" name="numTel" value="{{$personnel->numTel}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="adresse" class="form-label">Adresse</label>
                                                                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{$personnel->adresse}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="typePoste" class="form-label">Type Poste</label>
                                                                    <select name="typePoste" id="typePoste">
                                                                        <option value="{{$personnel->typePoste}}">{{$personnel->typePoste}}</option>
                                                                        <option value="Directeur">Directeur</option>
                                                                        <option value="Manager">Manager</option>
                                                                        <option value="Receptionniste">Receptionniste</option>
                                                                        <option value="ValetDeChambre">ValetDeChambre</option>
                                                                        <option value="Serveur">Serveur</option>
                                                                        <option value="Employe">Employe</option>
                                                                    </select>
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
                                                            <h5 class="modal-title" id="Supprimer">Supprimer personnel</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a href="{{ route('personnel_delete',$personnel->id)}}"><button type="submit"   class="btn btn-primary">Save changes</button></a>
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
