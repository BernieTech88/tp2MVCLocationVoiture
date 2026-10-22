<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la voiture</title>
    <link rel="stylesheet" href="{{ asset }}/css/style-global.css?v=1.0">
</head>
<body>

<h1>Détails de la voiture</h1>

<div class="container">

    <table>
        <tbody>

            <tr>
                <th>ID</th>
                <td>{{ voiture.id }}</td>
            </tr>

            <tr>
                <th>Marque</th>
                <td>{{ voiture.marque }}</td>
            </tr>

            <tr>
                <th>Modèle</th>
                <td>{{ voiture.modele }}</td>
            </tr>

            <tr>
                <th>Année</th>
                <td>{{ voiture.annee }}</td>
            </tr>

            <tr>
                <th>Immatriculation</th>
                <td>{{ voiture.immatriculation }}</td>
            </tr>

            <tr>
                <th>Prix / jour</th>
                <td>{{ voiture.prix_jour }} $</td>
            </tr>

        </tbody>
    </table>

    <a
        href="{{ base }}/voiture/edit?id={{ voiture.id }}"
        class="btn btn-green"
    >
        Modifier
    </a>

    <form
        action="{{ base }}/voiture/delete"
        method="post"
        style="display:inline-block; margin-left:10px;"
    >

        <input
            type="hidden"
            name="id"
            value="{{ voiture.id }}"
        >

        <input
            type="submit"
            value="Supprimer"
            class="btn red"
        >

    </form>

    <a
        href="{{ base }}/voitures"
        class="btn btn-back"
        style="margin-left:10px;"
    >
        Retour
    </a>

</div>
</body>
</html>