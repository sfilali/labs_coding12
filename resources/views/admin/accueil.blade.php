@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light text-center text-uppercase">Accueil</h1>
@stop

@section('content')

    <!-- MENU -->
    <h2 id="menu" class="mx-5 text-secondary">Menu</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">

        <form action="/accueil/{{$accueils->id}}" method="POST">
            @csrf
            @method('PUT')


            <div class="card card-teal">
                <div class="card-header">
                    <h3 class="card-title text-center">Logo</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body bg-dark" style="display: block;">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            {{-- <a href="{{$accueils->urlmenulogo}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery" class="mx-auto"> --}}
                                {{-- <div class="mx-auto"> --}}

                                    <img src="{{$accueils->urlmenulogo}}" class="img-fluid mb-2">

                                {{-- </div> --}}
                            {{-- </a> --}}
                        </div>
                        <div class="col p-3 my-auto">

                            <h4>URL :</h4>
                            <input type="text" value="{{$accueils->urlmenulogo}}" name="url" class="form-control  bg-transparent w-100 text-light">

                        </div>
                    </div>               

                </div>
                    <!-- /.card-body -->
            </div>
            <!-- /.card-Logo -->

            <div class="row">
                <div class="col">

                    <h3 class="card-title text-center">Lien 1</h3>
                    <input type="text" name="lien1" value="{{$accueils->lien1}}" class="form-control bg-dark">
                </div>
                <div class="col">
                    <h3 class="card-title text-center">Lien 2</h3>
                    <input type="text" name="lien2" value="{{$accueils->lien2}}" class="form-control bg-dark">
                </div>
                <div class="col">
                    <h3 class="card-title text-center">Lien 3</h3>
                    <input type="text" name="lien3" value="{{$accueils->lien3}}" class="form-control bg-dark">

                </div>
                <div class="col">
                    <h3 class="card-title text-center">Lien 4</h3>
                    <input type="text" name="lien4" value="{{$accueils->lien4}}" class="form-control bg-dark">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">

                <button type="submit" class="btn btn-outline-light">Enregistrer</button>
            </div>


        </form>

    </section>


    <!-- BANNIERE -->
    <h2 id="banniere" class="mx-5 text-secondary"> Bannière</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">

        <form action="/slogan/{{$slogan->id}}" method="POST">
            @csrf
            @method('PUT')
            <h4>Slogan :</h4>
            <input type="text" value="{{$slogan->slogan}}" name="slogan" class="form-control">

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-light mb-5">Enregistrer</button>
            </div>
        </form>




        <div class="row">
            @foreach ($bannieres as $banniere)
                <div class="col-3">

                    <form action="/banniere/{{$banniere->id}}" method="POST" class="">
                        @csrf
                        @method('PUT')
                            <div class="pt-3">
                                <h3 class="text-center ">Image {{$banniere->id}}</h3>
                                <img src="{{$banniere->url}}" class="img-fluid" alt="">
                                <h5 class="pt-2">URL :</h5>
                                <input type="text" name="url" value="{{$banniere->url}}" class="form-control bg-dark">
                                <button type="submit" class="btn btn-outline-light mt-3 w-100">
                                    <i class="fas fa-pen"></i>
                                    &nbsp; Modifier
                                </button>
                            </div>
                    </form>

                    <form action="/banniere/{{$banniere->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger  mt-3 w-100">
                            <i class="fas fa-times" ></i> &nbsp; Supprimer
                        </button>
                    </form>
                </div>
            @endforeach


            <form action="/banniere" method="POST" class="col-3">
                @csrf
                @method('POST')
                <div class="">
                    <h3 class="text-center">Image ...</h3>

                    <div class="text-center">
                        <i class="fas fa-image fa-10x py-5 my-2"></i>

                        <h5 class="pt-2">URL :</h5>
                
                        <input type="text" name="url" value="" class="form-control bg-dark">
        
                        <div class="d-flex justify-content-center">
        
                            <button type="submit" class="btn btn-outline-success mt-3 w-100">
                                <i class="fas fa-plus"></i>
                                &nbsp; Ajouter
                            </button>
                        </div>
                    </div>
        
                </div>
            </form>
            </div>
    
    </section>




    <!-- PRESENTATION -->
    <h2 id="presentation" class="mx-5 text-secondary">Présentation</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">

        <form action="/presentation/{{$presentations->id}}" method="POST">
            @csrf
            @method('PUT')
            <h4>Titre :</h4>
            <input type="text" value="{{$presentations->titre}}" name="titre" class="form-control">
            <span class="text-warning"><b> Mettez les parties du titre à surligner entre : &nbsp; &nbsp; <i class="h4">(=</i> &nbsp; &nbsp; & &nbsp; &nbsp; <i class="h4">=)</i> </b></span>

            <div class="row my-3">
                <div class="col">
                    <h4>Texte Gauche</h4>
                    <textarea name="texteL" class="form-control" cols="30" rows="10">{{$presentations->texteL}}</textarea>
                </div>
                <div class="col">
                    <h4>Texte Droite</h4>
                    <textarea name="texteR" class="form-control" cols="30" rows="10">{{$presentations->texteR}}</textarea>
                </div>
            </div>

            <h4 >Bouton :</h4>
            <input type="text" value="{{$presentations->boutton}}" name="bouton" class="form-control">

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-light">Enregistrer</button>
            </div>
        </form>

    </section>




    <!-- Vidéo -->
    <h2 id="video" class="mx-5 text-secondary">Vidéo</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">
        <form action="/video/{{$videos->id}}" method="post">
            @csrf
            @method('PUT')
            <h4>Lien de la vidéo :</h4>
            <input type="text" value="{{$videos->url}}" name="url" class="form-control">

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-light">Enregistrer</button>
            </div>
        </form>

    </section>



    <!-- TESTIMONIALS -->
    <h2 id="testimonials" class="mx-5 text-secondary">Testimonials :</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">

        <form action="/titretestimonials/{{$titretestimonials->id}}" method="post">
            @csrf
            @method('PUT')
            <h4>Titre :</h4>
            <input type="text" value="{{$titretestimonials->titre}}" name="titre" class="form-control">
            <span class="text-warning"><b> Mettez les parties du titre à surligner entre : &nbsp; &nbsp; <i class="h4">(=</i> &nbsp; &nbsp; & &nbsp; &nbsp; <i class="h4">=)</i> </b></span>
    
            <div class="d-flex justify-content-center m-3">
                <button type="submit" class="btn btn-outline-light">Enregistrer</button>
            </div>
        </form>

        
        <h4 class="mt-3">Témoignages :</h4>
        <div class="row m-0">
            @foreach ($testimonials as $testimonial)
                <div class="col-4 text-center p-5">
                    
                    <!-- FORM - MODIFIER -->
                    <form action="/testimonials/{{$testimonial->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <h5>Témoignage {{$testimonial->id}} :</h5>
                        <div class="row text-left p-3 border m-0">
                            <div class="col-4 text-center my-auto">
                                <img src="{{$testimonial->imgurl}}" class="img-fluid rounded" width="100%" style="" alt="">
                            </div>
                            <div class="col-8">
                                <h6 class="mb-1">
                                    <b>Nom: </b>{{$testimonial->nom}}
                                </h6>
                                <input type="text" value="{{$testimonial->nom}}" name="nom" class="form-control">
                                <h6 class="mt-3 mb-1">
                                    <b>Fonction : </b> {{$testimonial->fonction}}
                                </h6>
                                <input type="text" value="{{$testimonial->fonction}}" name="fonction" class="form-control">
                                <h6 class="mt-3 mb-1">
                                    <b>URL Photo :</b>
                                </h6>
                                <input type="text" value="{{$testimonial->imgurl}}" name="url" class="form-control">
                            </div>
                        </div>
                        
                        <h6 class="mt-3 mb-1">
                            <b>Commentaire :</b>
                        </h6>
                        <div class="">
                            <textarea name="commentaire" class="form-control" cols="30" rows="10">{{$testimonial->commentaire}}</textarea>
                            
                        </div>
                        
                        {{-- Bouton - Modifier --}}
                        <button type="submit" class="btn btn-outline-light mt-3 w-100">
                            <i class="fas fa-pen"></i>
                            &nbsp; Modifier
                        </button>
                    </form>
                    <!-- Fin - Form modifier -->
                    
                    <form action="/testimonials/{{$testimonial->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        {{-- Bouton - Supprimer --}}
                        <button type="submit" class="btn btn-outline-danger  mt-3 w-100">
                            <i class="fas fa-times" ></i> &nbsp; Supprimer
                        </button>
                    </form>

                </div>
            @endforeach


            {{-- Ajouter Un Témoignage --}}
            
        
            <div class="col-4 text-center p-5">
            <form action="/testimonials" method="post">
                @csrf
                <h5 class="text-success text-bold">Ajouter un Témoignage :</h5>
                <div class="row text-left p-3 border m-0">
                    <div class="col-4 text-center my-auto">
                        <i class="fas fa-image fa-5x"></i>
                    </div>
                    <div class="col-8">
                        <h6 class="mb-1">
                            <b>Nom: </b>
                        </h6>
                        <input type="text" value="" name="nom" class="form-control">
                        <h6 class="mt-3 mb-1">
                            <b>Fonction : </b>
                        </h6>
                        <input type="text" value="" name="fonction" class="form-control">
                        <h6 class="mt-3 mb-1">
                            <b>URL Photo :</b>
                        </h6>
                        <input type="text" value="" name="url" class="form-control">
                    </div>
                </div>

                <h6 class="mt-3 mb-1">
                    <b>Commentaire :</b>
                </h6>
                <div class="">
                    <textarea name="commentaire" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-outline-success mt-3 w-100">
                    <i class="fas fa-plus"></i>
                    &nbsp; Ajouter
                </button>

            </form>
            </div>

        </div>

        
    </section>



    <!-- TEAM -->
    <h2 id="team" class="mx-5 text-secondary">Team :</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">

        <form action="/titreteams/{{$titreteams->id}}" method="post">
            @csrf
            @method('PUT')
            <h4>Titre :</h4>
            <input type="text" value="{{$titreteams->titre}}" name="titre" class="form-control">
            <span class="text-warning"><b> Mettez les parties du titre à surligner entre : &nbsp; &nbsp; <i class="h4">(=</i> &nbsp; &nbsp; & &nbsp; &nbsp; <i class="h4">=)</i> </b></span>
    
            <div class="d-flex justify-content-center m-3">
                <button type="submit" class="btn btn-outline-light">Enregistrer</button>
            </div>
        </form>
        
        <h4 class="mt-3">Membres :</h4>

        <div class="row m-0">

            <!-- Membre Fixe -->
            <div class="col-4 text-center p-5">
                {{-- Form Modifier --}}
                <form action="/teamfixed/{{$teamfixed->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <h5 class="text-bold">Membre Fixe :</h5>
                    <div class="row text-left p-3 border m-0">
                        <div class="col-4 text-center my-auto">
                            <img src="{{$teamfixed->imgurl}}" alt="" class="img-fluid rounded">
                        </div>
                        <div class="col-8">
                            <h6 class="mb-1">
                                <b>Nom: </b> {{$teamfixed->nom}}
                            </h6>
                            <input type="text" value="{{$teamfixed->nom}}" name="nom" class="form-control">
                            <h6 class="mt-3 mb-1">
                                <b>Fonction : </b> {{$teamfixed->fonction}}
                            </h6>
                            <input type="text" value="{{$teamfixed->fonction}}" name="fonction" class="form-control">
                            <h6 class="mt-3 mb-1">
                                <b>URL Photo :</b>
                            </h6>
                            <input type="text" value="{{$teamfixed->imgurl}}" name="url" class="form-control">
                        </div>
                    </div>

                    {{-- Modifier --}}
                    <button type="submit" class="btn btn-outline-light mt-3 w-100">
                        <i class="fas fa-pen"></i>
                        &nbsp; Modifier
                    </button>
                </form>
                {{-- Fin - Form Modifier --}}

            </div>

            <!-- Membres -->
            @foreach ($teams as $team)
                <div class="col-4 text-center p-5">

                    <form action="/team/{{$team->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <h5>Membre {{$team->id}} :</h5>
                        
                        <div class="row text-left p-3 border m-0">
                            <div class="col-4 text-center my-auto">
                                <img src="{{$team->imgurl}}" class="img-fluid rounded" width="100%" style="" alt="">
                            </div>
                            <div class="col-8">
                                <h6 class="mb-1">
                                    <b>Nom: </b>{{$team->nom}}
                                </h6>
                                <input type="text" value="{{$team->nom}}" name="nom" class="form-control">
                                <h6 class="mt-3 mb-1">
                                    <b>Fonction : </b> {{$team->fonction}}
                                </h6>
                                <input type="text" value="{{$team->fonction}}" name="fonction" class="form-control">
                                <h6 class="mt-3 mb-1">
                                    <b>URL Photo :</b>
                                </h6>
                                <input type="text" value="{{$team->imgurl}}" name="url" class="form-control">
                            </div>
                        </div>


                        {{-- Modifier --}}
                        <button type="submit" class="btn btn-outline-light mt-3 w-100">
                            <i class="fas fa-pen"></i>
                            &nbsp; Modifier
                        </button>

                    </form>

                    {{-- Form - Supprimer --}}
                    <form action="/team/{{$team->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        {{-- Supprimer --}}
                        <button type="submit" class="btn btn-outline-danger mt-3 w-100">
                            <i class="fas fa-times" ></i> &nbsp; Supprimer
                        </button>
                    </form>
                </div>
                    
            @endforeach
        
            <!-- Ajouter Membre -->
            <div class="col-4 text-center p-5">

                <form action="/team" method="post">
                    @csrf
                    <h5 class="text-success text-bold">Ajouter un nouveau Membre :</h5>
                    <div class="row text-left p-3 border m-0">
                        <div class="col-4 text-center my-auto">
                            <i class="fas fa-image fa-5x"></i>
                        </div>
                        <div class="col-8">
                            <h6 class="mb-1">
                                <b>Nom: </b>
                            </h6>
                            <input type="text" value="" name="nom" class="form-control">
                            <h6 class="mt-3 mb-1">
                                <b>Fonction : </b>
                            </h6>
                            <input type="text" value="" name="fonction" class="form-control">
                            <h6 class="mt-3 mb-1">
                                <b>URL Photo :</b>
                            </h6>
                            <input type="text" value="" name="url" class="form-control">
                        </div>
                    </div>

                    {{-- Bouton - Ajouter --}}
                    <button type="submit" class="btn btn-outline-success mt-3 w-100">
                        <i class="fas fa-plus"></i>
                        &nbsp; Ajouter
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- end - TEAM -->



    <!-- READY ? -->
    <h2 id="ready" class="mx-5 text-secondary">Ready ?</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">

        <form action="/ready/{{$ready->id}}" method="post">
            @csrf
            @method('PUT')
            <h4>Titre :</h4>
            <input type="text" value="{{$ready->titre}}" name="titre" class="form-control">
            <span class="text-warning"><b> Mettez les parties du titre à surligner entre : &nbsp; &nbsp; <i class="h4">(=</i> &nbsp; &nbsp; & &nbsp; &nbsp; <i class="h4">=)</i> </b></span>
    
            <h4 class="mt-3">Sous-titre :</h4>
            <input type="text" value="{{$ready->soustitre}}" name="soustitre" class="form-control">
    
            <h4 class="mt-3">Bouton :</h4>
            <input type="text" value="{{$ready->bouton}}" name="bouton" class="form-control">
    
            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-light">Enregistrer</button>
            </div>
        </form>
    </section>


    <!-- CONTACT -->
    <h2 id="contact" class="mx-5 text-secondary">Infos Contact</h2>
    <section class="border-top rounded-0 mx-5 mb-5 p-5 rounded border-secondary">

        <form action="/contact/{{$contacts->id}}" method="post">
            @csrf
            @method('PUT')
            
            <h4>Titre :</h4>
            <input type="text" value="{{$contacts->titre}}" name="titre" class="form-control">
            <span class="text-warning"><b> Mettez les parties du titre à surligner entre : &nbsp; &nbsp; <i class="h4">(=</i> &nbsp; &nbsp; & &nbsp; &nbsp; <i class="h4">=)</i> </b></span>
    
            <h4 class="mt-3">Description :</h4>
            <textarea name="description" cols="30" rows="5" class="form-control">{{$contacts->description}}</textarea>
    
            <div class="border my-5">
                <div class="px-4 pt-3">
                    <h4 class="mt-3 text-center">Deuxième Titre :</h4>
                    <input type="text" value="{{$contacts->titre2}}" name="titre2" class="form-control w-50 mx-auto">
                </div>
                <div class="row m-0 py-5">
                    <div class="col">
        
                        <div class="row m-0">
                            <div class="col-8">
                                <h4 class="mt-3">Adresse :</h4>
                                <input type="text" value="{{$contacts->adresse}}" name="adresse" class="form-control">
                            </div>
                            <div class="col-4">
                                <h4 class="mt-3">Code postal & Ville :</h4>
                                <input type="text" value="{{$contacts->codepostale_ville}}" name="codepostale_ville" class="form-control">
                            </div>
                        </div>
        
                
                    </div>
                    <div class="col ">
        
                        <div class="row m-0">
                            <div class="col-5">
                                <h4 class="mt-3">Numéro de téléphone :</h4>
                                <input type="text" value="{{$contacts->numero}}" name="numero" class="form-control">
                            </div>
                            <div class="col-7 ">
                                <h4 class="mt-3">Email :</h4>
                                <input type="text" value="{{$contacts->email}}" name="email" class="form-control">
                            </div>
                        </div>
                
        
                    </div>
                </div>
    
            </div>
    
            <h4 class="mt-3">Bouton :</h4>
            <input type="text" value="{{$contacts->bouton}}" name="bouton" class="form-control">
    
            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-light">Enregistrer</button>
            </div>
        </form>


    </section>

    <br>
    <br>
@stop

