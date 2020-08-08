@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light text-center text-uppercase">Services</h1>
@stop

@section('content')
    <!-- Tous les Services -->
    <h2 id="ajoutservice" class="mx-5 text-secondary">Ajouter un Service</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">
        <form action="/service/" method="post">
            @csrf
            <h3 class="mt-3">Titre</h3>
            <input type="text" name="titre" value="" class="form-control bg-dark">
            <h3 class="mt-3">Texte</h3>
            <textarea name="texte" class="form-control bg-dark" cols="30" rows="5"></textarea>
            <h3 class="mt-3">Icone</h3>
            <div class="row m-0">
                <div class="col-10">
                    <div class="row m-0">
                        @foreach ($icones as $icone)
                            <div class="col-1 text-center p-1 m-2">
                                <a id="icone" class="icones btn btn-light text-dark d-flex align-items-center p-1 mx-auto justify-content-center" style="width: 85px; height: 85px;">
                                    <i class="{{$icone->class}} fa-4x"></i>
                                </a>
                                <span style="font-size: small">{{$icone->nom}}</span>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-2 text-center my-auto">
                    <div class="bg-light d-flex align-items-center justify-content-center rounded mx-auto" style="width: 200px; height: 200px;">
                        <i id="bigicone" class="fa-10x"></i>
                    </div>
                    {{-- <span id="icone_id" name='icone_id'></span> --}}
                    <input type="text" name="icone_id" id="icone_id" class="d-none">
                    <span id="inputicone" name="icone" class="text-center"><br></span>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success mx-auto d-flex mt-5">Ajouter le Service</button>
        </form>
    </section>



    <!-- Ajouter une icone -->
    {{-- <h2 id="icone" class="mx-5 text-secondary">Icones</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">
        <h3 class="mt-3">Nom de l'icone:</h3>
        <input type="text" name="nom" value="" class="form-control bg-dark">
        <h3 class="mt-3">Classe Flaticon/Fontawesome :</h3>
        <input type="text" name="class" value="" class="form-control bg-dark">
        <button type="submit" class="btn btn-outline-success mx-auto d-flex mt-5">Ajouter l'icone</button>
    </section> --}}


    <!-- Services disponibles -->
    <h2 id="ttservices" class="mx-5 text-secondary">Tous les Services</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">

        {{-- Les services --}}
        <div class="row m-0">
            @foreach ($services as $service)
                <div class="col-2 p-4 text-center ">
                    {{--  d-flex flex-column align-items-center border border-secondary --}}
                    <form action="/service/{{$service->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <h4>Titre :</h4>
                        <input type="text" name="titre" value="{{$service->titre}}" class="form-control bg-dark">
                        
                        <h4 class="mt-3">Icone :</h4>
                        <div class="text-center mx-auto d-flex flex-column align-items-center">

                            <i class="{{$icones[($service->icone_id) -1]->class}} fa-4x bg-light rounded w-100 " style=""></i>
                            <select name="icone_id" class="form-control bg-dark mt-3 ">
                                <option value="">-- Icone --</option>
                                @foreach ($icones as $icone)
                                    @php
                                        if ($service->icone_id == $icone->id) {
                                            # code...
                                            $select = 'selected';
                                        } else {
                                            # code...
                                            $select = '';
                                        }
                                    @endphp
                                    <option value="{{$icone->id}}" {{$select}}>
                                        {{$icone->nom}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    
                        <h4 class="mt-3">Texte :</h4>
                        <textarea name="texte" rows="5" class="form-control bg-dark">{{$service->texte}}</textarea>
    
                        {{-- Modifier --}}
                        <button type="submit" class="btn btn-outline-light mt-4 w-100">
                            <i class="fas fa-pen"></i> &nbsp;
                            Modifier
                        </button>
                    </form>

                    <form action="/service/{{$service->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        {{-- Supprimer --}}
                        <button type="submit" class="btn btn-outline-danger mt-2 w-100">
                            <i class="fas fa-times" ></i> &nbsp;
                            Supprimer
                        </button>
                    </form>

                </div>
            @endforeach
        </div>
    </section>



    <!-- Services Primés -->
    <h2 id="servicesprimes" class="mx-5 text-secondary">Services primés</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">
        <form action="/servicesprimes/{{$servicesprimes->id}}" method="post">
            @csrf
            @method('PUT')
            <h3 class="mt-3">Titre :</h3>
            <input type="text" name="titre" value="{{$servicesprimes->titre}}" class="form-control bg-dark">
            <span class="text-warning"><b> Mettez les parties du titre à surligner entre : &nbsp; &nbsp; <i class="h4">(=</i> &nbsp; &nbsp; & &nbsp; &nbsp; <i class="h4">=)</i> </b></span>
    
            <h3 class="mt-3">Bouton :</h3>
            <input type="text" name="bouton" value="{{$servicesprimes->bouton}}" class="form-control bg-dark">
    
            <button type="submit" class="btn btn-outline-light mx-auto d-flex mt-5">Enregister</button>
        </form>

    </section>

    <br>
    <br>
@stop
