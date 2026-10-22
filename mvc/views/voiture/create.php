<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une voiture</title>
    <<link rel="stylesheet" href="{{ asset }}/css/style-global.css">
</head>
<body>
<div class="container">

    <form action="{{ base }}/voiture/create" method="post">

        <h2>Ajouter une voiture</h2>

        <label>
            Marque

            <input
                type="text"
                name="marque"
                value="{{ voiture.marque|default('') }}"
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
                value="{{ voiture.modele|default('') }}"
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
                value="{{ voiture.annee|default('') }}"
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
                value="{{ voiture.immatriculation|default('') }}"
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
                type="text"
                name="prix_jour"
                value="{{ voiture.prix_jour|default('') }}"
            >

            {% if errors.prix_jour %}
                <span class="error">
                    {{ errors.prix_jour }}
                </span>
            {% endif %}
        </label>

        <input
            type="submit"
            value="Enregistrer"
            class="btn"
        >

    </form>

    <a
        href="{{ base }}/voitures"
        class="btn"
        style="margin-top:15px;"
    >
        Retour
    </a>

</div>
</body>
</html>