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
            $typSelect = '';
            $commercialSelect = '';
            $tournSelect = '';
            $noteSelect = '';
            $etatCompSelect = '';
            $codNomClientRech = '';

            $btnAction = '<input class="form-check-input mx-1" type="checkbox" id="checkboxNoLabel1"
            value="" aria-label="..."><a><i class="bx bxs-trash"></i></a><a><i class="bx bxs-edit"></i></a><a><i class="bx bx-dots-horizontal-rounded" ></i></a>';

            // Exécution de la requête avec le Query Builder
            $query = DB::table('CLIENT')
                ->leftJoin('DELAI_PAIEMENT', 'DELAI_PAIEMENT.IDDELAI_PAIEMENT', '=', 'CLIENT.IDDELAI_PAIEMENT')
                ->leftJoin('MODEPAIEMENT', 'CLIENT.IDMODEPAIEMENT', '=', 'MODEPAIEMENT.IDMODEPAIEMENT')
                ->leftJoin('TOURNEE', 'CLIENT.IDTOURNEE', '=', 'TOURNEE.IDTOURNEE')
                ->leftJoin('AGENCE', 'TOURNEE.IDAGENCE', '=', 'AGENCE.IDAGENCE')
                ->leftJoin('REGIME_FISCAL', 'CLIENT.IDREGIME_FISCAL', '=', 'REGIME_FISCAL.IDREGIME_FISCAL')
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
                    DB::raw("'".$btnAction."' as action")
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

            echo json_encode(array('success' => 1, 'error' => false, 'data' => $client));
        } catch (\Throwable $th) {

            // echo json_encode(array('error' => true, 'message' => getMessageErreur($th -> getCode())));
            echo json_encode(array('error' => true, 'message' => $th -> getMessage()));

        }
    }
}
