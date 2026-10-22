
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients</title>
    <link rel="stylesheet" href="{{ asset }}/css/style-global.css">
</head>
<body>
<h1>Liste des voitures</h1>

<div class="container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <th>Immatriculation</th>
                <th>Prix / jour</th>
                <th>Détails</th>
            </tr>
        </thead>

        <tbody>

            {% for voiture in voitures %}

            <tr>
                <td>{{ voiture.id }}</td>
                <td>{{ voiture.marque }}</td>
                <td>{{ voiture.modele }}</td>
                <td>{{ voiture.annee }}</td>
                <td>{{ voiture.immatriculation }}</td>
                <td>{{ voiture.prix_jour }} $</td>

                <td>
                    <a
                        href="{{ base }}/voiture/show?id={{ voiture.id }}"
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
        href="{{ base }}/voiture/create"
        class="btn btn-green"
    >
        Ajouter une voiture
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