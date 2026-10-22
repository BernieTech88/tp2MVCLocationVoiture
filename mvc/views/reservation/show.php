?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la réservation</title>
    <link rel="stylesheet" href="{{ asset }}/css/style-global.css?v=1.0">
</head>
<body>
<h1>Détails de la réservation</h1>

<div class="container">

    <table>
        <tbody>

            <tr>
                <th>ID</th>
                <td>{{ reservation.id }}</td>
            </tr>

            <tr>
                <th>Client</th>
                <td>{{ reservation.client_id }}</td>
            </tr>

            <tr>
                <th>Voiture</th>
                <td>{{ reservation.voiture_id }}</td>
            </tr>

            <tr>
                <th>Date début</th>
                <td>{{ reservation.date_debut }}</td>
            </tr>

            <tr>
                <th>Date fin</th>
                <td>{{ reservation.date_fin }}</td>
            </tr>

            <tr>
                <th>Statut</th>
                <td>{{ reservation.statut }}</td>
            </tr>

        </tbody>
    </table>

    <a
        href="{{ base }}/reservation/edit?id={{ reservation.id }}"
        class="btn btn-green"
    >
        Modifier
    </a>

    <form
        action="{{ base }}/reservation/delete"
        method="post"
        style="display:inline-block; margin-left:10px;"
    >

        <input
            type="hidden"
            name="id"
            value="{{ reservation.id }}"
        >

        <input
            type="submit"
            value="Supprimer"
            class="btn red"
        >

    </form>

    <a
        href="{{ base }}/reservations"
        class="btn btn-back"
        style="margin-left:10px;"
    >
        Retour
    </a>

</div>
</body>
</html>