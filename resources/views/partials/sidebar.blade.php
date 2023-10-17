        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                    <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        {{-- <li class="slide__category"><span class="category-name">Main</span></li> --}}
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="{{url('/')}}" class="side-menu__item active" id="lienAccueil">
                                <i class="bx bx-home side-menu__icon"></i>
                                <span class="side-menu__label">Accueil </span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-home side-menu__icon"></i>
                                <span class="side-menu__label">Fiches </span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Fiches</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url("/fiches.produits") }}" class="side-menu__item">Produits</a>
                                </li>
                                <li class="slide">
                                    <a href="index-1.html" class="side-menu__item">Rayons détail</a>
                                </li>
                                <li class="slide">
                                    <a href="index-2.html" class="side-menu__item">Rayon réserve</a>
                                </li>
                                <li class="slide">
                                    <a href="index-3.html" class="side-menu__item">Historique de stock</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url("/fiches.clients") }}" class="side-menu__item">Clients</a>
                                </li>
                                <li class="slide">
                                    <a href="index-5.html" class="side-menu__item">Clients de garde</a>
                                </li>
                                <li class="slide">
                                    <a href="index-6.html" class="side-menu__item">Fournisseurs</a>
                                </li>
                                <li class="slide">
                                    <a href="index-7.html" class="side-menu__item">Bureau d'achat</a>
                                </li>
                                <li class="slide">
                                    <a href="index-8.html" class="side-menu__item">Laboratoires</a>
                                </li>
                                <li class="slide">
                                    <a href="index-9.html" class="side-menu__item">Produits récherche avancés</a>
                                </li>
                                <li class="slide">
                                    <a href="index-10.html" class="side-menu__item">CA par produit</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        {{-- <li class="slide__category"><span class="category-name">Pages</span></li> --}}
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-file-blank side-menu__icon"></i>
                                <span class="side-menu__label">Ventes </span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Ventes</a>
                                </li>
                                <li class="slide">
                                    <a href="about-us.html" class="side-menu__item">Commande client</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Liste de commandes</a>
                                </li>
                                <li class="slide">
                                    <a href="chat.html" class="side-menu__item">Commandes sur réappro.</a>
                                </li>
                                <li class="slide">
                                    <a href="contacts.html" class="side-menu__item">Carnet d'appels</a>
                                </li>
                                <li class="slide">
                                    <a href="contact-us.html" class="side-menu__item">Traitement de commande</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Suivi de roulement </a>

                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Facture / Avoir client </a>
                                </li>
                                <li class="slide">
                                    <a href="empty.html" class="side-menu__item">Expéditions en attente</a>
                                </li>
                                <li class="slide">
                                    <a href="faq's.html" class="side-menu__item">Liste des expéditions</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Réclamation client</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Liste des réclamations</a>
                                </li>
                                <li class="slide">
                                    <a href="landing.html" class="side-menu__item">Relevé de factures</a>
                                </li>
                                <li class="slide">
                                    <a href="landing-jobs.html" class="side-menu__item">Chiffre d'affaire</a>
                                </li>
                                <li class="slide">
                                    <a href="notifications.html" class="side-menu__item">Stat. labo</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.html" class="side-menu__item">Promotion labo / Tedis</a>
                                </li>
                                <li class="slide">
                                    <a href="profile.html" class="side-menu__item">Pack promo labo / Tedis</a>
                                </li>
                                <li class="slide">
                                    <a href="reviews.html" class="side-menu__item">Produit vente réappro</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-task side-menu__icon"></i>
                                <span class="side-menu__label">Achats </span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Achats</a>
                                </li>
                                <li class="slide">
                                    <a href="task-kanban-board.html" class="side-menu__item">Commande</a>
                                </li>
                                <li class="slide">
                                    <a href="task-list-view.html" class="side-menu__item">Liste des commandes</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Listing produits en cours de route</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Modif. de commandes</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Pré-réception en cours</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Histo. des réceptions</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Listing bons de retour</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Etat des mises en places</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Etat des UG réceptionnées</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Récap. des réceptions</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Stat. des achats</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Suivi des remboursements</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.html" class="side-menu__item">Histo. des dernieres réceptions</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-fingerprint side-menu__icon"></i>
                                <span class="side-menu__label">Stocks</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Stocks</a>
                                </li>
                                <li class="slide">
                                    <a href="coming-soon.html" class="side-menu__item">Transfert réserve-détail</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Transferts inter-sites </a>

                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Listing transferts inter-sites </a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Mouvements de socks </a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Listing mouvements de stocks</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blocage des lots</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Baisse des prix</a>
                                </li>
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item">Listing lots à stock négatif</a>
                                </li>
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item">Inventaire de stocks</a>
                                </li>
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item">Inventaire de bacs</a>
                                </li>
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item">Etat des périmés</a>
                                </li>
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item">Etat des mouvements à rembourser</a>
                                </li>
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item">Etat des taux de ruptures</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-error side-menu__icon"></i>
                                <span class="side-menu__label">Comptabilité</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Comptabilité</a>
                                </li>
                                <li class="slide">
                                    <a href="401-error.html" class="side-menu__item">Protocoles clients</a>
                                </li>
                                <li class="slide">
                                    <a href="404-error.html" class="side-menu__item">Echéancier protocoles</a>
                                </li>
                                <li class="slide">
                                    <a href="500-error.html" class="side-menu__item">Comptes clients</a>
                                </li>
                                <li class="slide">
                                    <a href="500-error.html" class="side-menu__item">Ristournes</a>
                                </li>
                                <li class="slide">
                                    <a href="500-error.html" class="side-menu__item">Escomptes</a>
                                </li>
                                <li class="slide">
                                    <a href="500-error.html" class="side-menu__item">Paiements escomptes / Ristournes</a>
                                </li>
                                <li class="slide">
                                    <a href="500-error.html" class="side-menu__item">Facture / Avoir fournisseur</a>
                                </li>
                                <li class="slide">
                                    <a href="500-error.html" class="side-menu__item">Schéma d'écriture comptable de la passerelle</a>
                                </li>
                                <li class="slide">
                                    <a href="500-error.html" class="side-menu__item">Suivi intégration sage</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        {{-- <li class="slide__category"><span class="category-name">General</span></li> --}}
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-box side-menu__icon"></i>
                                <span class="side-menu__label">Contrôles</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Contrôles</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Ventes par produits</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item">Achats par produits</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item">Ventes manquées</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroup.html" class="side-menu__item">Traçabilité des réclamations</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Traçabilité des factures</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Traçabilité des lignes de facture</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Traçabilité des livraisons</a>
                                </li>
                                <li class="slide">
                                    <a href="images_figures.html" class="side-menu__item">Traçabilité des bacs</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroup.html" class="side-menu__item">Stat. CA</a>
                                </li>
                                <li class="slide">
                                    <a href="navs_tabs.html" class="side-menu__item">Evaluation personnel</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Suivis des délégués</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-medal side-menu__icon"></i>
                                <span class="side-menu__label">Prestations & outils</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Prestations & outils</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Prestations</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Auto. de fact. des prestations</a>
                                </li>
                                <li class="slide">
                                    <a href="breakpoints.html" class="side-menu__item">Factures prestations</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Chèques réjétés</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Autres factures</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Messagerie</a>
                                </li>
                                <li class="slide">
                                    <a href="gutters.html" class="side-menu__item">Message sur BL</a>
                                </li>
                                <li class="slide">
                                    <a href="helpers.html" class="side-menu__item">Fichiers stat. IMS</a>
                                </li>
                                <li class="slide">
                                    <a href="position.html" class="side-menu__item">Popup extranet</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-file side-menu__icon"></i>
                                <span class="side-menu__label">C.M.U</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">C.M.U</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Produits</a>
                                </li>
                                <li class="slide">
                                    <a href="index-1.html" class="side-menu__item">Rayons détail</a>
                                </li>
                                <li class="slide">
                                    <a href="index-2.html" class="side-menu__item">Rayon réserve</a>
                                </li>
                                <li class="slide">
                                    <a href="index-6.html" class="side-menu__item">Factures / Avoir clients</a>
                                </li>
                                <li class="slide">
                                    <a href="index-7.html" class="side-menu__item">Relevé de factures</a>
                                </li>
                                <li class="slide">
                                    <a href="index-8.html" class="side-menu__item">Mouvements de stocks</a>
                                </li>
                                <li class="slide">
                                    <a href="index-9.html" class="side-menu__item">Liste mouvements de stocks</a>
                                </li>
                                <li class="slide">
                                    <a href="index-10.html" class="side-menu__item">Inventaire de stock</a>
                                </li>
                                <li class="slide">
                                    <a href="index-10.html" class="side-menu__item">Chiffre d'affaire</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-party side-menu__icon"></i>
                                <span class="side-menu__label">Administrations</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Administrations</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions_collpase.html" class="side-menu__item">Infos Tedis</a>
                                </li>
                                </li>
                                <li class="slide">
                                    <a href="accordions_collpase.html" class="side-menu__item">Agences</a>
                                </li>
                                <li class="slide">
                                    <a href="carousel.html" class="side-menu__item">Objectifs agences</a>
                                </li>
                                <li class="slide">
                                    <a href="draggable-cards.html" class="side-menu__item">Personnel</a>
                                </li>
                                <li class="slide">
                                    <a href="modals_closes.html" class="side-menu__item">Utilisateurs extranet</a>
                                </li>
                                <li class="slide">
                                    <a href="navbar.html" class="side-menu__item">Agences laboratoires</a>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Parc auto.</a>
                                </li>
                                <li class="slide">
                                    <a href="placeholders.html" class="side-menu__item">Table contrôle</a>
                                </li>
                                <li class="slide">
                                    <a href="ratings.html" class="side-menu__item">Bacs</a>
                                </li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Forme juridique</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Escomptes ristournes</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Param. etiquette</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Param. VN, Seuils</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Param. prix revients</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Paramètres achat</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Paramètres généraux</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Paramètres du poste</a>
                                </li>

                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Tournées </a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Autres </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        {{-- <!-- Start::slide -->
                        <li class="slide">
                            <a href="widgets.html" class="side-menu__item">
                                <i class="bx bx-gift side-menu__icon"></i>
                                <span class="side-menu__label">Widgets<span
                                        class="badge bg-danger-transparent ms-2">Hot</span></span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category --> --}}

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-grid-alt side-menu__icon"></i>
                                <span class="side-menu__label">Paramèttres</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Paramèttres</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Formes</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item">Catégories</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet_alerts.html" class="side-menu__item">Natures</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Code marge</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Statuts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Classes thérap.</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Principes actifs</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Types d'expéditions</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Modes d'expéditions</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Rubriques douane</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Banques</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Modes de paiement</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Délai de paiement</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Types protocole</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Régime fiscal</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Motifs de retour client</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Motifs de modif. commande</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Motifs retour fournisseur</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Motifs correct. de stock</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->
