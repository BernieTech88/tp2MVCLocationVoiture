<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une voiture</title>
    <<link rel="stylesheet" href="{{ asset }}/css/style-global.css">
</head>
<body>

<div class="container">

    <form action="{{ base }}/voiture/edit" method="post">

        <h2>Modifier une voiture</h2>

        <input
            type="hidden"
            name="id"
            value="{{ voiture.id }}"
        >

        <label>
            Marque

            <input
                type="text"
                name="marque"
                value="{{ voiture.marque }}"
                required
            >

            {% if errors.marque %}
                <span class="error">
                    {{ errors.marque }}
                </span>
            {% endif %}
        </label>

        <label>
            Modèle

            <input
                type="text"
                name="modele"
                value="{{ voiture.modele }}"
                required
            >

            {% if errors.modele %}
                <span class="error">
                    {{ errors.modele }}
                </span>
            {% endif %}
        </label>

        <label>
            Année

            <input
                type="number"
                name="annee"
                value="{{ voiture.annee }}"
                required
            >

            {% if errors.annee %}
                <span class="error">
                    {{ errors.annee }}
                </span>
            {% endif %}
        </label>

        <label>
            Immatriculation

            <input
                type="text"
                name="immatriculation"
                value="{{ voiture.immatriculation }}"
                required
            >

            {% if errors.immatriculation %}
                <span class="error">
                    {{ errors.immatriculation }}
                </span>
            {% endif %}
        </label>

        <label>
            Prix par jour

            <input
                type="number"
                step="0.01"
                name="prix_jour"
                value="{{ voiture.prix_jour }}"
                required
            >

            {% if errors.prix_jour %}
                <span class="error">
                    {{ errors.prix_jour }}
                </span>
            {% endif %}
        </label>

        <input
            type="submit"
            class="btn"
            value="Enregistrer"
        >

    </form>

    <a
        href="{{ base }}/voiture/show?id={{ voiture.id }}"
        class="btn"
        style="margin-top:15px;"
    >
        Retour
    </a>

</div>
</body>
</html>