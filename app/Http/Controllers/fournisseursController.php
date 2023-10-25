<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Throwable;

class fournisseursController extends Controller
{

    public function fournisseursView()
    {
        session()->put("IDPERSONNEL", 1);

        session()->put("NomPrenomPersonnel", "Anderson");
        session()->put("MPssePersonnel", "andi");
        session()->put("IDPaysProprietaire", 1);

        return view("pages.fiches.fournisseurs");
    }

    public function fournisseursListe(Request $request)
    {
        $selectFournisseur = DB::table('FOURNISSEUR')
            ->select("FOURNISSEUR.*", "BUREAUACHAT.NomBureauAchat", "PAYS.NomPays")
            ->leftJoin("BUREAUACHAT", "FOURNISSEUR.IDBUREAUACHAT", "=", "BUREAUACHAT.IDBUREAUACHAT")
            ->leftJoin("PAYS", "FOURNISSEUR.IDPAYS", "=", "PAYS.IDPAYS");
        if ($request->bureau != 0) $selectFournisseur->where("FOURNISSEUR.IDBUREAUACHAT", $request->bureau);
        if ($request->code != "") $selectFournisseur->where("FOURNISSEUR.CodeFournisseur", "LIKE", "%" . $request->code . "%")->orWhere("NomFournisseur", "LIKE", "%" . $request->code . "%");
        $resultSelect  = $selectFournisseur->get();

        echo json_encode($resultSelect);
    }

    public function fournisseursAdd(Request $request)
    {
        //    echo json_encode($request->all());
        //    return;
        if ($request->method == "create") {

            $NomFourExiste = DB::table("PERSONNEL")
                ->where("NomPrenomPersonnel", $request->nomFournisseur)
                ->where("IDPaysProprietaire", session()->get("IDPaysProprietaire"))
                ->count();

            if ($NomFourExiste > 0) {
                echo json_encode(['error' => false, 'message' => "Cet nom de fournisseur existe déjà !"]);
                return;
            }

            try {
                $order = DB::table('FOURNISSEUR')->max('CodeFournisseur');
                $codeFournissuer = intval($order) + 1;
                $fournisseur = new Fournisseur();

                if($request->nomFournisseur != null) $fournisseur->NomFournisseur = $this->verifNull($request->nomFournisseur);
                                                      $fournisseur->CodeFournisseur = $codeFournissuer;
                if($fournisseur->AdresseFourniseur != null) $fournisseur->AdresseFourniseur = $this->verifNull($request->AdresseFournisseur);
                if($fournisseur->TelephoneFixeFseur1 != null) $fournisseur->TelephoneFixeFseur1 = $this->verifNull($request->telFixe1);
                if($fournisseur->TelephoneMobileFseur1 != null) $fournisseur->TelephoneMobileFseur1 = $this->verifNull($request->telMobile1);
                if($fournisseur->EmailFournisseur1 != null) $fournisseur->EmailFournisseur1 = $this->verifNull($request->mailFournisseur1);
                                                            $fournisseur->CreePar = session()->get("IDPERSONNEL");
                if($fournisseur->IDBUREAUACHAT != null) $fournisseur->IDBUREAUACHAT = $this->verifNull($request->bureauAchat);
                if($fournisseur->IDPAYS != null) $fournisseur->IDPAYS = $this->verifNull($request->pays);
                if($fournisseur->ObservationsContact1 != null) $fournisseur->ObservationsContact1 = $this->verifNull($request->contact1);
                if($fournisseur->RibCodeBanqueFournisseur != null) $fournisseur->RibCodeBanqueFournisseur = $this->verifNull($request->rib);
                if($fournisseur->NccFournisseur != null) $fournisseur->NccFournisseur = $this->verifNull($request->numCC);
                if($fournisseur->DelaiTransport != null) $fournisseur->DelaiTransport = $this->verifNull($request->delaiLivraison);
                if($fournisseur->TelephoneFixeFseur2 != null) $fournisseur->TelephoneFixeFseur2 = $this->verifNull($request->telFixe2);
                if($fournisseur->TelephoneMobileFseur2 != null) $fournisseur->TelephoneMobileFseur2 = $this->verifNull($request->telMobile2);
                if($fournisseur->EmailFournisseur2 != null) $fournisseur->EmailFournisseur2 = $this->verifNull($request->mailFournisseur2);
                if($fournisseur->ObservationsContact2 != null) $fournisseur->ObservationsContact2 = $this->verifNull($request->contact2);
                if($fournisseur->ValeurMiniCommande != null) $fournisseur->ValeurMiniCommande = $this->verifNull($request->valeurMiniCommande);
                if($fournisseur->CiviliteInterlocuteur != null) $fournisseur->CiviliteInterlocuteur = $this->verifNull($request->civilite);
                if($fournisseur->NomInterlocuteur != null) $fournisseur->NomInterlocuteur = $this->verifNull($request->nomInterlocuteur);
                if($fournisseur->DateNaissanceInterlocuteur != null) $fournisseur->DateNaissanceInterlocuteur = $this->verifNull($request->dateNAissance);
                if($fournisseur->CompteTiersFournisseur != null) $fournisseur->CompteTiersFournisseur = $this->verifNull($request->numCompteTiers);
                if($fournisseur->EtatCompteFournisseur != null) $fournisseur->EtatCompteFournisseur = $this->verifNull($request->etatCompte);
                if($fournisseur->DelaiEcheanceFournisseur != null) $fournisseur->DelaiEcheanceFournisseur = $this->verifNull($request->delaiEcheance);

                $result = $fournisseur->save();

                echo json_encode(['error' => false, 'data' =>"result", 'message' => "Enregistrement éffectué !"]);
            } catch (Throwable $th) {

                echo json_encode(['error' => true, 'message' => $th->getMessage()]);
            }

            // echo json_encode($order);
        } else {
            // echo json_encode("je suis ici !");
            try {
                $result = DB::table('FOURNISSEUR')
                    ->where('IDFOURNISSEUR', $request->idFournisseur)
                    ->update([
                        'NomFournisseur' => $this->verifNull($request->nomFournisseur),
                        'AdresseFourniseur' => $this->verifNull($request->AdresseFournisseur),
                        'TelephoneFixeFseur1' => $this->verifNull($request->telFixe1),
                        'TelephoneMobileFseur1' => $this->verifNull($request->telMobile1),
                        'EmailFournisseur1' => $this->verifNull($request->mailFournisseur1),
                        'ModifiePar' => session()->get("IDPERSONNEL"),
                        'ModifieLe' => Carbon::now(),
                        'IDBUREAUACHAT' => $this->verifNull($request->bureauAchat),
                        'IDPAYS' => $this->verifNull($request->pays),
                        'ObservationsContact1' => $this->verifNull($request->contact1),
                        'RibCodeBanqueFournisseur' => $this->verifNull($request->rib),
                        'NccFournisseur' => $this->verifNull($request->numCC),
                        'DelaiTransport' => $this->verifNull($request->delaiLivraison),
                        'TelephoneFixeFseur2' => $this->verifNull($request->telFixe2),
                        'TelephoneMobileFseur2' => $this->verifNull($request->telMobile2),
                        'EmailFournisseur2' => $this->verifNull($request->mailFournisseur2),
                        'ObservationsContact2' => $this->verifNull($request->contact2),
                        'ValeurMiniCommande' => $this->verifNull($request->valeurMiniCommande),
                        'CiviliteInterlocuteur' => $this->verifNull($request->civilite),
                        'NomInterlocuteur' => $this->verifNull($request->nomInterlocuteur),
                        'DateNaissanceInterlocuteur' => $this->verifNull($request->dateNAissance),
                        'CompteTiersFournisseur' => $this->verifNull($request->numCompteTiers),
                        'EtatCompteFournisseur' => $this->verifNull($request->etatCompte),
                        'DelaiEcheanceFournisseur' => $this->verifNull($request->delaiEcheance),
                        'updated_at' => Carbon::now(),
                    ]);

                echo json_encode(['error' => false, 'data' => $result]);
            } catch (Throwable $th) {

                echo json_encode(['error' => true, 'message' => $th->getMessage()]);
            }
        }
    }

    public function fournisseursDelete(Request $request)
    {

        $existe = verifDelete("FOURNISSEUR" ,"IDFOURNISSEUR", $request->data, "=");
        if($existe == true){
            echo json_encode(['error' => true, 'message' => "Impossible de supprimer ce fournisseur !!"]);
            return ;
        }
        try {

            Fournisseur::where("IDFOURNISSEUR", $request->data)->delete();
            echo json_encode(['error' => false, 'message' => "le fournisseur a été supprimé !"]);
        } catch (Throwable $th) {
            echo json_encode(['error' => true, 'message' => $th->getMessage()]);
        }

    }

    public function fournisseursDetail(Request $request)
    {
        $selectFournisseurDetail = DB::table('FOURNISSEUR')
            ->select("FOURNISSEUR.*", "BUREAUACHAT.NomBureauAchat", "BUREAUACHAT.IDBUREAUACHAT", "PAYS.NomPays", "PAYS.IDPAYS")
            ->leftJoin("BUREAUACHAT", "FOURNISSEUR.IDBUREAUACHAT", "=", "BUREAUACHAT.IDBUREAUACHAT")
            ->leftJoin("PAYS", "FOURNISSEUR.IDPAYS", "=", "PAYS.IDPAYS")
            ->where("FOURNISSEUR.IDFOURNISSEUR",  $request->data)
            ->first();

        echo json_encode($selectFournisseurDetail);
    }

    public function listePays()
    {
        echo json_encode(selectAllTable("PAYS", ["IDPAYS", "NomPays"], '', [["NomPays", "ASC"]]));
    }

    public function bureauAchat()
    {
        echo json_encode(selectAllTable("BUREAUACHAT", ["IDBUREAUACHAT", "NomBureauAchat"], '', [["NomBureauAchat", "ASC"]]));
    }

    public function verifNull($val)
    {
        return $val == null ? "" : $val;
    }
}
