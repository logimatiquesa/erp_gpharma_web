<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function listingView(){

        return view('pages.clients.clients');
    }

    public function listingClient(){
        
        try {

            // Paramètres (remplacez ces valeurs par les valeurs réelles)
            $dateDebut = "2020-01-01";
            $dateFin = "2022-12-12";
            $typSelect = '';
            $commercialSelect = '';
            $tournSelect = '';
            $noteSelect = '';
            $etatCompSelect = '';
            $codNomClientRech = '';

            function coloneOption($identifiant){

                $btnAction = '<div class="">
                            <input class="form-check-input mx-1" data-id="'.$identifiant.'" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..." style="height : 19px; width:19px;cursor : pointer;">
                            <a class="btn btn-sm btn-icon btn-outline-danger" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" title="Supprimer ce client">
                                <i class="bx bxs-trash" data-id="'.$identifiant.'" style="font-size : 14px;cursor : pointer;"></i>
                            </a>
                            <a class="btn btn-sm btn-icon btn-outline-warning" id="editClient" data-id="'.$identifiant.'"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" title="Modifier ce client">
                                <i class="bx bxs-edit" style="font-size : 17px;cursor : pointer;"></i>
                            </a>
                            <a class="btn btn-sm btn-icon btn-outline-dark" id="editClient" data-id="'.$identifiant.'"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" title="Modifier ce client">
                                <i class="bx bx-dots-vertical-rounded " data-id="'.$identifiant.'" style="font-size : 17px;cursor : pointer;" ></i>
                            </a>
                        </div>';

                return $btnAction;
            }

            

            // $verifGarde = 'SELECT COALESCE(COUNT(GARDECLIENT.IDGARDECLIENT), 0) AS nbreGarde FROM GARDECLIENT WHERE GARDECLIENT.IDCLIENT = 1 AND ((GARDECLIENT.DateDebutGarde >= '.$dateDebut.' AND GARDECLIENT.DateFinGarde >= '.$dateDebut.') OR (GARDECLIENT.DateDebutGarde >= "2022-12-01" AND GARDECLIENT.DateFinGarde >= "2022-12-01"))';
            $verifGarde = '(SELECT COALESCE(COUNT(GARDECLIENT.IDGARDECLIENT), 0) FROM GARDECLIENT WHERE GARDECLIENT.IDCLIENT = CLIENT.IDCLIENT AND ( GARDECLIENT.DateDebutGarde <= "'.$dateDebut.'" AND GARDECLIENT.DateFinGarde >= "'.$dateFin.'" )) AS nbreGarde';

            // Exécution de la requête avec le Query Builder
            $query = DB::table('CLIENT')
                ->leftJoin('DELAI_PAIEMENT', 'DELAI_PAIEMENT.IDDELAI_PAIEMENT', '=', 'CLIENT.IDDELAI_PAIEMENT')
                ->leftJoin('MODEPAIEMENT', 'CLIENT.IDMODEPAIEMENT', '=', 'MODEPAIEMENT.IDMODEPAIEMENT')
                ->leftJoin('TOURNEE', 'CLIENT.IDTOURNEE', '=', 'TOURNEE.IDTOURNEE')
                ->leftJoin('AGENCE', 'TOURNEE.IDAGENCE', '=', 'AGENCE.IDAGENCE')
                ->leftJoin('REGIME_FISCAL', 'CLIENT.IDREGIME_FISCAL', '=', 'REGIME_FISCAL.IDREGIME_FISCAL')
                ->leftJoin('FORMEJURIDIQUE_CLIENT', 'CLIENT.IDFORMEJURIDIQUE_CLIENT', '=', 'FORMEJURIDIQUE_CLIENT.IDFORMEJURIDIQUE_CLIENT')
                ->leftJoin('VILLES', 'CLIENT.IDVILLES', '=', 'VILLES.IDVILLES')
                ->leftJoin('PERSONNEL', 'CLIENT.IDPERSONNEL', '=', 'PERSONNEL.IDPERSONNEL')
                ->select([
                    'CLIENT.IDCLIENT as IDCLIENT',
                    'CLIENT.TypeClient as TypeClient',
                    'CLIENT.CodeClient as CodeClient',
                    'CLIENT.NomClient as NomClient',
                    'CLIENT.IntentionCommande as IntentionCommande',
                    'CLIENT.TauxBICClient as TauxBICClient',
                    'CLIENT.EtiquetteIntegrationBL as EtiquetteIntegrationBL',
                    'CLIENT.RemiseCommercial as RemiseCommercial',
                    'CLIENT.CompteTiersUnique as CompteTiersUnique',
                    'CLIENT.RepresentantLegalClient as RepresentantLegalClient',
                    'CLIENT.AdressePostaleClient as AdressePostaleClient',
                    'CLIENT.AdresseEmailClient as AdresseEmailClient',
                    'CLIENT.TelephoneFixeClient as TelephoneFixeClient',
                    'CLIENT.TelephoneMobileClient as TelephoneMobileClient',
                    'CLIENT.IDFORMEJURIDIQUE_CLIENT as IDFORMEJURIDIQUE_CLIENT',
                    'CLIENT.PlafondCreditClient as PlafondCreditClient',
                    'CLIENT.SoldeProtocoleStock as SoldeProtocoleStock',
                    'CLIENT.EncoursClient as EncoursClient',
                    'CLIENT.NumeroCompteTiers as NumeroCompteTiers',
                    'CLIENT.NumeroCompteTiersEscompte as NumeroCompteTiersEscompte',
                    'CLIENT.NumeroCompteTiersRistourne as NumeroCompteTiersRistourne',
                    'CLIENT.SoldeFactureClient as SoldeFactureClient',
                    'CLIENT.EtatCompteClient as EtatCompteClient',
                    'CLIENT.ObservationsClient as ObservationsClient',
                    'CLIENT.NotationClient as NotationClient',
                    'CLIENT.IDVILLES as IDVILLES',
                    'CLIENT.IDPERSONNEL as IDPERSONNEL',
                    'CLIENT.CreditMaxExploitaton as CreditMaxExploitaton',
                    'CLIENT.EncoursClientTheoriq as EncoursClientTheoriq',
                    'CLIENT.IDTOURNEE as IDTOURNEE',
                    'CLIENT.ModeGestionEscompteRistourne as ModeGestionEscompteRistourne',
                    'CLIENT.DelaiPaiement as DelaiPaiement',
                    'CLIENT.IDDELAI_PAIEMENT as IDDELAI_PAIEMENT',
                    'CLIENT.NumeroTelephoneSMS as NumeroTelephoneSMS',
                    'CLIENT.AdresseEmailSMS as AdresseEmailSMS',
                    'CLIENT.ConsommationSemestre1 as ConsommationSemestre1',
                    'CLIENT.ConsommationSemestre2 as ConsommationSemestre2',
                    'CLIENT.CiviliteRepresentantLegal as CiviliteRepresentantLegal',
                    'AGENCE.NomAgence as NomAgence',
                    'CLIENT.ClePharmaML as ClePharmaML',
                    'CLIENT.AbonneEtiquette as AbonneEtiquette',
                    'DELAI_PAIEMENT.NbreJoursDelai as NbreJoursDelai',
                    'MODEPAIEMENT.LibelleModePaiement as LibelleModePaiement',
                    'CLIENT.NumeroCC as NumeroCC',
                    'CLIENT.NumeroRC as NumeroRC',
                    'CLIENT.NumeroCompte as NumeroCompte',
                    'CLIENT.DivisionFiscale as DivisionFiscale',
                    'CLIENT.TamponNumerique1 as TamponNumerique1',
                    'REGIME_FISCAL.NomRegimeFiscal as NomRegimeFiscal',
                    'FORMEJURIDIQUE_CLIENT.LibelleFormeJuridiqueClient as LibelleFormeJuridiqueClient',
                    'TOURNEE.LibelleTournee as LibelleTournee',
                    'VILLES.NomVille as NomVille',
                    'PERSONNEL.NomPrenomPersonnel as NomPrenomPersonnel',
                    DB::raw("0 as garde")
                    // DB::raw($verifGarde)
                ]);

            // Ajouter des clauses WHERE uniquement si les valeurs ne sont pas vides ou nulles
            if ($typSelect) {
                $query->where('CLIENT.TypeClient', '=', $typSelect);
            }
            if ($commercialSelect) {
                $query->where('CLIENT.IDPERSONNEL', '=', $commercialSelect);
            }
            if ($tournSelect) {
                $query->where('CLIENT.IDTOURNEE', '=', $tournSelect);
            }
            if ($noteSelect) {
                $query->where('CLIENT.NotationClient', '=', $noteSelect);
            }
            if ($etatCompSelect) {
                $query->where('CLIENT.EtatCompteClient', '=', $etatCompSelect);
            }
            if ($codNomClientRech) {
                $query->where(function($query) use ($codNomClientRech) {
                    $query->where('CLIENT.CodeClient', '=', $codNomClientRech)
                        ->orWhere('CLIENT.NomClient', 'LIKE', '%' . $codNomClientRech . '%');
                });
            }

            // Exécutez la requête et récupérez les résultats
            $client = $query->orderBy('NomClient', 'asc')->get();

            $anneeObjectifClient = date('Y');

            $listePrevisionnel = DB::table('OBJECTIFCLIENT')
                ->select([
                    'OBJECTIFCLIENT.IDOBJECTIFCLIENT as IDOBJECTIFCLIENT',
                    'OBJECTIFCLIENT.IDCLIENT as IDCLIENT',
                    'OBJECTIFCLIENT.AnneeObjectifClient as AnneeObjectifClient',
                    'OBJECTIFCLIENT.ObjectifAnnuelle as ObjectifAnnuelle',
                    'OBJECTIFCLIENT.ObjectifSemestre1 as ObjectifSemestre1',
                    'OBJECTIFCLIENT.ObjectifSemestre2 as ObjectifSemestre2'
                ])
                ->where('OBJECTIFCLIENT.AnneeObjectifClient', $anneeObjectifClient)
                ->get();


            foreach ($client as $key => $value) {

                // option de colonne
                $client[$key] -> action = coloneOption($value -> IDCLIENT);

                // LibelleFormeJuridique
                if ($value -> LibelleFormeJuridiqueClient == null) {
                    
                    $client[$key] -> LibelleFormeJuridiqueClient = '';
                }

                // LibelleTournee
                if ($value -> LibelleTournee == null) {
                    
                    $client[$key] -> LibelleTournee = '';
                }
                
                // SoldeDispo
                if($value -> NbreJoursDelai == 0  && $value -> DelaiPaiement){

                    $SoldeDispo = number_format($value -> CreditMaxExploitaton - $value -> SoldeFactureClient - $value -> EncoursClient, 0, '', ' ');

                }else{

                    $SoldeDispo = number_format($value -> PlafondCreditClient - $value -> SoldeFactureClient - $value -> EncoursClient, 0, '', ' ');
                }

                // EtatCompteClient
                if ($value -> EtatCompteClient != 1) {
                    
                    $client[$key] -> EtatCompteClient = '<span class="badge bg-danger-transparent" style="font-size:.78rem">BLOQUÉ</span>';
                }else{

                    $client[$key] -> EtatCompteClient = '<span class="badge bg-success-transparent px-3" style="font-size:.78rem">ACTIF</span>';
                }

                // AbonneEtiquette
                if($value -> AbonneEtiquette == true){

                    $client[$key] -> AbonneEtiquette = '<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="" checked>';
                }else{
                    
                    $client[$key] -> AbonneEtiquette = '<input class="form-check-input form-checked-dark" type="checkbox" value="" id="flexCheckDisabled"  disabled="">';
                }

                // EtiquetteIntegrationBL
                if($value -> EtiquetteIntegrationBL == true){

                    $client[$key] -> EtiquetteIntegrationBL = '<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="" checked>';
                }else{
                    
                    $client[$key] -> EtiquetteIntegrationBL = '<input class="form-check-input form-checked-dark" type="checkbox" value="" id="flexCheckDisabled" disabled="">';
                }

                // RemiseCommercial
                if($value -> RemiseCommercial == true){

                    $client[$key] -> RemiseCommercial = '<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="" checked>';
                }else{
                    
                    $client[$key] -> RemiseCommercial = '<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="">';
                }

                // Abonné Recap BLV
                if($value -> TamponNumerique1 == "1"){

                    $client[$key] -> TamponNumerique1 = '<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="" checked>';
                }else{
                    
                    $client[$key] -> TamponNumerique1 = '<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="">';
                }

                // Liste Positive
                if($value -> SoldeProtocoleStock == "1"){

                    $client[$key] -> SoldeProtocoleStock = '<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="" checked>';
                }else{
                    
                    $client[$key] -> SoldeProtocoleStock = '<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled="">';
                }

                // Notation
                if($value -> NotationClient == "1"){

                    $client[$key] -> NotationClient = 'A';
                }else if($value -> NotationClient == "2"){
                    
                    $client[$key] -> NotationClient = 'B';
                }else if($value -> NotationClient == "3"){
                    
                    $client[$key] -> NotationClient = 'C';
                }else if($value -> NotationClient == "4"){
                    
                    $client[$key] -> NotationClient = 'D';
                }

                $client[$key] -> previsionnelS1 = 0;
                $client[$key] -> tauxS1 = '0.00 %';
                $client[$key] -> previsionnelS2 = 0;
                $client[$key] -> tauxS2 = '0.00 %';
                $client[$key] -> previsionnelAnnuel = 0;
                $client[$key] -> tauxAnnuel = '0.00 %';

                foreach ($listePrevisionnel as $cle => $previ) {
                    
                    if ($previ -> IDCLIENT == $value -> IDCLIENT) {
                        
                        // Previsionnel 1
                        if($previ ->ObjectifSemestre1 != 0){

                            $client[$key] -> tauxS1 = ($value -> ConsommationSemestre1 / $previ ->ObjectifSemestre1) * 100;
                        }else{

                            $client[$key] -> tauxS1 = 0;
                        }

                        $client[$key] -> previsionnelS1 = number_format($previ ->ObjectifSemestre1, 0, '', ' ');


                        //  Previsionnel 2
                        if($previ ->ObjectifSemestre2 != 0){

                            $client[$key] -> tauxS2 = ($value -> ConsommationSemestre2 / $previ ->ObjectifSemestre2) * 100;
                        }else{

                            $client[$key] -> tauxS2 = 0;
                        }

                        $client[$key] -> previsionnelS2 = number_format($previ -> ObjectifSemestre2, 0, '', ' ');

                        $client[$key] -> previsionnelAnnuel = number_format($previ -> ObjectifAnnuelle, 0, '', ' ');

                        $client[$key] -> tauxAnnuel = number_format($client[$key] -> tauxS1 + $client[$key] -> tauxS2, 2, '.', ' ').' %';
                        $client[$key] -> tauxS1 = number_format($client[$key] -> tauxS1, 2, '.', ' ').' %';
                        $client[$key] -> tauxS2 = number_format($client[$key] -> tauxS2, 2, '.', ' ').' %';
                    }
                }

                $client[$key] -> SoldeDispo = $SoldeDispo;
                $client[$key] -> PlafondCreditClient = number_format($value -> PlafondCreditClient, 0, '', ' ');
                $client[$key] -> CreditMaxExploitaton = number_format($value -> CreditMaxExploitaton, 0, '', ' ');
                $client[$key] -> EncoursClient = number_format($value -> EncoursClient, 0, '', ' ');
                $client[$key] -> EncoursClientTheoriq = number_format($value -> EncoursClientTheoriq, 0, '', ' ');
                $client[$key] -> SoldeFactureClient = number_format($value -> SoldeFactureClient, 0, '', ' ');
                $client[$key] -> TauxBICClient = number_format($value -> TauxBICClient, 2, '.', ' ').' %';
                $client[$key] -> CAAnnuel = $value -> ConsommationSemestre1 + $value -> ConsommationSemestre2;
                $client[$key] -> ConsommationSemestre1 = number_format($value -> ConsommationSemestre1, 0, '', ' ');
                $client[$key] -> ConsommationSemestre2 = number_format($value -> ConsommationSemestre2, 0, '', ' ');
            }

            echo json_encode(array('success' => 1, 'error' => false, 'data' => $client));
        } catch (\Throwable $th) {

            // echo json_encode(array('error' => true, 'message' => getMessageErreur($th -> getCode())));
            echo json_encode(array('error' => true, 'message' => $th -> getMessage()));

        }
    }

    public function infoClient(Request $request){

        try {
            
            $client = DB::table('CLIENT') -> where('IDCLIENT', $request -> IDCLIENT) -> first();

            echo json_encode(array('success' => 1, 'data' => $client));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
