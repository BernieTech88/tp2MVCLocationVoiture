<?php

namespace App\Controllers;

use App\Models\Reservation;
use App\Models\Client;
use App\Models\Voiture;
use App\Providers\View;
use App\Providers\Validator;

class ReservationController
{
    public function index()
    {
        $reservation = new Reservation();

        $reservations = $reservation->select();

        return View::render(
            'reservation/index',
            [
                'reservations' => $reservations
            ]
        );
    }

    public function show($data = [])
    {
        if (isset($data['id'])) {

            $id = $data['id'];

            $reservation = new Reservation();

            $result = $reservation->selectId($id);

            if ($result) {

                return View::render(
                    'reservation/show',
                    [
                        'reservation' => $result
                    ]
                );

            } else {

                View::redirect('reservations');

            }

        } else {

            View::redirect('reservations');

        }
    }

    public function create()
    {
        $client = new Client();
        $voiture = new Voiture();

        return View::render(
            'reservation/create',
            [
                'clients' => $client->select(),
                'voitures' => $voiture->select()
            ]
        );
    }

    public function store(array $data)
    {
        $validator = new Validator();

        $validator->field(
            'client_id',
            $data['client_id'] ?? ''
        )
        ->required()
        ->int();

        $validator->field(
            'voiture_id',
            $data['voiture_id'] ?? ''
        )
        ->required()
        ->int();

        $validator->field(
            'date_debut',
            $data['date_debut'] ?? ''
        )
        ->required();

        $validator->field(
            'date_fin',
            $data['date_fin'] ?? ''
        )
        ->required();

        if ($validator->isSuccess()) {

            $reservation = new Reservation();

            $insert = $reservation->insert($data);

            if ($insert) {

                return View::redirect(
                    'reservation/show?id=' . $insert
                );

            } else {

                echo "Erreur d'insertion";

            }

        } else {

            $client = new Client();
            $voiture = new Voiture();

            return View::render(
                'reservation/create',
                [
                    'errors' => $validator->getErrors(),
                    'reservation' => $data,
                    'clients' => $client->select(),
                    'voitures' => $voiture->select()
                ]
            );

        }
    }

    public function edit($data = [])
    {
        if (isset($data['id'])) {

            $id = $data['id'];

            $reservation = new Reservation();

            $result = $reservation->selectId($id);

            if ($result) {

                $client = new Client();
                $voiture = new Voiture();

                return View::render(
                    'reservation/edit',
                    [
                        'reservation' => $result,
                        'clients' => $client->select(),
                        'voitures' => $voiture->select()
                    ]
                );

            } else {

                View::redirect('reservations');

            }

        } else {

            View::redirect('reservations');

        }
    }

    public function update(array $data)
    {
        if (!isset($data['id'])) {

            return View::redirect('reservations');

        }

        $id = $data['id'];

        $validator = new Validator();

        $validator->field(
            'client_id',
            $data['client_id'] ?? ''
        )
        ->required()
        ->int();

        $validator->field(
            'voiture_id',
            $data['voiture_id'] ?? ''
        )
        ->required()
        ->int();

        $validator->field(
            'date_debut',
            $data['date_debut'] ?? ''
        )
        ->required();

        $validator->field(
            'date_fin',
            $data['date_fin'] ?? ''
        )
        ->required();

        if ($validator->isSuccess()) {

            $reservation = new Reservation();

            $update = $reservation->update(
                $data,
                $id
            );

            if ($update) {

                return View::redirect(
                    'reservation/show?id=' . $id
                );

            } else {

                echo "Erreur lors de la mise à jour.";

            }

        } else {

            $client = new Client();
            $voiture = new Voiture();

            return View::render(
                'reservation/edit',
                [
                    'errors' => $validator->getErrors(),
                    'reservation' => $data,
                    'clients' => $client->select(),
                    'voitures' => $voiture->select()
                ]
            );

        }
    }

    public function delete(array $data)
    {
        if (!isset($data['id'])) {

            return View::redirect('reservations');

        }

        $id = $data['id'];

        $reservation = new Reservation();

        $delete = $reservation->delete($id);

        if ($delete) {

            return View::redirect('reservations');

        } else {

            echo "Erreur lors de la suppression.";

        }
    }
}