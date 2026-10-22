

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients</title>
    <link rel="stylesheet" href="{{ asset }}/css/style-global.css">
</head>
<body>
<h1>Liste des réservations</h1>

<div class="container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Voiture</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Statut</th>
                <th>Détails</th>
            </tr>
        </thead>

        <tbody>

            {% for reservation in reservations %}

            <tr>

                <td>{{ reservation.id }}</td>

                <td>{{ reservation.client_id }}</td>

                <td>{{ reservation.voiture_id }}</td>

                <td>{{ reservation.date_debut }}</td>

                <td>{{ reservation.date_fin }}</td>

                <td>{{ reservation.statut }}</td>

                <td>
                    <a
                        href="{{ base }}/reservation/show?id={{ reservation.id }}"
                        class="btn-blue"
                    >
                        Voir
                    </a>
                </td>

            </tr>

            {% endfor %}

        </tbody>

    </table>

    <a
        href="{{ base }}/reservation/create"
        class="btn btn-green"
    >
        Nouvelle réservation
    </a>

    <a
        href="{{ base }}/"
        class="btn btn-back"
        style="margin-left:10px;"
    >
        Retour à l'accueil
    </a>

</div>

</body>
</html>
