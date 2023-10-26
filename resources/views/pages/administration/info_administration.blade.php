@extends('models')

@section('content-body')
    <!-- Start::app-content -->


    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between mt-4 page-header-breadcrumb">
        <div class="col-xl-12 col-12">
            <div class="row mb-3">
                <div class="col-xl-7 col-md-4 mt-2">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item text-light"><a href="javascript:void(0);">Administration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Info administration</li>
                        </ol>
                    </nav>
                </div>
            </div>
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

@endsection

@section('script')

    {{-- Script executé au chargement de la page --}}
    <script>

    </script>

@endsection