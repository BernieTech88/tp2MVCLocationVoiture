<?php

namespace App\Models;
/** Représente des voitures enregistrés dans la bd */
class Voiture extends CRUD
{
    protected $table = 'voitures';
    /**Nom de la table associée au modèle */
    protected $primaryKey = 'id';
     /**Clé primaire de la table voiture */

    /**Liste des champs pour insert et update seulement */
    protected $fillable = [
        'marque',
        'modele',
        'annee',
        'immatriculation',
        'prix_jour'
    ];
}