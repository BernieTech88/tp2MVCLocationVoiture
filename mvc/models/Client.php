<?php

namespace App\Models;
/** Représente les clients enregistrés dans la bd */
class Client extends CRUD
{
    protected $table = 'clients';
    /**Nom de la table associée au modèle */
    protected $primaryKey = 'id';
    /**Clé primaire de la table clients */

    /**Liste des champs pour insert et update seulement */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone'
    ];
}