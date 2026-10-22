<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du client</title>
    <link rel="stylesheet" href="{{ asset }}/css/style-global.css?v=1.0">
</head>
<body>

<h1>Détails du client</h1>

<div class="container">

    <table>
        <tbody>

            <tr>
                <th>ID</th>
                <td>{{ client.id }}</td>
            </tr>

            <tr>
                <th>Nom</th>
                <td>{{ client.nom }}</td>
            </tr>

            <tr>
                <th>Prénom</th>
                <td>{{ client.prenom }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ client.email }}</td>
            </tr>

            <tr>
                <th>Téléphone</th>
                <td>{{ client.telephone }}</td>
            </tr>

        </tbody>
    </table>

    <a
        href="{{ base }}/client/edit?id={{ client.id }}"
        class="btn btn-green"
    >
        Modifier
    </a>

    <form
        action="{{ base }}/client/delete"
        method="post"
        style="display:inline-block; margin-left:10px;"
    >

        <input
            type="hidden"
            name="id"
            value="{{ client.id }}"
        >

        <input
            type="submit"
            value="Supprimer"
            class="btn red"
        >

    </form>

    <a
        href="{{ base }}/clients"
        class="btn btn-back"
        style="margin-left:10px;"
    >
        Retour
    </a>

</div>
