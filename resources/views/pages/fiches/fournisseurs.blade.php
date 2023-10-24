@extends('models')

@section('content-body')
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between mt-4 page-header-breadcrumb">
        <!-- Start:: row-7 -->
        <div class="col-xl-12 col-12">
            {{-- <div class="card custom-card"> --}}
            {{-- <div class="card-body"> --}}
            <div class="row mb-3">
                <div class="col-xl-7 col-md-4 mt-2">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item text-light"><a href="javascript:void(0);">Fiches</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fournisseurs</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-xl-5 col-md-8">
                    <div class="row">
                        <div class="col-xl-6 col-md-8 mt-md-0 mt-3">
                            <div class="d-flex">
                                <div class="col-xl-9 col-lg-6 col-sm-6 col-8">
                                    <button type="button" class="btn btn-secondary-light btn-wave d-flex"
                                        id="bntModalNewClient">
                                        <i class=" ri ri-add-circle-line me-1"></i>Nouveau fournisseur
                                    </button>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 col-4">
                                    <div class="btn-group" style="margin-top : 1px;">
                                        <button type="button" class="btn btn-primary-light dropdown-toggle"
                                            data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown1">
                                                    <button class="dropbtn1 text-start dropdown-toggle">Imprimer les
                                                        étiquettes</button>
                                                    <div class="dropdown-content1">
                                                        <a href="#">Format classique</a>
                                                        <a href="#">Format Bac</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Générer Code PIN Livraison
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Générer les clés Pharma-ML
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-4 mt-md-0 mt-3">
                            <div class=" d-flex justify-content-end">
                                <span class="badge bg-light pt-2" style="width:40px;">
                                    <i class="ri-printer-line text-dark" style="font-size:20px; cursor:pointer;"></i>
                                </span>
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Plus de menus
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Historique des ventes</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Réclamation du client</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Compte du client</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Compte extranet</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Horaires d'appel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
    <!-- Page Header Close -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header pe-0 pe-0">
                    <div class="row w-100">
                        <div class="col-md-3 col-md-3 mb-2">
                            <p class="mb-0 text-muted">Code ou non du client</p>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-xl-3 col-md-3 mb-2">
                            <p class="mb-0 text-muted">Période de garde&nbsp;:</p>
                            <input type="text" class="form-control text-center" name="daterange" />
                        </div>
                        <div class="col-xl-3 col-md-2 mb-2">
                            <p class="mb-0 text-muted">Notation</p>
                            <select class="form-select">
                                <option value="paul">Paul</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-md-2 mb-0">
                            <p class="mb-0 text-muted">Tournée</p>
                            <select class="form-select">
                                <option value="paul">Paul</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-nowrap" id="tablefournisseur">
                            <thead class=" table-header-primary">
                                <tr>
                                    <th class="text-center">
                                        {{-- <input class="form-check-input mx-1" type="checkbox" id="checkboxNoLabel1"
                                        value="" aria-label="..."> --}}
                                        Actions
                                    </th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Nom fournissseur</th>
                                    <th class="text-center">Adresse</th>
                                    <th class="text-center">Téléphone fixe</th>
                                    <th class="text-center">Telephone mobile</th>
                                    <th class="text-center">Etat du compte</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Bureau d'achat</th>
                                    <th class="text-center">Pays</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section modal --}}
    <div class="modal fade" id="modalFicheClient" tabindex="-1" aria-labelledby="exampleModalScrollable2"
        data-bs-keyboard="false" aria-hidden="true">
        <!-- Scrollable modal -->
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel2">Fiche fournisseur</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="">
                            <ul class="nav nav-tabs tab-style-2 nav-justified mb-3 d-sm-flex d-block" id="myTab1"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="order-tab" data-bs-toggle="tab"
                                        data-bs-target="#order-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true"><i
                                            class="ri-gift-line me-1 align-middle"></i>Infos principales</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="confirmed-tab" data-bs-toggle="tab"
                                        data-bs-target="#coordonne-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false"><i
                                            class="ri-check-double-line me-1 align-middle"></i>Coordonnées</button>
                                </li>


                            </ul>
                            <form id="formFournisseur">
                                <div class="tab-content" id="myTabContent">
                                    {{-- Infos principales --}}
                                    <div class="tab-pane fade show active text-muted bg-tabs" id="order-tab-pane"
                                        role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <div class="row">

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Code fournisseur :</p>
                                                <input type="text" class="form-control" id="codeFournissuer"
                                                    name="codeFournissuer" readonly>
                                            </div>
                                            <div class="col-xl-6 mb-2">
                                                <p class="mb-0 text-muted">Nom du fournisseur : <span class=" text-danger">*</span> </p>
                                                <input type="text" class="form-control" id="nomFournisseur"
                                                    name="nomFournisseur" required>
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Etat du compte :</p>
                                                <select name="etatCompte" id="etatCompte" class=" form-select">
                                                    <option value="1">ACTIF</option>
                                                    <option value="2">BLOQUE</option>
                                                </select>
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Bureau d'achat : <span class=" text-danger">*</span></p>
                                                <select class="form-select" name="bureauAchat" id="bureauAchat" required>

                                                </select>
                                            </div>
                                            <div class="col-xl-6 mb-2">
                                                <p class="mb-0 text-muted">RIB :</p>
                                                <input type="text" name="rib" id="rib"
                                                    class=" form-control">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">N° compte tiers :</p>
                                                <input type="text" class="form-control" id="numCompteTiers"
                                                    name="numCompteTiers">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">N° CC :</p>
                                                <input type="text" name="numCC" id="numCC"
                                                    class=" form-control">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Délai échéance :</p>
                                                <input type="text" name="delaiEcheance" id="delaiEcheance"
                                                    class=" form-control">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Délai de livraison :</p>
                                                <input type="text" name="delaiLivraison" id="delaiLivraison"
                                                    class=" form-control">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Valeur mini. commande :</p>
                                                <input type="text" name="valeurMiniCommande" id="valeurMiniCommande"
                                                    class=" form-control">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Civilité :</p>
                                                <select name="civilite" id="civilite" class="form-select">
                                                    <option value="1">M.</option>
                                                    <option value="2">Mlle</option>
                                                    <option value="3">Mme</option>
                                                    <option value="4">Société</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 mb-2">
                                                <p class="mb-0 text-muted">Nom de l'interlocuteur :</p>
                                                <input type="text" name="nomInterlocuteur" id="nomInterlocuteur"
                                                    class=" form-control">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Date de naissance :</p>
                                                <input type="date" name="dateNAissance" id="dateNAissance"
                                                    class=" form-control">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Coordonnées --}}
                                    <div class="tab-pane fade text-muted bg-tabs" id="coordonne-tab-pane" role="tabpanel"
                                        aria-labelledby="profile-tab" tabindex="0">
                                        <div class="row">

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Pays </p>
                                                <select name="pays" id="pays" class=" form-select">

                                                </select>
                                            </div>
                                            <div class="col-xl-9 mb-2">
                                                <p class="mb-0 text-muted">Adresse du fournisseur</p>
                                                <input type="text" class="form-control" id="AdresseFournisseur"
                                                    name="AdresseFournisseur">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Observations contact 1</label>
                                                    <input type="text" class="form-control" id="contact1"
                                                        name="contact1">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">Téléphone fixe 1 </p>
                                                <input type="text" class="form-control" id="telFixe1"
                                                    name="telFixe1">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Téléphone mobile 1 (Msg.)</p>
                                                <input type="text" class="form-control" id="telMobile1"
                                                    name="telMobile1">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">E-mail du fournisseur 1 (Msg.)</p>
                                                <input type="text" class="form-control" id="mailFournisseur1"
                                                    name="mailFournisseur1">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Observations contact 2</p>
                                                <input type="text" class="form-control" id="contact2"
                                                    name="contact2">
                                            </div>
                                            <div class="col-xl-3">
                                                <p class="mb-0 text-muted">Téléphone fixe 2</p>
                                                <input type="text" class="form-control" id="telFixe2"
                                                    name="telFixe2">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Téléphone mobile 2</p>
                                                <input type="text" class="form-control" id="telMobile2"
                                                    name="telMobile2">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">E-mail du fournisseur 2</p>
                                                <input type="text" class="form-control" id="mailFournisseur2"
                                                    name="mailFournisseur2">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="submit" value="" id="inputSubmit" hidden>
                            </form>
                        </div>
                    </div>
                    <div class=" row d-flex justify-content-end">
                        <div class=" btn btn-primary btn-sm col-md-2 m-2">Historique <br> des achats</div>
                        <div class=" btn btn-primary btn-sm col-md-2 m-2">Historique <br> des réliquats</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                            class="ri-close-circle-line"></i> Fermer</button>
                    <label for="inputSubmit" class="btn btn-primary"><i class="ri-checkbox-circle-line"></i> Enregistrer
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            // Parametrage
            var tableFournisseur = $("#tablefournisseur").DataTable({

                bFilter: false,
                language: {
                    // dom: 'Bfrtip',
                    processing: false,
                    lengthMenu: "Afficher :&nbsp; _MENU_ &eacute;l&eacute;ments",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable: "Aucune donnée disponible dans le tableau",

                    paginate: {
                        first: "",
                        previous: "Pr&eacute;c&eacute;dent",
                        next: "Suivant",
                        last: ""
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    },
                    search: "Rechercher&nbsp;:",
                },
                pageLength: 10,
            })

            //******************* Execution ********************/
            // getDataFournisseur()

            listePays()
            listeBureau()

            $("#bntModalNewClient").click(function() {
                $("#modalFicheClient").modal("show")
            })

            $("#formFournisseur").on("submit", function(e) {

                e.preventDefault();

                var formData = new FormData(this)
                formData.append("_token", "{{ csrf_token() }}")

                $.ajax({

                    url: '{{ route('fournisseur.add') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response, statut) {
                        console.log(response)
                    },
                    error: function(response, statut, error) {
                        console.log(response)
                    }
                })
            })

            //******************* Fonctions ********************/
            function getDataFournisseur() {
                $.ajax({

                    url: '{{ route('fournisseur.liste') }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response, statut) {
                        tableFournisseur.clear().draw()
                        $.each(response, function(key, value) {
                            tableFournisseur.row.add([
                                `${value.}`,
                                `${value.CodeFournisseur}`,
                                `${value.NomFournisseur}`,
                                `${value.}`,
                                `${value.}`,
                                `${value.}`,
                                `${value.}`,
                                `${value.}`,
                                `${value.}`,
                                `${value.}`,
                                `${value.}`,
                                `${value.}`,
                            ])
                        })
                    },
                    error: function(response, statut, error) {

                    }
                })
            }

            function listePays() {
                $.ajax({

                    url: '{{ route('fournisseur.listePays') }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response, statut) {
                        // console.log(response)
                        $("#pays").html("")
                        $.each(response, function(key, value) {
                            $("#pays").append(
                                `<option value="${value.IDPAYS}">${value.NomPays}</option>`)
                        })
                    },
                    error: function(response, statut, error) {
                        console.log(response)
                    }
                })
            }

            function listeBureau() {
                $.ajax({

                    url: '{{ route('fournisseur.bureauAchat') }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response, statut) {
                        // console.log(response)
                        $("#bureauAchat").html("")
                        $.each(response, function(key, value) {
                            $("#bureauAchat").append(
                                `<option value="${value.IDBUREAUACHAT}">${value.NomBureauAchat}</option>`
                            )
                        })
                    },
                    error: function(response, statut, error) {
                        console.log(response)
                    }
                })
            }
        })
    </script>
@endsection
