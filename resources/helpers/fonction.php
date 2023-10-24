<?php
    use Illuminate\Support\Facades\DB;

    function getMessageErreur($codeErreur) {
        switch ($codeErreur) {
            case '23505':
                return "Erreur : Violation de contrainte d'unicité. La valeur que vous essayez d'insérer existe déjà dans la base de données.";
            case '23503':
                return "Erreur : Violation de clé étrangère. La valeur de la clé étrangère spécifiée n'existe pas dans la table parente.";
            case '42501':
                return "Erreur : Accès refusé. Vous n'avez pas les permissions nécessaires pour accéder à la base de données.";
            case '22012':
                return "Erreur : Division par zéro. Vous ne pouvez pas diviser par zéro dans une opération mathématique.";
            case '42P01':
                return "Erreur : Table inexistante. La table spécifiée n'existe pas dans la base de données.";
            case '42804':
                return "Erreur : Type de données incorrect. La valeur spécifiée ne correspond pas au type de données de la colonne.";
            default:
                return "Erreur inconnue : code d'erreur " . $codeErreur;
        }
    }

    function soldeProtocole($IDCLIENT){

        // Exécution de l'union des deux requêtes
        $results = DB::table('REGLEMENTCLIENT')
                    ->select(DB::raw('COALESCE(SUM("MontantReglementClient"), 0) as "totalRegle", 0 as "MontantTTCProtocoleClient"'))
                    ->where('IDCLIENT', $IDCLIENT)
                    ->where('IDPROTOCOLECLIENT','>', 0)
                    ->union(
                        DB::table('PROTOCOLECLIENT')
                            ->select(DB::raw('0 as "totalRegle", COALESCE(SUM("MontantTTCProtocoleClient"), 0) as "MontantTTCProtocoleClient"'))
                            ->where('IDCLIENT', $IDCLIENT)
                    )
                    ->get();

        // Calcul du cumul des résultats
        $montantReglementTotal = $results->sum('totalRegle');
        $montantTTCProtocoleTotal = $results->sum('MontantTTCProtocoleClient');

        $soldeProtocole = $montantTTCProtocoleTotal - $montantReglementTotal;

        return $soldeProtocole;
    }

    function selectAllTable($Table, $rubrique = '*', $condition = '' , $order = ''){

        $results = DB::table($Table);

        $results->select($rubrique);

        if(gettype($condition) == "array"){
            foreach ($condition as $key => $value) {

                if(count($value) == 3){

                    $results -> where($value[0], $value[1], $value[2]);
                }elseif(count($value) == 2){

                    $results -> where($value[0], $value[1]);
                }elseif(count($value) == 4){

                    $results -> where($value[0], $value[1], $value[2], $value[3]);
                }elseif(count($value) == 5){

                    $results -> where($value[0], $value[1], $value[2], $value[3], $value[4]);
                }
            }
        }

        if (gettype($order) == "array") {
            
            foreach ($order as $key => $value) {
                
                $results -> orderBy($order[0], $order[1]);
            }
        }

        return $results -> get();
    }

    function verifExisteVal($table, $col, $cond ,$val){
        DB::table($table)
            ->where($col, $cond ,$val)
            ->where("IDPaysProprietaire", session()->get("IDPaysProprietaire"))
            ->count();
    }