
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau client</title>
    <link rel="stylesheet" href="{{ asset }}/css/style-global.css">
</head>
<body>
<div class="container">

    <form action="{{ base }}/client/create" method="post">

        <h2>Ajouter un client</h2>

        <label>
            Nom

            <input
                type="text"
                name="nom"
                value="{{ client.nom|default('') }}"
                required
            >

            {% if errors.nom %}
                <span class="error">
                    {{ errors.nom }}
                </span>
            {% endif %}
        </label>

        <label>
            Prénom

            <input
                type="text"
                name="prenom"
                value="{{ client.prenom|default('') }}"
                required
            >

            {% if errors.prenom %}
                <span class="error">
                    {{ errors.prenom }}
                </span>
            {% endif %}
        </label>

        <label>
            Email

            <input
                type="email"
                name="email"
                value="{{ client.email|default('') }}"
                required
            >

            {% if errors.email %}
                <span class="error">
                    {{ errors.email }}
                </span>
            {% endif %}
        </label>

        <label>
            Téléphone

            <input
                type="text"
                name="telephone"
                value="{{ client.telephone|default('') }}"
            >
        </label>

        <input
            type="submit"
            class="btn"
            value="Enregistrer"
        >

    </form>

    <a
        href="{{ base }}/clients"
        class="btn"
        style="margin-top:15px;"
    >
        Retour
    </a>

</div>
</body>
</html>