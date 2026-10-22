<?php

namespace App\Models;
/** Représente de reservations enregistrés dans la bd */
class Reservation extends CRUD
{
    protected $table = 'reservations';
    /**Nom de la table associée au modèle */
    protected $primaryKey = 'id';
      /**Clé primaire de la table reservation */

      /**Liste des champs pour insert et update seulement */
    protected $fillable = [
        'client_id',
        'voiture_id',
        'date_debut',
        'date_fin',
        'statut'
    ];
}