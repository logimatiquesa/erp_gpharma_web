@extends('models')

@section('content-body')
    <!-- Start::app-content -->


    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Clients</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Fiches</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Client</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header Close -->




    <!-- Start:: row-7 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-sm-3 col-6 mt-3 d-flex align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-rounded bg-primary-transparent text-primary"><i
                                        class="ri-user-3-line fs-16"></i></span>
                            </div>
                            <div class="flex-fill">
                                <p class="fs-18 mb-0 text-primary fw-semibold">25,350</p>
                                <span class="text-muted fs-12">Nbre client</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-3 col-6 mt-3 d-flex align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-rounded bg-light text-default"><i
                                        class="ri-user-3-line fs-16"></i></span>
                            </div>
                            <div class="flex-fill">
                                <p class="fs-18 mb-0 fw-semibold">19,200</p>
                                <span class="text-muted fs-12">Total en cours</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-3 col-12 mt-3 d-flex align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-rounded bg-success-transparent"><i
                                        class="ri-user-3-line fs-16"></i></span>
                            </div>
                            <div class="flex-fill">
                                <p class="fs-18 mb-0 text-success fw-semibold">1,24,890</p>
                                <span class="text-muted fs-12">Total crédit max</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-3 col-12 mt-3 d-flex align-items-center">
                            <div class="row w-100">
                                <div class="col-xl-7 col-lg-6 col-sm-6 col-6">
                                    <button type="button" class="btn btn-secondary-light btn-wave"
                                        data-bs-effect="effect-slide-in-right" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalScrollable2">
                                        <i class=" ri ri-add-circle-line"></i> Nouveau client
                                    </button>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-sm-6 col-6">
                                    <div class="btn-group">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-7 -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header"
                    style="background: rgb(231,220,236); background: linear-gradient(90deg, rgba(231,220,236,0.8184523809523809) 4%, rgba(194,160,226,0.8016456582633054) 32%, rgba(196,13,232,0.33665966386554624) 58%);">
                    <div class="row w-100">
                        <div class="col-md-3 col-xl-3 d-flex">
                            <span class=" badge bg-light text-dark pt-3 "
                                style="border-radius:5px 0px 0px 5px">Garde&nbsp;:</span>
                            <input type="text" class="form-control text-center" name="daterange" value="01/01/2018 - 01/15/2018"
                                style="border-radius:0px 5px 5px 0px" />
                        </div>
                        <div class="offset-md-5 offset-sm-6 offset-xl-7 col-md-4 col-sm-3 col-xl-2 d-flex justify-content-between"
                            style="margin-top : -14px">
                            <span class="badge bg-light mt-3 pt-2" style="width:60px;">
                                <i class="ri-printer-line text-dark" style="font-size:20px; cursor:pointer;"></i>
                            </span>
                            <div class="dropdown mt-3">
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
                <div class="card-body">

                    <div class="row g-3">
                        <div class="col-md-2">
                            <label>Code ou non du client</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-2">
                            <label>Type de client</label>
                            <select class="form-select">
                                <option value="paul">Paul</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label>Notation</label>
                            <select class="form-select">
                                <option value="paul">Paul</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Etat du compte</label>
                            <select class="form-select">
                                <option value="paul">Paul</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Commercial</label>
                            <select class="form-select">
                                <option value="paul">Paul</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Tournée</label>
                            <select class="form-select">
                                <option value="paul">Paul</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <!-- <i class="fe fe-search" style="font-size:3rem"></i> -->


                            <button type="button" class="btn btn-primary btn-wave mt-3">
                                <i class="ri-search-line" style="font-size:13px; cursor:pointer;"></i>
                            </button>
                        </div>
                    </div><br>
                    <div class="table-responsive">
                        <table class="table table-striped text-nowrap w-100" id="tableclient">
                            <thead class="bg-primary">
                                <tr class="text-light">
                                    <th>
                                        <input class="form-check-input mx-1" type="checkbox" id="checkboxNoLabel1"
                                            value="" aria-label="...">
                                        Actions
                                    </th>
                                    <th>Code client</th>
                                    <th>Raison sociale</th>
                                    <th>Représentant légal</th>
                                    <th>Garde</th>
                                    <th>Etat du compte</th>
                                    <th>Téléphone Fixe</th>
                                    <th>Téléphone Mobile</th>
                                    <th>Forme Juridique</th>
                                    <th>Email</th>
                                    <th>Crédit max</th>
                                    <th>Crédit Max Exploitation</th>
                                    <th>Encours</th>
                                    <th>Encours Théorique</th>
                                    <th>Solde Facture</th>
                                    <th>Solde Dispo.</th>
                                    <th>Mode de paiement</th>
                                    <th>Délais de Paiement</th>
                                    <th>Tournée</th>
                                    <th>Etiquette</th>
                                    <th>Abonné Recap. BLV</th>
                                    <th>N° Compte tiers</th>
                                    <th>N° Compte tiers escompte</th>
                                    <th>N° Compte tiers Ristourne</th>
                                    <th>N° RC</th>
                                    <th>N° CC</th>
                                    <th>Etiquette Facture</th>
                                    <th>Remise Commerciale</th>
                                    <th>Ville</th>
                                    <th>Agence</th>
                                    <th>Liste Positive</th>
                                    <th>Notation</th>
                                    <th>Intention Commande</th>
                                    <th>Taux BIC</th>
                                    <th>Commercial</th>
                                    <th>Previsionnel S1</th>
                                    <th>CA Semestre 1</th>
                                    <th>Taux S1</th>
                                    <th>Previsionnel S2</th>
                                    <th>CA Semestre 2</th>
                                    <th>Taux S2</th>
                                    <th>CA Annuel</th>
                                    <th>Previsionnel Annuel</th>
                                    <th>Taux Annuel</th>
                                    <th>Régime fiscal</th>
                                    <th>Division fiscale</th>
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
    <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" aria-labelledby="exampleModalScrollable2"
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
                                                    <h5 class="fw-semibold mb-1">45,280</h5>
                                                    <p class="text-muted mb-0 fs-12">En cours</p>
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
                                                    <h5 class="fw-semibold mb-1">10,500</h5>
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
                                                    <h5 class="fw-semibold mb-1">$69,270</h5>
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
                                                    <h5 class="fw-semibold mb-1">12,088</h5>
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
                                                    <h5 class="fw-semibold mb-1">12,088</h5>
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
                                                    <h5 class="fw-semibold mb-1">12,088</h5>
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
                            {{-- <div class="card-body"> --}}
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
                            <div class="tab-content" id="myTabContent">
                                {{-- Infos principales --}}
                                <div class="tab-pane fade show active text-muted bg-tabs" id="order-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-2 mb-2">
                                            <p class="mb-2 text-muted">Code client :</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-4 mb-2">
                                            <p class="mb-2 text-muted">Raison sociale :</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Type de client :</p>
                                            <select class="form-select" name="choices-single-default" id="choices-single">
                                                <option value="1">PHARMACIE</option>
                                                <option value="2">PARAPHARMACE</option>
                                                <option value="3">CENTRE MEDICAL</option>
                                                <option value="4">LABORATOIRE</option>
                                                <option value="5">AUTRE</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Forme juridique :</p>
                                            <select class="form-select" name="choices-single-default" id="choices-single">
                                                <option value="1">SELECTIONNER LA FORME</option>
                                                <option value="2">PARAPHARMACE</option>
                                                <option value="3">CENTRE MEDICAL</option>
                                                <option value="4">LABORATOIRE</option>
                                                <option value="5">AUTRE</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <p class="mb-2 text-muted">Représentant légal :</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Tournée :</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                    </div>
                                </div>

                                {{-- Coordonnées --}}
                                <div class="tab-pane fade text-muted bg-tabs" id="coordonne-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Situation géographique</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Adresse postale</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Longitude</label>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Latitude</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-4 mb-2">
                                            <p class="mb-2 text-muted">Téléphone fixe</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-4 mb-2">
                                            <p class="mb-2 text-muted">Téléphone mobile</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-4 mb-2">
                                            <p class="mb-2 text-muted">N° téléphone commande</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-4">
                                            <p class="mb-2 text-muted">Email</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>
                                        <div class="col-xl-4">
                                            <p class="mb-2 text-muted">Ville</p>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner la ville</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4">
                                            <p class="mb-2 text-muted">Secteur</p>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner le secteur</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- Commercial --}}
                                <div class="tab-pane fade text-muted bg-tabs" id="shipped-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0" >
                                    <div class=" row ">

                                        <div class="col-xl-3 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Banque : </p>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner la banque</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-2 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Code agence : </p>
                                            <input type="text" class="form-control p-input" id="input-label">
                                        </div>

                                        <div class="col-xl-7 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Numéro de compte et Clé RIB : </p>
                                            <input type="text" class="form-control p-input" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Mode de règlement préféré : </p>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner la ville</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-2 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Intent° Cmde : </p>
                                            <input type="text" class="form-control p-input" id="input-label">
                                        </div>

                                        <div class="col-xl-4 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Délai de paiement : </p>
                                            <select class="form-control form-select p-select" name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner le délai</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">&nbsp;</p>
                                            <input type="text" class="form-control p-input text-center" id="input-label" value="ESCOMPTE" readonly>
                                        </div>

                                        <div class="col-xl-4 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Délai de paiement ristourne : </p>
                                            <select class="form-select p-select" name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner le délai</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Notation : </p>
                                            <select class="form-select p-select" name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner le délai</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Commercial : </p>
                                            <select class="form-control " data-trigger name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner le délai</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Regime fiscal : </p>
                                            <select class="form-select p-select" name="choices-single-default" id="choices-single">
                                                <option value="">Selectionner le délai</option>
                                                <option value="Choice 1">Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Divison fiscale : </p>
                                            <input type="text" class="form-control p-input" id="input-label">
                                        </div>

                                        <div class="col-xl-4 mb-2 ">
                                            <div class=" row">
                                                <div class="col-5">
                                                    <p for="input-label" class="mb-2 text-muted">Clé pharma-ML : </p>
                                                    <input type="text" class="form-control p-input" id="input-label">
                                                </div>
                                                <div class="col-2" style=" margin-top:7%">
                                                    <button class=" btn btn-primary">B</button>
                                                </div>
                                                <div class="col-5">
                                                    <p for="input-label" class="mb-2 text-muted">Code PIN livraison : </p>
                                                    <input type="text" class="form-control p-input" id="input-label">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p for="input-label" class="mb-2 text-muted">Taux de BIC : </p>
                                            <input type="text" class="form-control p-input" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p for="input-label" class=" mb-2 text-muted">Mini. de commande</p>
                                            <input type="text" class="form-control p-input" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted ">Crédit max:</p>
                                            <input type="text" class="form-control p-input" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted ">Crédit max Exp. :</p>
                                            <input type="text" class="form-control p-input" id="input-label">
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-xl-6">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class=" card">
                                                            <div class="card-body">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                        id="flexCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked">
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
                                                                        id="flexCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked">
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
                                                                        id="flexCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked">
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
                                                                        id="flexCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked">
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
                                                                        id="flexCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked">
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
                                                                <input type="text" class="form-control">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="d-flex">Prévisionnel&nbsp;S2</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="d-flex">Annuel</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control">
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
                                    <div class="row"><div class="col-xl-3">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Imprimer étiquette facture
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
                                                        id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
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
                                                            id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
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
                                                            id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
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
                                                            id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
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
                                            <input type="text" class="form-control" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Numéro CC :</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">N° compte tierce :</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">N° compte tierce ristourne:</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">N° compte tierce escompte:</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>

                                        <div class="col-xl-3 mb-2">
                                            <p class="mb-2 text-muted">Montant assis. Médiciel :</p>
                                            <input type="text" class="form-control" id="input-label">
                                        </div>

                                        <div class="col-xl-3 pt-1">
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
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
                                                            id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
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
                                                            id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            Compte tiers unqiue
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <p class="mb-2 text-muted"> Commentaire</p>
                                            <textarea class="form-control w-100" name="" id="" cols="30" rows="4"></textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-circle-line"></i> Fermer</button>
                    <button type="button" class="btn btn-primary"><i class="ri-checkbox-circle-line"></i> Enregistrer </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    {{-- Script executé au chargement de la page --}}
    <script>

        var tableClient

        function chargerTableListingClient(){

            $.ajax({

                url : '{{ route('listingClient')}}',
                type : 'GET',
                data : {

                },
                dataType : 'json',
                success : function(response){

                    obj = response.data

                    tableClient = $("#tableclient").DataTable({

                        language: {
                            dom: 'Bfrtip',
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
                },
                error : function(response){
                    console.log(response)
                }
                
            })
        }

        chargerTableListingClient()
    </script>

    
    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'center'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD'));
            });
        });
    </script>
@endsection
