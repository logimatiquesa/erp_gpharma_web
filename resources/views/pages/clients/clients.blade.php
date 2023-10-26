@extends('models')

@section('content-body')
    <!-- Start::app-content -->


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
                                    <li class="breadcrumb-item text-light"><a href="javascript:void(0);">Client</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Listing client</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="col-xl-5 col-md-8">
                            <div class="row">
                                <div class="col-xl-6 col-md-8 mt-md-0 mt-3">
                                    <div class="d-flex">
                                        <div class="col-xl-9 col-lg-6 col-sm-6 col-8">
                                            <button type="button" class="btn btn-secondary-light btn-wave d-flex" id="bntModalNewClient">
                                                <i class=" ri ri-add-circle-line me-1"></i>Nouveau client
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
                                                <li><a class="dropdown-item" href="javascript:void(0);">Historique des ventes</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Réclamation du client</a></li>
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


    <!-- Start:: row-7 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="row px-4">
                        <div class="col-xl-4 col-lg-4 col-sm-4 col-6 d-flex align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-rounded bg-primary-transparent text-primary"><i
                                        class="ri-user-3-line fs-16"></i></span>
                            </div>
                            <div class="flex-fill">
                                <p class="fs-18 mb-0 text-primary fw-semibold" id="nbreClient"></p>
                                <span class="text-muted fs-12">Nbre client</span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4 col-6 d-flex align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-rounded bg-light text-default"><i
                                        class="ri-user-3-line fs-16"></i></span>
                            </div>
                            <div class="flex-fill">
                                <p class="fs-18 mb-0 fw-semibold" id="totalEnCours"></p>
                                <span class="text-muted fs-12">Total encours</span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4 col-1 d-flex align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-rounded bg-success-transparent"><i
                                        class="ri-user-3-line fs-16"></i></span>
                            </div>
                            <div class="flex-fill">
                                <p class="fs-18 mb-0 text-success fw-semibold" id="totalCreditMax"></p>
                                <span class="text-muted fs-12">Total crédit max</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-7 -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header pe-0 pe-0">
                    <div class="row w-100">
                        <div class="col-md-3 col-md-3 mb-2">
                            <p class="mb-0 text-muted">Code ou nom du client</p>
                            <input type="text" class="form-control" id="filtreNomCode"/>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-2">
                            <p class="mb-0 text-muted">Période de garde&nbsp;:</p>
                            <input type="text" class="form-control text-center" name="daterange" id="filtrePeriode"/>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-2">
                            <p class="mb-0 text-muted">Notation</p>
                            <select class="form-select" id="filtreNotation">
                                <option value="0"></option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                                <option value="3">D</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-0">
                            <p class="mb-0 text-muted">Tournée</p>
                            <select class="form-select" id="filtreTournee">

                            </select>
                        </div>
                        <div class="col-xl-1 col-md-1 mb-0 d-flex justify-content-end pt-1">
                            <button type="button" class="btn btn-primary btn-wave mt-2" id="btnFiltreTable">
                                <i class="ri-search-line" style="font-size:13px; cursor:pointer;"></i>
                            </button>
                        </div>
                        <div class="accordion accordion-flush mt-2" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed pb-2" type="button" style="background: #FFD7DA;font-size : .78rem;" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Autres options de filtre
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body bg-tabs">

                                        <div class="row">
                                            
                                            <div class="col-xl-4 col-md-3 mb-2">
                                                <p class="mb-0 text-muted">Type de client</p>
                                                <select class="form-select" id="filtreTypeClient">
                                                    <option value="0">TOUS</option>
                                                    <option value="1">PHARMACIE</option>
                                                    <option value="2">PARAPHARMACIE</option>
                                                    <option value="3">CENTRE MEDICAL</option>
                                                    <option value="4">LABORATOIRE</option>
                                                    <option value="5">AUTRE</option>
                                                </select>
                                            </div>

                                            <div class="col-xl-2 col-md-3 mb-2">
                                                <p class="mb-0 text-muted">Etat du compte</p>
                                                <select class="form-select" id="filtreEtatCompte">
                                                    <option value="0">TOUS</option>
                                                    <option value="1">ACTIF</option>
                                                    <option value="2">BLOQUÉ</option>
                                                </select>
                                            </div>

                                            <div class="col-xl-6 col-md-3 mb-2">
                                                <p class="mb-0 text-muted">Commercial</p>
                                                <select class="form-select" id="filtreCommercial">

                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-nowrap" id="tableclient">
                            <thead class="table-header-primary">
                                <tr>
                                    <th data-orderable="false">
                                        <input class="form-check-input me-4" type="checkbox" id="checkSelectAll">
                                        Actions
                                    </th>
                                    <th class="text-center colTable">Code client</th>
                                    <th class="text-center colTable">Raison sociale</th>
                                    <th class="text-center colTable">Etat du compte</th>
                                    <th class="text-center colTable">Représentant légal</th>
                                    <th class="text-center colTable">Garde</th>
                                    <th class="text-center colTable">Téléphone Fixe</th>
                                    <th class="text-center colTable">Téléphone Mobile</th>
                                    <th class="text-center colTable">Forme Juridique</th>
                                    <th class="text-center colTable">Email</th>
                                    <th class="text-center colTable">Crédit max</th>
                                    <th class="text-center colTable">Crédit Max Exploitation</th>
                                    <th class="text-center colTable">Encours</th>
                                    <th class="text-center colTable">Encours Théorique</th>
                                    <th class="text-center colTable">Solde Facture</th>
                                    <th class="text-center colTable">Solde Dispo.</th>
                                    <th class="text-center colTable">Mode de paiement</th>
                                    <th class="text-center colTable">Délais de Paiement</th>
                                    <th class="text-center colTable">Abonné tournée</th>
                                    <th class="text-center colTable">Etiquette</th>
                                    <th class="text-center colTable">Abonné Recap. BLV</th>
                                    <th class="text-center colTable">N° Compte tiers</th>
                                    <th class="text-center colTable">N° Compte tiers escompte</th>
                                    <th class="text-center colTable">N° Compte tiers Ristourne</th>
                                    <th class="text-center colTable">N° RC</th>
                                    <th class="text-center colTable">N° CC</th>
                                    <th class="text-center colTable">Etiquette Facture</th>
                                    <th class="text-center colTable">Remise Commerciale</th>
                                    <th class="text-center colTable">Ville</th>
                                    <th class="text-center colTable">Agence</th>
                                    <th class="text-center colTable">Liste Positive</th>
                                    <th class="text-center colTable">Notation</th>
                                    <th class="text-center colTable">Intention Commande</th>
                                    <th class="text-center colTable">Taux BIC</th>
                                    <th class="text-center colTable">Commercial</th>
                                    <th class="text-center colTable">Previsionnel S1</th>
                                    <th class="text-center colTable">CA Semestre 1</th>
                                    <th class="text-center colTable">Taux S1</th>
                                    <th class="text-center colTable">Previsionnel S2</th>
                                    <th class="text-center colTable">CA Semestre 2</th>
                                    <th class="text-center colTable">Taux S2</th>
                                    <th class="text-center colTable">CA Annuel</th>
                                    <th class="text-center colTable">Previsionnel Annuel</th>
                                    <th class="text-center colTable">Taux Annuel</th>
                                    <th class="text-center colTable">Régime fiscal</th>
                                    <th class="text-center colTable">Division fiscale</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::app-content -->

    {{-- Section modal --}}
    <div class="modal fade" id="modalFicheClient" tabindex="-1" aria-labelledby="exampleModalScrollable2"
        data-bs-keyboard="false" aria-hidden="true">
        <!-- Scrollable modal -->
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel2">Fiche client</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Start::row-4 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-body p-0">
                                    <div class="row g-0">
                                        <div class="col-xl-2 border-end border-inline-end-dashed">
                                            <div class="d-flex flex-wrap align-items-top p-2">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary shadow-sm">
                                                        <i class="ti ti-package fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <h5 class="fw-semibold mb-1 fs-14" id="valEnCour"></h5>
                                                    <p class="text-muted mb-0 fs-12">Encours</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 border-end border-inline-end-dashed">
                                            <div class="d-flex flex-wrap align-items-top p-2">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-secondary shadow-sm">
                                                        <i class="ti ti-rocket fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <h5 class="fw-semibold mb-1 fs-14" id="valSoldeFactureClient"></h5>
                                                    <p class="text-muted mb-0 fs-12">Solde facture</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 border-end border-inline-end-dashed">
                                            <div class="d-flex flex-wrap align-items-top p-2">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-success shadow-sm">
                                                        <i class="ti ti-wallet fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <h5 class="fw-semibold mb-1 fs-14" id="valSoldeTotal"></h5>
                                                    <p class="text-muted mb-0 fs-12">Solde total</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 border-end border-inline-end-dashed">
                                            <div class="d-flex flex-wrap align-items-top p-2">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-warning shadow-sm">
                                                        <i class="ti ti-packge-import fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <h5 class="fw-semibold mb-1 fs-14" id="valSoldeProto"></h5>
                                                    <p class="text-muted mb-0 fs-12">Solde proto.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 border-end border-inline-end-dashed">
                                            <div class="d-flex flex-wrap align-items-top p-2">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-warning shadow-sm">
                                                        <i class="ti ti-packge-import fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <h5 class="fw-semibold mb-1 fs-14" id="valSoldeGlobal"></h5>
                                                    <p class="text-muted mb-0 fs-12">Solde global</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div class="d-flex flex-wrap align-items-top p-2">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-warning shadow-sm">
                                                        <i class="ti ti-packge-import fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <h5 class="fw-semibold mb-1 fs-14" id="valSoldeDispo"></h5>
                                                    <p class="text-muted mb-0 fs-12">Disponible</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

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
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="shipped-tab" data-bs-toggle="tab"
                                        data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                        aria-controls="contact-tab-pane" aria-selected="false"><i
                                            class="ri-shopping-bag-3-line me-1 align-middle"></i>Commerciales</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="delivered-tab" data-bs-toggle="tab"
                                        data-bs-target="#delivered-tab-pane" type="button" role="tab"
                                        aria-selected="false"><i
                                            class="ri-truck-line me-1 align-middle"></i>Exploitation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="compta-tab" data-bs-toggle="tab"
                                        data-bs-target="#compta-tab-pane" type="button" role="tab"
                                        aria-selected="false"><i
                                            class="ri-settings-5-line me-1 align-middle"></i>Comptabilité</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="divers-tab" data-bs-toggle="tab"
                                        data-bs-target="#divers-tab-pane" type="button" role="tab"
                                        aria-selected="false"><i
                                            class="ri-settings-5-line me-1 align-middle"></i>Divers</button>
                                </li>
                            </ul>
                            <form id="formClient">
                                @csrf
                                <div class="tab-content" id="myTabContent">
                                    {{-- Infos principales --}}
                                    <div class="tab-pane fade show active text-muted bg-tabs" id="order-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xl-2 mb-2 d-none">
                                                <p class="mb-0 text-muted">Identifiant :</p>
                                                <input type="text" class="form-control" id="IDCLIENT" name="IDCLIENT">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                                <p class="mb-0 text-muted">Code client :</p>
                                                <input type="text" class="form-control" id="CodeClient" name="CodeClient" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-4 mb-2">
                                                <p class="mb-0 text-muted">Raison sociale :</p>
                                                <input type="text" class="form-control" id="NomClient" name="NomClient" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Type de client :</p>
                                                <select class="form-select" name="TypeClient" id="TypeClient">
                                                    <option class="optionTypeClient" value="0">SELECTIONNER LE TYPE</option>
                                                    <option class="optionTypeClient" value="1">PHARMACIE</option>
                                                    <option class="optionTypeClient" value="2">PARAPHARMACIE</option>
                                                    <option class="optionTypeClient" value="3">CENTRE MEDICAL</option>
                                                    <option class="optionTypeClient" value="4">LABORATOIRE</option>
                                                    <option class="optionTypeClient" value="5">AUTRE</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Forme juridique :</p>
                                                <select class="form-select" name="IDFORMEJURIDIQUE_CLIENT" id="selectFormeJuridique">

                                                </select>
                                            </div>
                                            <div class="col-xl-6 mb-2">
                                                <p class="mb-0 text-muted">Représentant légal :</p>
                                                <input type="text" class="form-control" id="RepresentantLegalClient" name="RepresentantLegalClient" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Tournée :</p>
                                                <select class="js-example-basic-single fs-select2" name="IDTOURNEE" id="selectTourne">

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Coordonnées --}}
                                    <div class="tab-pane fade text-muted bg-tabs" id="coordonne-tab-pane" role="tabpanel"
                                        aria-labelledby="profile-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Situation géographique</p>
                                                <input type="text" class="form-control" id="AdresseGeoClient" name="AdresseGeoClient" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Adresse postale</p>
                                                <input type="text" class="form-control" id="AdressePostaleClient" name="AdressePostaleClient" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Longitude</label>
                                                <input type="text" class="form-control" id="PositionLongitude" name="PositionLongitude" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted">Latitude</p>
                                                <input type="text" class="form-control" id="PositionLatitude" name="PositionLatitude" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-4 mb-2">
                                                <p class="mb-0 text-muted">Téléphone fixe</p>
                                                <input type="text" class="form-control" id="TelephoneFixeClient" name="TelephoneFixeClient" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-4 mb-2">
                                                <p class="mb-0 text-muted">Téléphone mobile</p>
                                                <input type="text" class="form-control" id="TelephoneMobileClient" name="TelephoneMobileClient" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-4 mb-2">
                                                <p class="mb-0 text-muted">N° téléphone commande</p>
                                                <input type="text" class="form-control" id="TelephoneTelemarketiste" name="TelephoneTelemarketiste" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0 text-muted">Email</p>
                                                <input type="text" class="form-control" id="AdresseEmailClient" name="AdresseEmailClient" style="text-transform: uppercase;">
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0 text-muted">Ville</p>
                                                <select class="js-example-basic-single" name="IDVILLES" id="selectVille">
                                                    
                                                </select>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0 text-muted">Secteur</p>
                                                <select class="js-example-basic-single" name="IDSECTEUR" id="selectSecteur">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Commercial --}}
                                    <div class="tab-pane fade text-muted bg-tabs" id="shipped-tab-pane" role="tabpanel"
                                        aria-labelledby="contact-tab" tabindex="0" >
                                        <div class=" row ">

                                            <div class="col-xl-3 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Banque : </p>
                                                <select class="js-example-basic-single" name="IDBANQUE" id="selectBanque">
                                                    
                                                </select>
                                            </div>

                                            <div class="col-xl-2 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Code agence : </p>
                                                <input type="text" class="form-control p-input" id="CodeAgenceBanque" name="CodeAgenceBanque" style="text-transform: uppercase;">
                                            </div>

                                            <div class="col-xl-7 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Numéro de compte et Clé RIB : </p>
                                                <input type="text" class="form-control p-input" id="NumeroCompte" name="NumeroCompte" style="text-transform: uppercase;">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Mode de règlement préféré : </p>
                                                <select class="js-example-basic-single" name="IDMODEPAIEMENT" id="selectModePaiement">
                                                    
                                                </select>
                                            </div>

                                            <div class="col-xl-2 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Intent° Cmde : </p>
                                                <input type="text" class="form-control p-input" id="IntentionCommande" name="IntentionCommande" style="text-transform: uppercase;">
                                            </div>

                                            <div class="col-xl-4 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Délai de paiement : </p>
                                                <select class="js-example-basic-single" name="IDDELAI_PAIEMENT" id="selectDelaiPaiement">
                                                    
                                                </select>
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">&nbsp;</p>
                                                <input type="text" class="form-control p-input text-center" id="labelEscompte" disabled>
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Délai de paiement ristourne : </p>
                                                <select class="form-control form-select" name="ModeGestionEscompteRistourne" id="selectDelaiPaiementRistourne">
                                                    <option value="0">SELECTIONNER DELAI RISTOURNE</option>
                                                    <option value="1">PAIEMENT IMMEDIAT</option>
                                                    <option value="2">PAIEMENT DIFFERE</option>
                                                    <option value="3">REGLEMENT FACTURE</option>
                                                </select>
                                            </div>

                                            <div class="col-xl-1 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Notation : </p>
                                                <select class="form-select p-select" name="NotationClient" id="selectNotation">
                                                    <option value="0"></option>
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="3">D</option>
                                                </select>
                                            </div>

                                            <div class="col-xl-4 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Commercial : </p>
                                                <select class="js-example-basic-single" name="IDPERSONNEL" id="selectCommercial">
                                                    
                                                </select>
                                            </div>

                                            <div class="col-xl-4 mb-2 ">
                                                <div class=" row">
                                                    <div class="col-5">
                                                        <p for="input-label" class="mb-0 text-muted">Clé pharma-ML : </p>
                                                        <input type="text" class="form-control p-input" id="ClePharmaML" name="ClePharmaML" style="text-transform: uppercase;">
                                                    </div>
                                                    <div class="col-2 mt-3">
                                                        <button class=" btn btn-primary">G</button>
                                                    </div>
                                                    <div class="col-5">
                                                        <p for="input-label" class="mb-0 text-muted">Code PIN livraison : </p>
                                                        <input type="text" class="form-control p-input text-center" id="CodeSecretLivraison" name="CodeSecretLivraison" style="text-transform: uppercase;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Regime fiscal : </p>
                                                <select class="js-example-basic-single" name="IDREGIME_FISCAL" id="selectRegimeFiscal">
                                                    
                                                </select>
                                            </div>

                                            <div class="col-xl-8 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Divison fiscale : </p>
                                                <input type="text" class="form-control p-input" id="DivisionFiscale" name="DivisionFiscale" style="text-transform: uppercase;">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Taux de BIC : </p>
                                                <input type="number" class="form-control text-center p-input" id="TauxBICClient" name="TauxBICClient">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p for="input-label" class="mb-0 text-muted">Mini. de commande</p>
                                                <input type="number" class="form-control text-center p-input" id="MiniCommandeClient" name="MiniCommandeClient">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted ">Crédit max:</p>
                                                <input type="number" class="form-control text-end p-input" id="PlafondCreditClient" name="PlafondCreditClient">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-0 text-muted ">Crédit max Exp. :</p>
                                                <input type="number" class="form-control text-end p-input" id="CreditMaxExploitaton" name="CreditMaxExploitaton">
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-xl-6">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class=" card">
                                                                <div class="card-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value=""
                                                                            id="ProtocoleStock" checked>
                                                                        <label class="form-check-label" for="ProtocoleStock">
                                                                        Liste positive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class=" card">
                                                                <div class="card-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value=""
                                                                            id="RemiseCommercial" checked>
                                                                        <label class="form-check-label" for="RemiseCommercial">
                                                                            Remise commerciale
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class=" card">
                                                                <div class="card-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value=""
                                                                            id="ClientGrilleSpeciale" checked>
                                                                        <label class="form-check-label" for="ClientGrilleSpeciale">
                                                                            Grille spéciale Escompte / Ristourne
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class=" card">
                                                                <div class="card-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value=""
                                                                            id="MiseEnAttenteRetour" checked>
                                                                        <label class="form-check-label" for="MiseEnAttenteRetour">
                                                                            Valider AVOIR mannuellement
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class=" card">
                                                                <div class="card-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value=""
                                                                            id="MiniCommandeClientsurLaJournee" checked>
                                                                        <label class="form-check-label" for="MiniCommandeClientsurLaJournee">
                                                                            Minimum sur le total de la journée
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <table class="table table-striped w-100">
                                                        <thead class="bg-thead-second">
                                                            <tr>
                                                                <th class="text-center">Période</th>
                                                                <th class="text-center">Montant</th>
                                                                <th class="text-center">Tx réalisation</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <label class="d-flex">Prévisionnel&nbsp;S1</label>
                                                                </td>
                                                                <td>
                                                                    <input type="number" class="form-control text-end" name="ObjectifSemestre1" id="montantPrevisionnel1">
                                                                </td>
                                                                <td>
                                                                    <input type="number" class="form-control text-center" name="tauxPrevisionnel1" id="tauxPrevisionnel1">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="d-flex">Prévisionnel&nbsp;S2</label>
                                                                </td>
                                                                <td>
                                                                    <input type="number" class="form-control text-end" name="ObjectifSemestre2" id="montantPrevisionnel2">
                                                                </td>
                                                                <td>
                                                                    <input type="number" class="form-control text-center" name="tauxPrevisionnel2" id="tauxPrevisionnel2">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label class="d-flex">Annuel</label>
                                                                </td>
                                                                <td>
                                                                    <input type="number" class="form-control text-end" name="ObjectifAnnuelle" id="montantAnnuel">
                                                                </td>
                                                                <td>
                                                                    <input type="number" class="form-control text-center" name="tauxAnnuel" id="tauxAnnuel">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Exploitation --}}
                                    <div class="tab-pane fade text-muted bg-tabs" id="delivered-tab-pane" role="tabpanel"
                                        tabindex="0">
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div class=" card">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="EtiquetteIntegrationBL" name="EtiquetteIntegrationBL" checked>
                                                            <label class="form-check-label" for="EtiquetteIntegrationBL">
                                                                Etiquette integration BL
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class=" card">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="AbonneEtatRecapitulatifBLV" name="AbonneEtatRecapitulatifBLV" checked>
                                                            <label class="form-check-label" for="AbonneEtatRecapitulatifBLV">
                                                                Abonné recapitulatif BLV
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class=" card">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="NePasFusionnerCommande" name="NePasFusionnerCommande" checked>
                                                            <label class="form-check-label" for="NePasFusionnerCommande">
                                                                Ne pas fusionner cdes
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class=" card">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="ClientRecupereCommande" name="ClientRecupereCommande" checked>
                                                            <label class="form-check-label" for="ClientRecupereCommande">
                                                                Récupère ses commandes
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class=" card">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="ClientEscompte" name="ClientEscompte" checked>
                                                            <label class="form-check-label" for="ClientEscompte">
                                                                Client à l'escompte
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Comptabilité --}}
                                    <div class="tab-pane fade text-muted bg-tabs" id="compta-tab-pane" role="tabpanel"
                                        tabindex="0">
                                        <div class="row">

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">Numéro RC:</p>
                                                <input type="text" class="form-control" id="NumeroRC" name="NumeroRC">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">Numéro CC :</p>
                                                <input type="text" class="form-control" id="NumeroCC" name="NumeroCC">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">N° compte tierce :</p>
                                                <input type="text" class="form-control" id="NumeroCompteTiers" name="NumeroCompteTiers">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">N° compte tierce ristourne:</p>
                                                <input type="text" class="form-control" id="NumeroCompteTiersRistourne" name="NumeroCompteTiersRistourne">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">N° compte tierce escompte:</p>
                                                <input type="text" class="form-control" id="NumeroCompteTiersEscompte" name="NumeroCompteTiersEscompte">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">Montant assis. Médiciel :</p>
                                                <input type="text" class="form-control" id="MontantAssistanceMedicel" name="MontantAssistanceMedicel">
                                            </div>

                                            <div class="col-xl-3 pt-1">
                                                <div class="form-check mt-4">
                                                    <input class="form-check-input" type="checkbox" value="" id="AssistanceMediciel" name="AssistanceMediciel">
                                                    <label class="form-check-label" for="AssistanceMediciel">
                                                        Assistance Médiciel
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Divers --}}
                                    <div class="tab-pane fade text-muted bg-tabs" id="divers-tab-pane" role="tabpanel"
                                        tabindex="0">
                                        <div class=" row">

                                            <div class="col-xl-3">
                                                <div class=" card">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="AbonneEtiquette" name="AbonneEtiquette" checked>
                                                            <label class="form-check-label" for="AbonneEtiquette">
                                                                Abonné etiquette
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class=" card">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="CompteTiersUnique" name="CompteTiersUnique" checked>
                                                            <label class="form-check-label" for="CompteTiersUnique">
                                                                Compte tiers unqiue
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <p class="mb-2 text-muted"> Commentaire</p>
                                                <textarea class="form-control w-100" name="ObservationsClient" id="ObservationsClient" cols="30" rows="4"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-circle-line"></i> Fermer</button>
                    <button type="button" class="btn btn-primary" id="btnNewClient"><i class="bx bx-plus fs-6 me-1"></i>Ajouter</button>
                    <button type="button" class="btn btn-warning" id="btnEditClient"><i class="bx bx-edit fs-6 me-1"></i>Modifier</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    {{-- Script executé au chargement de la page --}}
    <script>

        // liste des colones masquables de la table liste des clients
        listeColonnes = $('.colTable')

        //  liste des checkbox sur les lignes de la table liste des clients
        listeCheckSelectLigne = []

        var tableClient

        document.querySelector('input[name="daterange"]').value = new Date()+' '+new Date()
        $('input[name="daterange"]').daterangepicker({
            "locale": {
                "format": "DD/MM/YYYY",
                "separator": " - ",
                "applyLabel": "Appliquer",
                "cancelLabel": "Annuler",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": [
                    "Dim",
                    "Lun",
                    "Mar",
                    "Mer",
                    "Jeu",
                    "Ven",
                    "Sam"
                ],
                "firstDay": 2
            },
            opens: 'center'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        })

        function fnShowHide( iCol )
        {
            /* Get the DataTables object again - this is not a recreation, just a get of the object */
            var oTable = $('#tableclient').dataTable();
                
            var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
            oTable.fnSetColumnVis( iCol, bVis ? false : true );
        }

        function chargerTableListingClient(){
            progressHandler()

            $.ajax({

                url : '{{ route('listingClient')}}',
                type : 'GET',
                data : {

                    filtreNomCode : _('filtreNomCode').value,
                    filtrePeriode : _('filtrePeriode').value,
                    filtreNotation : _('filtreNotation').value,
                    filtreTournee : _('filtreTournee').value,
                    filtreTypeClient : _('filtreTypeClient').value,
                    filtreEtatCompte : _('filtreEtatCompte').value,
                    filtreCommercial : _('filtreCommercial').value
                },
                dataType : 'json',
                success : function(response){

                    obj = response.data

                    _('nbreClient').innerHTML = separateurMilliers(response.nbreClient)
                    _('totalEnCours').innerHTML = separateurMilliers(response.totalEnCours)+' F'
                    _('totalCreditMax').innerHTML = separateurMilliers(response.totalCreditMax)+' F'

                    $("#tableclient").DataTable().destroy()
                    tableClient = $("#tableclient").DataTable({
                        
                        bFilter : false,
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
                        pageLength: 25,
                        "data" : obj,
                        'columns' : [

                            {
                                data : 'action'
                            },
                            {
                                data : 'CodeClient',
                                className : 'text-center'
                            },
                            {
                                data : 'NomClient'
                            },
                            {
                                data : 'EtatCompteClient',
                                className : 'text-center'
                            },
                            {
                                data : 'RepresentantLegalClient'
                            },
                            {
                                data : 'garde'
                            },
                            {
                                data : 'TelephoneFixeClient'
                            },
                            {
                                data : 'TelephoneMobileClient'
                            },
                            {
                                data : 'LibelleFormeJuridiqueClient'
                            },
                            {
                                data : 'AdresseEmailClient'
                            },
                            {
                                data : 'PlafondCreditClient'
                            },
                            {
                                data : 'CreditMaxExploitaton'
                            },
                            {
                                data : 'EncoursClient'
                            },
                            {
                                data : 'EncoursClientTheoriq'
                            },
                            {
                                data : 'SoldeFactureClient'
                            },
                            {
                                data : 'SoldeDispo'
                            },
                            {
                                data : 'LibelleModePaiement'
                            },
                            {
                                data : 'DelaiPaiement'
                            },
                            {
                                data : 'LibelleTournee'
                            },
                            {
                                data : 'AbonneEtiquette'
                            },
                            {
                                data : 'TamponNumerique1'
                            },
                            {
                                data : 'NumeroCompteTiers'
                            },
                            {
                                data : 'NumeroCompteTiersEscompte'
                            },
                            {
                                data : 'NumeroCompteTiersRistourne'
                            },
                            {
                                data : 'NumeroRC'
                            },
                            {
                                data : 'NumeroCC'
                            },
                            {
                                data : 'EtiquetteIntegrationBL'
                            },
                            {
                                data : 'RemiseCommercial'
                            },
                            {
                                data : 'NomVille'
                            },
                            {
                                data : 'NomAgence'
                            },
                            {
                                data : 'SoldeProtocoleStock'
                            },
                            {
                                data : 'NotationClient'
                            },
                            {
                                data : 'IntentionCommande'
                            },
                            {
                                data : 'TauxBICClient'
                            },
                            {
                                data : 'NomPrenomPersonnel'
                            },
                            {
                                data : 'previsionnelS1'
                            },
                            {
                                data : 'ConsommationSemestre1'
                            },
                            {
                                data : 'tauxS1'
                            },
                            {
                                data : 'previsionnelS2'
                            },
                            {
                                data : 'ConsommationSemestre2'
                            },
                            {
                                data : 'tauxS2'
                            },
                            {
                                data : 'CAAnnuel'
                            },
                            {
                                data : 'previsionnelAnnuel'
                            },
                            {
                                data : 'tauxAnnuel'
                            },
                            {
                                data : 'NomRegimeFiscal'
                            },
                            {
                                data : 'DivisionFiscale'
                            }
                        ]
                    })

                    divShowPer = $('#tableclient_length')
                    divShowPerBro = $('#tableclient_length').parent().next()

                    divShowPerBro.append('<div class=" d-flex justify-content-end">\
                                        <div class="dropdown">\
                                            <button class="btn btn-sm btn-icon btn-outline-dark" type="button" id="dropdownMenuButton1"\
                                                data-bs-toggle="dropdown" aria-expanded="false">\
                                                <i class="bx bx-dots-horizontal-rounded " style="font-size : 17px;cursor : pointer;" ></i>\
                                            </button>\
                                            <ul class="dropdown-menu overflow-auto" aria-labelledby="dropdownMenuButton1" id="dropChoixCol"  style="max-height: 300px;">\
                                            </ul>\
                                        </div>\
                                    </div>')
                                    $.each(listeColonnes, function(key, value){
                                        
                                        $('#dropChoixCol').append('\
                                            <li class="d-flex p-2"> <input type="checkbox" valeur="'+(key+1)+'" class="me-2 showCol form-check-input" checked>'+value.innerHTML+'</a></li>\
                                        ')
                                    })
                    
                    completeHandler()
                },
                error : function(response){
                    console.log(response)
                }
            })
        }

        function chargerSelect(){

            $.ajax({

                url : '{{ route('chargerSelect')}}',
                type : 'GET',
                dataType : 'json',
                success : function(response){

                    // Select forme juridique ...
                    $('#selectFormeJuridique').html('')
                    $('#selectFormeJuridique').append('<option class="optionFormeJuridique" value="0">SELECTIONNER FORME</>')
                    $.each(response.listeFormeJuridique, function(key, value){
                        
                        $('#selectFormeJuridique').append('<option class="optionFormeJuridique" value="'+value['IDFORMEJURIDIQUE_CLIENT']+'">'+value['LibelleFormeJuridiqueClient']+'</option>')
                    })

                    // Select des tournées...
                    $('#selectTourne').html('')
                    $('#selectTourne').append('<option class="optionTourne" value="0">SELECTIONNER TOURNÉE</>')
                    $.each(response.listeTourne, function(key, value){
                        
                        $('#selectTourne').append('<option class="optionTourne" value="'+value['IDTOURNEE']+'">'+value['LibelleTournee']+'</option>')
                    })

                    $('#selectTourne').select2({
                        dropdownParent: $("#modalFicheClient")
                    })

                    // Select filtre tourne 
                    $('#filtreTournee').html('')
                    $('#filtreTournee').append('<option value="0">SELECTIONNER TOURNÉE</>')
                    $.each(response.listeTourne, function(key, value){
                        
                        $('#filtreTournee').append('<option value="'+value['IDTOURNEE']+'">'+value['LibelleTournee']+'</option>')
                    })

                    $('#filtreTournee').select2()

                    // Select des villes ....
                    $('#selectVille').html('')
                    $('#selectVille').append('<option class="optionVille" value="0">SELECTIONNER VILLE</>')
                    $.each(response.listeVille, function(key, value){
                        
                        $('#selectVille').append('<option class="optionVille" value="'+value['IDVILLES']+'">'+value['NomVille']+'</option>')
                    })

                    $('#selectVille').select2({
                        dropdownParent: $("#modalFicheClient")
                    })

                    // Select secteur ....
                    $('#selectSecteur').html('')
                    $('#selectSecteur').append('<option class="optionSecteur" value="0">SELECTIONNER SECTEUR</>')
                    $.each(response.listeSecteur, function(key, value){
                        
                        $('#selectSecteur').append('<option class="optionSecteur" value="'+value['IDSECTEUR']+'">'+value['NomSecteur']+'</option>')
                    })

                    $('#selectSecteur').select2({
                        dropdownParent: $("#modalFicheClient")
                    })

                    // Select banque
                    $('#selectBanque').html('')
                    $('#selectBanque').append('<option class="optionBanque" value="0">SELECTIONNER BANQUE</>')
                    $.each(response.listeBanque, function(key, value){
                        
                        $('#selectBanque').append('<option class="optionBanque" value="'+value['IDBANQUE']+'">'+value['NomBanque']+'</option>')
                    })

                    $('#selectBanque').select2({
                        dropdownParent: $("#modalFicheClient")
                    })

                    // Select mode de paiement
                    $('#selectModePaiement').html('')
                    $('#selectModePaiement').append('<option class="optionMode" value="0">SELECTIONNER MODE</>')
                    $.each(response.listeModePaiement, function(key, value){
                        
                        $('#selectModePaiement').append('<option class="optionMode" value="'+value['IDMODEPAIEMENT']+'">'+value['LibelleModePaiement']+'</option>')
                    })

                    $('#selectModePaiement').select2({
                        dropdownParent: $("#modalFicheClient")
                    })

                    // Select delai paiement
                    $('#selectDelaiPaiement').html('')
                    $('#selectDelaiPaiement').append('<option class="optionDelai" value="0" nbreJrs="0">SELECTIONNER DÉLAI</>')
                    $.each(response.listeDelaiPaiement, function(key, value){
                        
                        $('#selectDelaiPaiement').append('<option class="optionDelai" value="'+value['IDDELAI_PAIEMENT']+'" nbreJrs="'+value['NbreJoursDelai']+'">'+value['LibelleDelaiPaiement']+'</option>')
                    })

                    $('#selectDelaiPaiement').select2({
                        dropdownParent: $("#modalFicheClient")
                    })

                    // Select commercial
                    $('#selectCommercial').html('')
                    $('#selectCommercial').append('<option class="optionCommercial" value="0">SELECTIONNER COMMERCIAL</>')
                    $.each(response.listeCommercial, function(key, value){
                        
                        $('#selectCommercial').append('<option class="optionCommercial" value="'+value['IDPERSONNEL']+'">'+value['NomPrenomPersonnel']+'</option>')
                    })

                    $('#selectCommercial').select2({
                        dropdownParent: $("#modalFicheClient")
                    })

                    $('#filtreCommercial').html('')
                    $('#filtreCommercial').append('<option class="optionCommercial" value="0">TOUS</>')
                    $.each(response.listeCommercial, function(key, value){
                        
                        $('#filtreCommercial').append('<option value="'+value['IDPERSONNEL']+'">'+value['NomPrenomPersonnel']+'</option>')
                    })

                    $('#filtreCommercial').select2()

                    // Select regime fiscal
                    $('#selectRegimeFiscal').html('')
                    $('#selectRegimeFiscal').append('<option class="optionRegime" value="0">SELECTIONNER REGIME</>')
                    $.each(response.listeRegimeFiscal, function(key, value){
                        
                        $('#selectRegimeFiscal').append('<option class="optionRegime" value="'+value['IDREGIME_FISCAL']+'">'+value['NomRegimeFiscal']+'</option>')
                    })

                    $('#selectRegimeFiscal').select2({
                        dropdownParent: $("#modalFicheClient")
                    })
                }
            })
        }

        $('#selectDelaiPaiement').on('change', function(){

            if ($('#selectDelaiPaiement').find(':selected').attr('nbreJrs')  != 0) {
                
                _('CreditMaxExploitaton').setAttribute('disabled', '')
            }else{

                _('CreditMaxExploitaton').removeAttribute('disabled')
            }
        })

        $(document).on('click', '.showCol', function(){

            fnShowHide($(this).attr('valeur'))
        })

        _('PlafondCreditClient').addEventListener('input', function(){

            if ($('#selectDelaiPaiement').find(':selected').attr('nbreJrs')  != 0) {
                
                _('valSoldeDispo').innerHTML = separateurMilliers(_('PlafondCreditClient').value)+' F'

                if (_('PlafondCreditClient').value.replace(/\s/g,'') == '') {
                    
                    _('valSoldeDispo').innerHTML = '0 F'
                }
            }
        })

        _('CreditMaxExploitaton').addEventListener('input', function(){

            if ($('#selectDelaiPaiement').find(':selected').attr('nbreJrs')  == 0) {
                
                _('valSoldeDispo').innerHTML = separateurMilliers(_('CreditMaxExploitaton').value)+' F'

                if (_('CreditMaxExploitaton').value.replace(/\s/g,'') == '') {
                    
                    _('valSoldeDispo').innerHTML = '0 F'
                }
            }
        })

        _('btnFiltreTable').addEventListener('click', function(){

            chargerTableListingClient()
        })

        $(document).on('change', '.checkSelectLigne', function(){

            if(this.checked == true){

                $(this).parent().parent().parent().css({'background' : '#C2E0E9'})
            }else{

                $(this).parent().parent().parent().css({'background' : ''})
                _('tableclient').classList.remove('table-striped')
                _('tableclient').classList.add('table-striped')
            }
        })

        _('checkSelectAll').addEventListener('click', function(){

            let value = this.checked

            var cells =  tableClient.cells().nodes()

            $(cells).find('.checkSelectLigne').prop('checked', value)

            ligne = $(cells).find('.checkSelectLigne').parent().parent().parent()

            if(value == true){

                ligne.css({'background' : '#C2E0E9'})

            }else if(value == false){

                ligne.css({'background' : ''})
                _('tableclient').classList.remove('table-striped')
                _('tableclient').classList.add('table-striped')
            }
        })

        chargerSelect()
        chargerTableListingClient()
    </script>

    {{-- Script new client --}}
    <script>

        // ouverture de la modal 
        _('bntModalNewClient').addEventListener('click', function(){

            _('btnNewClient').style.display = ''
            _('btnEditClient').style.display = 'none'

            _('IDCLIENT').value = ''
            _('CodeClient').value = ''
            _('CodeClient').removeAttribute('disabled')
            _('NomClient').value = ''
            _('TypeClient').selectedIndex = ''
            _('RepresentantLegalClient').value = ''
            _('AdresseGeoClient').value = ''

            _('AdressePostaleClient').value = ''
            _('PositionLongitude').value = ''
            _('PositionLatitude').value = ''
            _('TelephoneFixeClient').value = ''
            _('TelephoneMobileClient').value = ''
            _('TelephoneTelemarketiste').value = ''
            _('AdresseEmailClient').value = ''

            _('CodeAgenceBanque').value = ''
            _('NumeroCompte').value = ''
            _('DivisionFiscale').value = ''
            _('ClePharmaML').value = ''
            _('CodeSecretLivraison').value = ''
            _('TauxBICClient').value = 0
            _('MiniCommandeClient').value = 0
            _('PlafondCreditClient').value = 0
            _('CreditMaxExploitaton').value = 0

            _('ProtocoleStock').checked = false
            _('RemiseCommercial').checked = false
            _('ClientGrilleSpeciale').checked = false
            _('MiseEnAttenteRetour').checked = false
            _('MiniCommandeClientsurLaJournee').checked = false
            _('EtiquetteIntegrationBL').checked = false
            _('AbonneEtatRecapitulatifBLV').checked = false
            _('NePasFusionnerCommande').checked = false
            _('ClientRecupereCommande').checked = false
            _('ClientEscompte').checked = false

            _('NumeroRC').value = ''
            _('NumeroCC').value = ''
            _('NumeroCompteTiers').value = ''
            _('NumeroCompteTiersRistourne').value = ''
            _('NumeroCompteTiersEscompte').value = ''
            _('MontantAssistanceMedicel').value = ''

            _('AssistanceMediciel').checked = false
            _('AbonneEtiquette').checked = false
            _('CompteTiersUnique').checked = false
            _('ObservationsClient').value = false

            _('valEnCour').innerHTML = '0 F'
            _('valSoldeFactureClient').innerHTML = '0 F'
            _('valSoldeTotal').innerHTML = '0 F'
            _('valSoldeProto').innerHTML = '0 F'
            _('valSoldeGlobal').innerHTML = '0 F'
            _('valSoldeDispo').innerHTML = '0 F'

            _('labelEscompte').value = 'PAS D\'ESCOMPTE'
            _('labelEscompte').style.color = 'red'

            _('montantPrevisionnel1').value = 0
            _('tauxPrevisionnel1').value = 0
            _('montantPrevisionnel2').value = 0
            _('tauxPrevisionnel2').value = 0
            _('montantAnnuel').value = 0
            _('tauxAnnuel').value = 0

            $('#TypeClient').val(0).trigger('change')
            $('#selectFormeJuridique').val(0).trigger('change')
            $('#selectTourne').val(0).trigger('change')
            $('#selectVille').val(0).trigger('change')
            $('#selectSecteur').val(0).trigger('change')
            $('#selectBanque').val(0).trigger('change')
            $('#selectModePaiement').val(0).trigger('change')
            $('#selectDelaiPaiement').val(0).trigger('change')
            $('#selectCommercial').val(0).trigger('change')
            $('#selectRegimeFiscal').val(0).trigger('change')
            $('#selectDelaiPaiementRistourne').val(0).trigger('change')
            $('#selectNotation').val(0).trigger('change')

            $('#modalFicheClient').modal('show')
        })

        // Ajout du client
        _('btnNewClient').addEventListener('click', function(){

            let formulaire = new FormData(_('formClient'))

            if (_('NomClient').value.replace(/\s/g,'') != '') {
                
                $.ajax({

                    url : '{{ route('ajouterClient')}}',
                    type : 'POST',
                    data : formulaire,
                    processData: false,
                    contentType: false,
                    dataType : 'json',
                    success : function(response){

                        if(response.success == 2){

                            notif('success', 'Succès', 'AJOUT ÉFFECTUÉ')
                            chargerTableListingClient()
                            $('#modalFicheClient').modal('hide')
                        }else if(response.success == 0){

                            notif('danger', 'Erreur', 'CE NOM DE CLIENT EST DEJA ATTRIBUÉ')
                        }else{

                            notif('danger', 'Erreur', 'CE CODE DE CLIENT EST DEJA ATTRIBUÉ')
                        }
                    }
                })
            }else{

                notif('danger', 'Erreur', 'VEUILLEZ SAISIR LA RAISON SOCIALE')
            }
        })
    </script>

    {{-- Script de modification du client --}}
    <script>

        // Ouverture de la modal
        $(document).on('click', '#editClient', function(){

            let IDCLIENT = $(this).attr('data-id')

            $.ajax({

                url : '{{ route('infoClient')}}',
                type : 'GET',
                data : {
                    IDCLIENT : IDCLIENT
                },
                dataType : 'json',
                success : function(response){

                    _('btnNewClient').style.display = 'none'
                    _('btnEditClient').style.display = ''

                    _('IDCLIENT').value = IDCLIENT

                    _('CodeClient').value = response.data.CodeClient
                    _('CodeClient').setAttribute('disabled', '')

                    _('NomClient').value = response.data.NomClient
                    _('TypeClient').selectedIndex = response.data.TypeClient
                    _('RepresentantLegalClient').value = response.data.RepresentantLegalClient
                    _('AdresseGeoClient').value = response.data.AdresseGeoClient

                    _('AdressePostaleClient').value = response.data.AdressePostaleClient
                    _('PositionLongitude').value = response.data.PositionLongitude
                    _('PositionLatitude').value = response.data.PositionLatitude
                    _('TelephoneFixeClient').value = response.data.TelephoneFixeClient
                    _('TelephoneMobileClient').value = response.data.TelephoneMobileClient
                    _('TelephoneTelemarketiste').value = response.data.TelephoneTelemarketiste
                    _('AdresseEmailClient').value = response.data.AdresseEmailClient

                    _('CodeAgenceBanque').value = response.data.CodeAgenceBanque
                    _('NumeroCompte').value = response.data.NumeroCompte
                    _('DivisionFiscale').value = response.data.DivisionFiscale
                    _('ClePharmaML').value = response.data.ClePharmaML
                    _('CodeSecretLivraison').value = response.data.CodeSecretLivraison
                    _('TauxBICClient').value = Math.round(response.data.TauxBICClient)
                    _('MiniCommandeClient').value = parseInt(response.data.MiniCommandeClient)
                    _('PlafondCreditClient').value = parseInt(response.data.PlafondCreditClient)
                    _('CreditMaxExploitaton').value = parseInt(response.data.CreditMaxExploitaton)

                    _('ProtocoleStock').checked = response.data.ProtocoleStock
                    _('RemiseCommercial').checked = response.data.RemiseCommercial
                    _('ClientGrilleSpeciale').checked = response.data.ClientGrilleSpeciale
                    _('MiseEnAttenteRetour').checked = response.data.MiseEnAttenteRetour
                    _('MiniCommandeClientsurLaJournee').checked = response.data.MiniCommandeClientsurLaJournee
                    _('EtiquetteIntegrationBL').checked = response.data.EtiquetteIntegrationBL
                    _('AbonneEtatRecapitulatifBLV').checked = response.data.AbonneEtatRecapitulatifBLV
                    _('NePasFusionnerCommande').checked = response.data.NePasFusionnerCommande
                    _('ClientRecupereCommande').checked = response.data.ClientRecupereCommande
                    _('ClientEscompte').checked = response.data.ClientEscompte

                    _('NumeroRC').value = response.data.NumeroRC
                    _('NumeroCC').value = response.data.NumeroCC
                    _('NumeroCompteTiers').value = response.data.NumeroCompteTiers
                    _('NumeroCompteTiersRistourne').value = response.data.NumeroCompteTiersRistourne
                    _('NumeroCompteTiersEscompte').value = response.data.NumeroCompteTiersEscompte
                    _('MontantAssistanceMedicel').value = response.data.MontantAssistanceMedicel

                    _('labelEscompte').value = 'PAS D\'ESCOMPTE'
                    _('labelEscompte').style.color = 'red'

                    if(response.data.BeneficieEscompte == true){

                        _('labelEscompte').value = 'ESCOMPTE'
                        _('labelEscompte').style.color = 'green'
                    }

                    _('AssistanceMediciel').checked = response.data.AssistanceMediciel
                    _('AbonneEtiquette').checked = response.data.AbonneEtiquette
                    _('CompteTiersUnique').checked = response.data.CompteTiersUnique
                    _('ObservationsClient').value = response.data.ObservationsClient

                    _('valEnCour').innerHTML = separateurMilliers(parseInt(response.data.EncoursClientTheoriq))+' F'
                    _('valSoldeFactureClient').innerHTML = separateurMilliers(parseInt(response.data.SoldeFactureClient))+' F'
                    let soldeTotal = parseInt(response.data.SoldeFactureClient) + parseInt(response.data.EncoursClientTheoriq)
                    _('valSoldeTotal').innerHTML = separateurMilliers(soldeTotal)+' F'
                    _('valSoldeProto').innerHTML = separateurMilliers(parseInt(response.data.soldeProtocole))+' F'
                    _('valSoldeGlobal').innerHTML = separateurMilliers( parseInt(response.data.soldeProtocole) + soldeTotal)+ ' F'

                    _('montantPrevisionnel1').value = parseInt(response.data.previsionnelS1)
                    _('tauxPrevisionnel1').value = arrondirValeurs(response.data.tauxS1)
                    _('montantPrevisionnel2').value = parseInt(response.data.previsionnelS2)
                    _('tauxPrevisionnel2').value = arrondirValeurs(response.data.tauxS2)
                    _('montantAnnuel').value = parseInt(response.data.previsionnelAnnuel)
                    _('tauxAnnuel').value = arrondirValeurs(response.data.tauxAnnuel)

                    if(response.data.NbreJoursDelai == 0){

                        _('valSoldeDispo').innerHTML = separateurMilliers( parseInt(response.data.CreditMaxExploitaton) - soldeTotal )+' F'
                    }else{

                        _('valSoldeDispo').innerHTML = separateurMilliers( parseInt(response.data.PlafondCreditClient) - soldeTotal)+' F'
                    }

                    $('#TypeClient').val(response.data.TypeClient).trigger('change')
                    $('#selectFormeJuridique').val(response.data.IDFORMEJURIDIQUE_CLIENT).trigger('change')
                    $('#selectTourne').val(response.data.IDTOURNEE).trigger('change')
                    $('#selectVille').val(response.data.IDVILLES).trigger('change')
                    $('#selectSecteur').val(response.data.IDSECTEUR).trigger('change')
                    $('#selectBanque').val(response.data.IDBANQUE).trigger('change')
                    $('#selectModePaiement').val(response.data.IDMODEPAIEMENT).trigger('change')
                    $('#selectDelaiPaiement').val(response.data.IDDELAI_PAIEMENT).trigger('change')
                    $('#selectCommercial').val(response.data.IDPERSONNEL).trigger('change')
                    $('#selectRegimeFiscal').val(response.data.IDREGIME_FISCAL).trigger('change')
                    $('#selectDelaiPaiementRistourne').val(response.data.ModeGestionEscompteRistourne).trigger('change')
                    $('#selectNotation').val(response.data.NotationClient).trigger('change')

                    $('#modalFicheClient').modal('show')
                },
                error : function(response){
                    console.log(response)
                }
            })
        })

        // Modification du client
        _('btnEditClient').addEventListener('click', function(){

            let formulaire = new FormData(_('formClient'))
            // formulaire.append('_token', "{{csrf_token()}}")

            $.ajax({

                url : '{{ route('modifierClient')}}',
                type : 'POST',
                data : formulaire,
                processData: false,
                contentType: false,
                dataType : 'json',
                success : function(response){

                    if(response.success == 1){

                        // chargerTableListingClient()
                        alert('MODIFICATION EFFECTUEE ...')
                        // $('#modalFicheClient').modal('hide')
                    }else{

                        alert('CE NOM DE CLIENT EST DEJA ATTRIBUÉ ...')
                    }
                }
            })
        })
    </script>

@endsection