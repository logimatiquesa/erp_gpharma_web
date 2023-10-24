<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function fournisseursListe()
    {
        echo json_encode(Fournisseur::all());
    }

    public function fournisseursAdd(Request $request)
    {
        //    echo json_encode($request->all());
        //    return;

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

            $fournisseur->NomFournisseur = $this->verifNull($request->nomFournisseur);
            $fournisseur->CodeFournisseur = $codeFournissuer;
            $fournisseur->AdresseFourniseur = $this->verifNull($request->AdresseFournisseur);
            $fournisseur->TelephoneFixeFseur1 = $this->verifNull($request->telFixe1);
            $fournisseur->TelephoneMobileFseur1 = $this->verifNull($request->telMobile1);
            $fournisseur->EmailFournisseur1 = $this->verifNull($request->mailFournisseur1);
            $fournisseur->CreePar = session()->get("IDPERSONNEL");
            $fournisseur->IDBUREAUACHAT = $this->verifNull($request->bureauAchat);
            $fournisseur->IDPAYS = $this->verifNull($request->pays);
            $fournisseur->ObservationsContact1 = $this->verifNull($request->contact1);
            $fournisseur->RibCodeBanqueFournisseur = $this->verifNull($request->rib);
            $fournisseur->NccFournisseur = $this->verifNull($request->numCC);
            $fournisseur->DelaiTransport = $this->verifNull($request->delaiLivraison);
            $fournisseur->TelephoneFixeFseur2 = $this->verifNull($request->telFixe2);
            $fournisseur->TelephoneMobileFseur2 = $this->verifNull($request->telMobile2);
            $fournisseur->EmailFournisseur2 = $this->verifNull($request->mailFournisseur2);
            $fournisseur->ObservationsContact2 = $this->verifNull($request->contact2);
            $fournisseur->ValeurMiniCommande = $this->verifNull($request->valeurMiniCommande);
            $fournisseur->CiviliteInterlocuteur = $this->verifNull($request->civilite);
            $fournisseur->NomInterlocuteur = $this->verifNull($request->nomInterlocuteur);
            $fournisseur->DateNaissanceInterlocuteur = $this->verifNull($request->dateNAissance);
            $fournisseur->CompteTiersFournisseur = $this->verifNull($request->numCompteTiers);
            $fournisseur->EtatCompteFournisseur = $this->verifNull($request->etatCompte);
            $fournisseur->DelaiEcheanceFournisseur = $this->verifNull($request->delaiEcheance);

            $result = $fournisseur->save();

            echo json_encode(['error' => false, 'data'=>$result ,'message' => "Cet nom de fournisseur existe déjà !"]);
        } catch (Throwable $th) {

            echo json_encode(['error' => true, 'message' =>$th->getMessage()]);

        }

        echo json_encode($order);
    }

    public function listePays()
    {
        echo json_encode(selectAllTable("PAYS", ["IDPAYS", "NomPays"], '', ["NomPays", "ASC"]));
    }

    public function bureauAchat()
    {
        echo json_encode(selectAllTable("BUREAUACHAT", ["IDBUREAUACHAT", "NomBureauAchat"], '', ["NomBureauAchat", "ASC"]));
    }

    public function verifNull($val){
        return $val == null ? "" : $val;
    }
}
