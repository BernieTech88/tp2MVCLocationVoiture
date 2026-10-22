
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier client</title>
   <link rel="stylesheet" href="{{ asset }}/css/style-global.css">
</head>
<body>
<div class="container">

    <form action="{{ base }}/client/edit" method="post">

        <h2>Modifier un client</h2>

        <input
            type="hidden"
            name="id"
            value="{{ client.id }}"
        >

        <label>
            Nom

            <input
                type="text"
                name="nom"
                value="{{ client.nom }}"
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
                value="{{ client.prenom }}"
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
                value="{{ client.email }}"
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
                value="{{ client.telephone }}"
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
