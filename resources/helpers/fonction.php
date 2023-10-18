<?php

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