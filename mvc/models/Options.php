<?php

namespace App\Models;
/** Représente une option offerte dans le système **/
class Option extends CRUD
{
    protected $table = 'options';
    /**Nom de la table associée au modèle */
    protected $primaryKey = 'id';
    /**Clé primaire de la table options */

     /**Liste des champs pour insert et update seulement */
    protected $fillable = [
        'nom',
        'prix_jour'
    ];
}