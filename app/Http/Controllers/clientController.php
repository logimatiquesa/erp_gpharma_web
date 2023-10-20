<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function listingView()
    {
        return view('pages.clients.clients');
    }

    public function listingClient()
    {

        try {

            // Paramètres (remplacez ces valeurs par les valeurs réelles)
            $typSelect = 'valeur_typSelect';
            $commercialSelect = 'valeur_commercialSelect';
            $tournSelect = 'valeur_tournSelect';
            $noteSelect = 'valeur_noteSelect';
            $etatCompSelect = 'valeur_etatCompSelect';
            $codNomClientRech = 'valeur_codNomClientRech';

            // Exécution de la requête avec le Query Builder
            $resultats = DB::table('CLIENT')
                ->leftJoin('DELAI_PAIEMENT', 'DELAI_PAIEMENT.IDDELAI_PAIEMENT', '=', 'CLIENT.IDDELAI_PAIEMENT')
                ->leftJoin('MODEPAIEMENT', 'CLIENT.IDMODEPAIEMENT', '=', 'MODEPAIEMENT.IDMODEPAIEMENT')
                ->leftJoin('TOURNEE', 'CLIENT.IDTOURNEE', '=', 'TOURNEE.IDTOURNEE')
                ->leftJoin('AGENCE', 'TOURNEE.IDAGENCE', '=', 'AGENCE.IDAGENCE')
                ->leftJoin('REGIME_FISCAL', 'CLIENT.IDREGIME_FISCAL', '=', 'REGIME_FISCAL.IDREGIME_FISCAL')
                ->where('CLIENT.TypeClient', '=', $typSelect)
                ->where('CLIENT.IDPERSONNEL', '=', $commercialSelect)
                ->where('CLIENT.IDTOURNEE', '=', $tournSelect)
                ->where('CLIENT.NotationClient', '=', $noteSelect)
                ->where('CLIENT.EtatCompteClient', '=', $etatCompSelect)
                ->where(function ($query) use ($codNomClientRech) {
                    $query->where('CLIENT.CodeClient', '=', $codNomClientRech)
                        ->orWhere('CLIENT.NomClient', 'LIKE', '%' . $codNomClientRech . '%');
                })
                ->orderBy('NomClient', 'asc')
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
                    'REGIME_FISCAL.NomRegimeFiscal as NomRegimeFiscal'
                ])
                ->get();

            // Traiter les résultats ici
            dd($resultats);

            // echo json_encode(array('success' => 1, 'error' => false, 'data' => $client));
        } catch (\Throwable $th) {

            // echo json_encode(array('error' => true, 'message' => getMessageErreur($th -> getCode())));
            echo json_encode(array('error' => true, 'message' => $th->getMessage()));
        }
    }

    // Client garde


    public function clientGarde()
    {

        session()->put("idUser",1);
        session()->put("NomUser","Anderson");
        session()->put("mdpUser","andi");

        $resultats = DB::table('CLIENT')
            ->select("CLIENT.IDCLIENT", "CLIENT.NomClient")
            ->get();
        return view('pages.clients.clientsgarde', ["listeClient" => $resultats]);
    }

    public function listeClientGarde(Request $request)
    {

        try {

            $resultats = DB::table('GARDECLIENT')
                ->select("GARDECLIENT.IDGARDECLIENT", "GARDECLIENT.DateDebutGarde", "GARDECLIENT.DateFinGarde", "CLIENT.NomClient", "CLIENT.IDCLIENT")
                ->leftJoin("CLIENT", "GARDECLIENT.IDCLIENT", "CLIENT.IDCLIENT")
                ->whereBetween("GARDECLIENT.DateDebutGarde", [$request->date["dateDebut"] == null ? date("Y-m-d") : $request->date["dateDebut"],  $request->date["dateFin"] == null ? date("Y-m-d") :  $request->date["dateFin"]])
                ->whereBetween("GARDECLIENT.DateFinGarde", [$request->date["dateDebut"] == null ? date("Y-m-d") : $request->date["dateDebut"],  $request->date["dateFin"] == null ? date("Y-m-d") :  $request->date["dateFin"]])

                ->get();

            echo json_encode(array('error' => false, 'data' => $resultats, "date" => $request->all()));
        } catch (\Throwable $th) {

            echo json_encode(array('error' => true, 'messages' => $th->getMessage(), 'message' => getMessageErreur($th->getCode())));

            // echo json_encode(array('error' => true, 'message' => $th->getMessage()));
        }
    }

    public function listeClient()
    {
        try {

            $resultats = DB::table('CLIENT')
                ->select("CLIENT.IDCLIENT", "CLIENT.NomClient")
                ->get();

            echo json_encode(array('error' => false, 'data' => $resultats));
        } catch (\Throwable $th) {

            echo json_encode(array('error' => true, 'message' => getMessageErreur($th->getCode())));

            // echo json_encode(array('error' => true, 'message' => $th->getMessage()));
        }
    }

    public function addClientGarde(Request $request)
    {

        // dd($request->all());
        if (isset($request->dateInterval)) {
            $resultats = [];

            $dateDebut = date_format(date_create($request->dateInterval['dateDebut']), "Y-m-d");
            $dateFin = date_format(date_create($request->dateInterval['dateFin']), "Y-m-d");

            try {
                foreach ($request->clients as $value) {

                    $count = DB::table("GARDECLIENT")
                        ->whereBetween("DateDebutGarde", [$dateDebut, $dateFin])
                        ->whereBetween("DateFinGarde", [$dateDebut, $dateFin])
                        ->where("IDCLIENT", $value)
                        ->count();

                    if ($count == 0) {
                        $resultats = DB::table("GARDECLIENT")->insert(["DateDebutGarde" => $dateDebut, "DateFinGarde" => $dateFin, "IDCLIENT" => $value]);
                    }
                }
                echo json_encode(array('error' => false, 'data' => $resultats));
            } catch (\Throwable $th) {
                echo json_encode(array('error' => true, 'message' => getMessageErreur($th->getCode())));
            }
        }
    }

    public function updateClientGarde(Request $request)
    {

        // dd($request->all());
        if (isset($request->dateInterval)) {
            $resultats = [];

            $dateDebut = date_format(date_create($request->dateInterval['dateDebut']), "Y-m-d");
            $dateFin = date_format(date_create($request->dateInterval['dateFin']), "Y-m-d");

            try {
                foreach ($request->clients as $value) {

                    $count = DB::table("GARDECLIENT")
                        ->whereBetween("DateDebutGarde", [$dateDebut, $dateFin])
                        ->whereBetween("DateFinGarde", [$dateDebut, $dateFin])
                        ->where("IDCLIENT", $value)
                        ->count();

                    if ($count == 0) {
                        $resultats = DB::table("GARDECLIENT")
                        ->where("IDCLIENT" ,$value)
                        ->update(["DateDebutGarde" => $dateDebut, "DateFinGarde" => $dateFin]);
                    }
                }
                echo json_encode(array('error' => false, 'data' => $resultats));
            } catch (\Throwable $th) {
                echo json_encode(array('error' => true, 'message' => getMessageErreur($th->getCode())));
            }
        }
    }

    public function deleteClientGarde(Request $request)
    {
        try {
            $count = DB::table("GARDECLIENT")
                ->where("IDGARDECLIENT", $request->idClientGarde)
                ->delete();

            echo json_encode(array('error' => false, 'data' => $count));
        } catch (\Throwable $th) {
            echo json_encode(array('error' => true, 'message' => getMessageErreur($th->getCode())));
        }
    }
}
