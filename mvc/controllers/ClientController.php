<?php

namespace App\Controllers;

use App\Models\Client;
use App\Providers\View;
use App\Providers\Validator;


 /** Contrôleur de gestion des clients **/
 /**crud pour client */
class ClientController
{
    public function index()
    {
        $client = new Client();
         /** recupere tous les clients de la bd**/
        $clients = $client->select();
        /** s il y a des clients */
        if ($clients) {
           /**transmet la liste de clients à la vue **/
           /** et retourne la vue */
            return View::render(
                'client/index',
                [
                    'clients' => $clients
                ]
            );

        } else {

            echo "Erreur lors du chargement des clients";

        }
    }

    public function show($data = []){
    if (isset($data['id'])) {
        /** si id est inclut */
        $id = $data['id'];

        $client = new Client();
/**Recherche un client à partir de son id **/
        $result = $client->selectId($id);

        if ($result) {
            /** s il y a un client */
       /** retorne  la vue client/show avec les donnees*/
            return View::render(
                'client/show',
                [
                    'client' => $result
                ]
            );

        } else {

            View::redirect('clients');
          /** redirige vers la liste de clients index*/
        }

    } else {

        View::redirect('clients');

    }
}

public function create()
{   /** retourne la vue pour la creation du client */
    return View::render('client/create');
}

/**Enregis*re un nouveau client */
public function store(array $data)
{
    $val = new \App\Providers\Validator();

    /**validation des champs */
    $val->field('nom', $data['nom'])
        ->required()
        ->min(2)
        ->max(100);

    $val->field('prenom', $data['prenom'])
        ->required()
        ->min(2)
        ->max(100);

    $val->field('email', $data['email'])
        ->required()
        ->email();

    if ($val->isSuccess()) {
        /** cree le noveau client */
        $client = new Client();
        /** insert le client dans la bd */
        $insert = $client->insert($data);

        if ($insert) {
            /** si l insertion est reussi **/
           /** retourne la vue avec le nouveau client insere */
            return View::redirect(
                'client/show?id=' . $insert
            );

        } else {

            echo "Erreur d'insertion";

        }

    } else {

        return View::render(
            'client/create',
            [
                'errors' => $val->getErrors(),
                'client' => $data
            ]
        );
    }
}

/** Recherche le client à partir de son id */
public function edit($data = [])
{
    /** si id est inclut **/
    if (isset($data['id'])) {

        $id = $data['id'];

        $client = new Client();

       /** recupere les donnes du client  */
        $result = $client->selectId($id);

        if ($result) {
            /** s il y a un client */
       /** retourne la vue avec les donnees du client  */
            return View::render(
                'client/edit',
                [
                    'client' => $result
                ]
            );

        } else {

            View::redirect('clients');

        }

    } else {

        View::redirect('clients');

    }
}

/**Met à jour les informations d'un client  **/
public function update(array $data)
{
    $id = $data['id'];

    $validator = new Validator();

    /**validation des champs */
    $validator->field('nom', $data['nom'])
        ->required()
        ->min(2)
        ->max(100);

    $validator->field('prenom', $data['prenom'])
        ->required()
        ->min(2)
        ->max(100);

    $validator->field('email', $data['email'])
        ->required()
        ->email();

        /** si la validation des champs reussi */
    if ($validator->isSuccess()) {

        $client = new Client();
  /** met les modifications dans la bd */
        $update = $client->update(
            $data,
            $id
        );

        if ($update) {
           /** si les modifications sont bien inseree */
           /** retourne la vue avec le client mmodifie */
            return View::redirect(
                'client/show?id=' . $id
            );

        } else {

            echo "Erreur lors de la mise à jour.";

        }

    } else {

        return View::render(
            'client/edit',
            [
                'errors' => $validator->getErrors(),
                'client' => $data
            ]
        );

    }
}

/** Supression d un clent avec son id */
public function delete(array $data)
{
    if (!isset($data['id'])) {
       /** si l id du client n est pas inclut  */
       /** retourne la vue sans supresion du client */
        return View::redirect('clients');

    }

    $id = $data['id'];

    $client = new Client();

    $delete = $client->delete($id);
    /**supprime le client de la bd */
    if ($delete) {
       /** retoune la vue sans le client supprimer */
        return View::redirect('clients');

    } else {

        echo "Erreur lors de la suppression du client.";

    }
}

}//class