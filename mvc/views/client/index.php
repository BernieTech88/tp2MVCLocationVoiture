
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients</title>
    <link rel="stylesheet" href="{{ asset }}/css/style-global.css">
</head>
<body>
    <h1>Liste des clients</h1>

<div class="container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Détails</th>
            </tr>
        </thead>

        <tbody>

            {% for client in clients %}

            <tr>

                <td>{{ client.id }}</td>

                <td>{{ client.nom }}</td>

                <td>{{ client.prenom }}</td>

                <td>{{ client.email }}</td>

                <td>{{ client.telephone }}</td>

                <td>
                    <a
                        href="{{ base }}/client/show?id={{ client.id }}"
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
        href="{{ base }}/client/create"
        class="btn btn-green"
    >
        Nouveau client
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
