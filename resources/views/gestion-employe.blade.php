@extends('layouts.master')
@section('title')
    AKKA Hotel's - Personnels
@stop
@section('css')
@endsection
@section('title_2')
    Dashboard
@endsection
@section('content-gestion-employe')
    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                            Ajouter chambre
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter une chambre</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('chambre_add')}}" method="POST">
                                        <div class="modal-body">
                                            {!! csrf_field() !!}
                                            <div class="mb-3">
                                                <label for="numChambre" class="form-label">Numéo Chambre</label>
                                                <input type="text" class="form-control" id="numChambre" name="numChambre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="dispo" class="form-label">Disponibilité</label>
                                                <input type="text" class="form-control" id="dispo" name="dispo">
                                            </div>
                                            <div class="mb-3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="prix" class="form-label">Prix</label>
                                                <input type="text" class="form-control" id="prix" name="prix">
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
                                    <th>Numero Chambre</th>
                                    <th>Disponibilité</th>
                                    <th>Prix</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ( $chambres as $chambre)
                                    <tr>
                                        <th scope="row">{{ $chambre->id }}</th>
                                        <td>{{ $chambre->numChambre }}</td>
                                        <td>{{ $chambre->dispo }}</td>
                                        <td>{{ $chambre->prix }}</td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modifier{{$chambre->id}}">
                                                Modifier
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="Modifier{{$chambre->id}}" tabindex="-1" role="dialog" aria-labelledby="Modifier{{$chambre->id}}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="Modifier{{$chambre->id}}" >Mofidier une chambre</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('chambre_update',$chambre->id)}}" method="POST">
                                                            <div class="modal-body">
                                                                {!! csrf_field() !!}
                                                                <div class="mb-3">
                                                                    <label for="numChambre" class="form-label">Numéo Chambre</label>
                                                                    <input type="text" class="form-control" id="numChambre" name="numChambre" value="{{$chambre->numChambre}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="dispo" class="form-label">Disponibilité</label>
                                                                    <input type="text" class="form-control" id="dispo" name="dispo" value="{{$chambre->dispo}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="prix" class="form-label">Prix</label>
                                                                    <input type="text" class="form-control" id="prix" name="prix" value="{{$chambre->prix}}">
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
                                                            <h5 class="modal-title" id="Supprimer">Supprimer une chambre</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        {{--<form action="{{ route('chambre_delete',$chambre->id)}}" method="DELETE">
                                                        {!! csrf_field() !!}

                                                        </form>--}}
                                                        <div class="modal-body">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a href="{{ route('chambre_delete',$chambre->id)}}"><button type="submit"   class="btn btn-primary">Save changes</button></a>
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
