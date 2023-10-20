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
                                <p class="fs-18 mb-0 text-primary fw-semibold">25,350</p>
                                <span class="text-muted fs-12">Nbre client</span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4 col-6 d-flex align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-rounded bg-light text-default"><i
                                        class="ri-user-3-line fs-16"></i></span>
                            </div>
                            <div class="flex-fill">
                                <p class="fs-18 mb-0 fw-semibold">19,200</p>
                                <span class="text-muted fs-12">Total encours</span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4 col-1 d-flex align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-rounded bg-success-transparent"><i
                                        class="ri-user-3-line fs-16"></i></span>
                            </div>
                            <div class="flex-fill">
                                <p class="fs-18 mb-0 text-success fw-semibold">1,24,890</p>
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
                            <p class="mb-0 text-muted">Code ou non du client</p>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-xl-3 col-md-3 mb-2">
                            <p class="mb-0 text-muted">Période de garde&nbsp;:</p>
                            <input type="text" class="form-control text-center" name="daterange"/>
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
                                            
                                            <div class="col-xl-4 col-md-2 mb-2">
                                                <p class="mb-0 text-muted">Type de client</p>
                                                <select class="form-select">
                                                    <option value="paul">Paul</option>
                                                </select>
                                            </div>

                                            <div class="col-xl-4 col-md-2 mb-2">
                                                <p class="mb-0 text-muted">Etat du compte</p>
                                                <select class="form-select">
                                                    <option value="paul">Paul</option>
                                                </select>
                                            </div>

                                            <div class="col-xl-4 col-md-2 mb-2">
                                                <p class="mb-0 text-muted">Commercial</p>
                                                <select class="form-select">
                                                    <option value="paul">Paul</option>
                                                </select>
                                            </div>

                                            <div class="col-xl-3 col-md-2 mb-2 pt-1">
                                                <button type="button" class="btn btn-primary btn-wave mt-2">
                                                    <i class="ri-search-line" style="font-size:13px; cursor:pointer;"></i>
                                                </button>
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
                            <thead style="background: #182c37">
                                <tr>
                                    <th class="text-center">
                                        <input class="form-check-input mx-1" type="checkbox" id="checkboxNoLabel1"
                                            value="" aria-label="...">
                                        Actions
                                    </th>
                                    <th class="text-center">Code client</th>
                                    <th class="text-center">Raison sociale</th>
                                    <th class="text-center">Etat du compte</th>
                                    <th class="text-center">Représentant légal</th>
                                    <th class="text-center">Garde</th>
                                    <th class="text-center">Téléphone Fixe</th>
                                    <th class="text-center">Téléphone Mobile</th>
                                    <th class="text-center">Forme Juridique</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Crédit max</th>
                                    <th class="text-center">Crédit Max Exploitation</th>
                                    <th class="text-center">Encours</th>
                                    <th class="text-center">Encours Théorique</th>
                                    <th class="text-center">Solde Facture</th>
                                    <th class="text-center">Solde Dispo.</th>
                                    <th class="text-center">Mode de paiement</th>
                                    <th class="text-center">Délais de Paiement</th>
                                    <th class="text-center">Abonné tournée</th>
                                    <th class="text-center">Etiquette</th>
                                    <th class="text-center">Abonné Recap. BLV</th>
                                    <th class="text-center">N° Compte tiers</th>
                                    <th class="text-center">N° Compte tiers escompte</th>
                                    <th class="text-center">N° Compte tiers Ristourne</th>
                                    <th class="text-center">N° RC</th>
                                    <th class="text-center">N° CC</th>
                                    <th class="text-center">Etiquette Facture</th>
                                    <th class="text-center">Remise Commerciale</th>
                                    <th class="text-center">Ville</th>
                                    <th class="text-center">Agence</th>
                                    <th class="text-center">Liste Positive</th>
                                    <th class="text-center">Notation</th>
                                    <th class="text-center">Intention Commande</th>
                                    <th class="text-center">Taux BIC</th>
                                    <th class="text-center">Commercial</th>
                                    <th class="text-center">Previsionnel S1</th>
                                    <th class="text-center">CA Semestre 1</th>
                                    <th class="text-center">Taux S1</th>
                                    <th class="text-center">Previsionnel S2</th>
                                    <th class="text-center">CA Semestre 2</th>
                                    <th class="text-center">Taux S2</th>
                                    <th class="text-center">CA Annuel</th>
                                    <th class="text-center">Previsionnel Annuel</th>
                                    <th class="text-center">Taux Annuel</th>
                                    <th class="text-center">Régime fiscal</th>
                                    <th class="text-center">Division fiscale</th>
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
                                <div class="tab-content" id="myTabContent">
                                    {{-- Infos principales --}}
                                    <div class="tab-pane fade show active text-muted bg-tabs" id="order-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xl-2 d-none mb-2">
                                                <p class="mb-2 text-muted">Identifiant :</p>
                                                <input type="text" class="form-control" id="IDCLIENT">
                                            </div>
                                            <div class="col-xl-2 mb-2">
                                                <p class="mb-2 text-muted">Code client :</p>
                                                <input type="text" class="form-control" id="CodeClient" name="CodeClient">
                                            </div>
                                            <div class="col-xl-4 mb-2">
                                                <p class="mb-2 text-muted">Raison sociale :</p>
                                                <input type="text" class="form-control" id="NomClient" name="NomClient">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">Type de client :</p>
                                                <select class="form-select" name="TypeClient" id="TypeClient">
                                                    <option class="optionTypeClient" value="0">SELECTIONNER LE TYPE</option>
                                                    <option class="optionTypeClient" value="1">PHARMACIE</option>
                                                    <option class="optionTypeClient" value="2">PARAPHARMACE</option>
                                                    <option class="optionTypeClient" value="3">CENTRE MEDICAL</option>
                                                    <option class="optionTypeClient" value="4">LABORATOIRE</option>
                                                    <option class="optionTypeClient" value="5">AUTRE</option>
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
                                                <input type="text" class="form-control" id="RepresentantLegalClient" name="RepresentantLegalClient">
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
                                                <input type="text" class="form-control" id="AdresseGeoClient" name="AdresseGeoClient">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">Adresse postale</p>
                                                <input type="text" class="form-control" id="AdressePostaleClient" name="AdressePostaleClient">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">Longitude</label>
                                                <input type="text" class="form-control" id="PositionLongitude" name="PositionLongitude">
                                            </div>
                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted">Latitude</p>
                                                <input type="text" class="form-control" id="PositionLatitude" name="PositionLatitude">
                                            </div>
                                            <div class="col-xl-4 mb-2">
                                                <p class="mb-2 text-muted">Téléphone fixe</p>
                                                <input type="text" class="form-control" id="TelephoneFixeClient" name="TelephoneFixeClient">
                                            </div>
                                            <div class="col-xl-4 mb-2">
                                                <p class="mb-2 text-muted">Téléphone mobile</p>
                                                <input type="text" class="form-control" id="TelephoneMobileClient" name="TelephoneMobileClient">
                                            </div>
                                            <div class="col-xl-4 mb-2">
                                                <p class="mb-2 text-muted">N° téléphone commande</p>
                                                <input type="text" class="form-control" id="TelephoneTelemarketiste" name="TelephoneTelemarketiste">
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-2 text-muted">Email</p>
                                                <input type="text" class="form-control" id="AdresseEmailClient" name="AdresseEmailClient">
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
                                                <input type="text" class="form-control p-input" id="CodeAgenceBanque" name="CodeAgenceBanque">
                                            </div>

                                            <div class="col-xl-7 mb-2">
                                                <p for="input-label" class="mb-2 text-muted">Numéro de compte et Clé RIB : </p>
                                                <input type="text" class="form-control p-input" id="NumeroCompte" name="NumeroCompte">
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
                                                <input type="text" class="form-control p-input" id="IntentionCommande" name="IntentionCommande">
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
                                                <input type="text" class="form-control p-input" id="DivisionFiscale" name="DivisionFiscale">
                                            </div>

                                            <div class="col-xl-4 mb-2 ">
                                                <div class=" row">
                                                    <div class="col-5">
                                                        <p for="input-label" class="mb-2 text-muted">Clé pharma-ML : </p>
                                                        <input type="text" class="form-control p-input" id="ClePharmaML" name="ClePharmaML">
                                                    </div>
                                                    <div class="col-2" style=" margin-top:7%">
                                                        <button class=" btn btn-primary">G</button>
                                                    </div>
                                                    <div class="col-5">
                                                        <p for="input-label" class="mb-2 text-muted">Code PIN livraison : </p>
                                                        <input type="text" class="form-control p-input" id="CodeSecretLivraison" name="CodeSecretLivraison">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p for="input-label" class="mb-2 text-muted">Taux de BIC : </p>
                                                <input type="text" class="form-control p-input" id="TauxBICClient" name="TauxBICClient">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p for="input-label" class=" mb-2 text-muted">Mini. de commande</p>
                                                <input type="text" class="form-control p-input" id="MiniCommandeClient" name="MiniCommandeClient">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted ">Crédit max:</p>
                                                <input type="text" class="form-control p-input" id="PlafondCreditClient" name="PlafondCreditClient">
                                            </div>

                                            <div class="col-xl-3 mb-2">
                                                <p class="mb-2 text-muted ">Crédit max Exp. :</p>
                                                <input type="text" class="form-control p-input" id="CreditMaxExploitaton" name="CreditMaxExploitaton">
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
                            </form>
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

        $(function() {

            // console.log( new Date())
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
                    "monthNames": [
                        "Janvier",
                        "Fevrier",
                        "Mars",
                        "Avril",
                        "Mai",
                        "Juin",
                        "Juillet",
                        "Août",
                        "Septembre",
                        "Octobre",
                        "Novembre",
                        "Decembre"
                    ],
                    "firstDay": 2
                },
                opens: 'center'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD'));
            })
        })

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
                        pageLength: 10,
                        "data" : obj,
                        'columns' : [

                            {
                                data : 'action'
                            },
                            {
                                data : 'CodeClient'
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
                },
                error : function(response){
                    console.log(response)
                }
            })

            function fnShowHide( iCol )
            {
                /* Get the DataTables object again - this is not a recreation, just a get of the object */
                var oTable = $('#tableclient').dataTable();
                
                var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
                oTable.fnSetColumnVis( iCol, bVis ? false : true );
            }
        }

        chargerTableListingClient()
    </script>

    {{-- Script new client --}}
    <script>

        // ouverture de la modal 
        _('bntModalNewClient').addEventListener('click', function(){

            $('#modalFicheClient').modal('show')
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

                    _('IDCLIENT').value = IDCLIENT
                    _('CodeClient').value = response.data.CodeClient
                    _('NomClient').value = response.data.NomClient
                    _('TypeClient').selectedIndex = response.data.TypeClient
                    
                    // Select forme juridique
                    
                    _('RepresentantLegalClient').value = response.data.RepresentantLegalClient

                    // Select tournée

                    _('AdresseGeoClient').value = response.data.AdresseGeoClient
                    _('AdressePostaleClient').value = response.data.AdressePostaleClient
                    _('PositionLongitude').value = response.data.PositionLongitude
                    _('PositionLatitude').value = response.data.PositionLatitude
                    _('TelephoneFixeClient').value = response.data.TelephoneFixeClient
                    _('TelephoneMobileClient').value = response.data.TelephoneMobileClient
                    _('TelephoneTelemarketiste').value = response.data.TelephoneTelemarketiste
                    _('AdresseEmailClient').value = response.data.AdresseEmailClient

                    // Select Ville

                    // Select Banque

                    _('CodeAgenceBanque').value = response.data.CodeAgenceBanque
                    _('NumeroCompte').value = response.data.NumeroCompte

                    // Select mode de paiement

                    // Select delai de paiement Ristourne

                    // Select notation client

                    // Select commercial

                    // Select regime fiscal

                    _('DivisionFiscale').value = response.data.DivisionFiscale
                    _('ClePharmaML').value = response.data.ClePharmaML
                    _('CodeSecretLivraison').value = response.data.CodeSecretLivraison
                    _('TauxBICClient').value = response.data.TauxBICClient
                    _('MiniCommandeClient').value = response.data.MiniCommandeClient
                    _('PlafondCreditClient').value = response.data.PlafondCreditClient
                    _('CreditMaxExploitaton').value = response.data.CreditMaxExploitaton

                    // CreditMaxExploitaton => SoldeProtocoleStock
                    // Remise commerciale => RemiseCommercial
                    // Grille spéciale Escompte / Ristourne => ClientGrilleSpeciale
                    // Valider AVOIR mannuellement => MiseEnAttenteRetour
                    // Minimum sur le total de la journée => MiniCommandeClientsurLaJournee
                    // Etiquette integration BL => EtiquetteIntegrationBL
                    // Abonné recapitulatif BLV => TamponNumerique1
                    // Ne pas fusionner cdes => NePasFusionnerCommande
                    // NePasFusionnerCommande => ClientRecupereCommande
                    // ClientRecupereCommande => ClientEscompte
                    
                    _('NumeroRC').value = response.data.NumeroRC
                    _('NumeroCC').value = response.date.NumeroCC
                    _('NumeroCompteTiers').value = respone.NumeroCompteTiers
                    _('NumeroCompteTiersRistourne').value = response.data.NumeroCompteTiersRistourne
                    _('NumeroCompteTiersEscompte').value = response.data.NumeroCompteTiersEscompte
                    _('MontantAssistanceMedicel').value = response.data.MontantAssistanceMedicel

                    // Assistance mediciel => AssistanceMediciel

                    // Abonné etiquette => AbonneEtiquette

                    // AbonneEtiquette => CompteTiersUnique

                    // Commentaire => ObservationsClient
                },
                error : function(response){
                    console.log(response)
                }
            })

            $('#modalFicheClient').modal('show')
        })
    </script>

@endsection
