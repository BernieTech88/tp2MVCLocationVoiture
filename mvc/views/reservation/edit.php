
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une réservation</title>
    <link rel="stylesheet" href="{{ asset }}/css/style-global.css">
</head>
<body>
<div class="container">

    <form
        action="{{ base }}/reservation/edit"
        method="post"
    >

        <h2>Modifier une réservation</h2>

        <input
            type="hidden"
            name="id"
            value="{{ reservation.id }}"
        >

        <label>
            Client

            <input
                type="number"
                name="client_id"
                value="{{ reservation.client_id }}"
                required
            >

            {% if errors.client_id %}
                <span class="error">
                    {{ errors.client_id }}
                </span>
            {% endif %}
        </label>

        <label>
            Voiture

            <input
                type="number"
                name="voiture_id"
                value="{{ reservation.voiture_id }}"
                required
            >

            {% if errors.voiture_id %}
                <span class="error">
                    {{ errors.voiture_id }}
                </span>
            {% endif %}
        </label>

        <label>
            Date début

            <input
                type="date"
                name="date_debut"
                value="{{ reservation.date_debut }}"
                required
            >
        </label>

        <label>
            Date fin

            <input
                type="date"
                name="date_fin"
                value="{{ reservation.date_fin }}"
                required
            >
        </label>

        <label>
            Statut

            <select name="statut">

                <option value="en_attente"
                    {% if reservation.statut == 'en_attente' %}
                        selected
                    {% endif %}
                >
                    En attente
                </option>

                <option value="confirmee"
                    {% if reservation.statut == 'confirmee' %}
                        selected
                    {% endif %}
                >
                    Confirmée
                </option>

                <option value="annulee"
                    {% if reservation.statut == 'annulee' %}
                        selected
                    {% endif %}
                >
                    Annulée
                </option>

            </select>

        </label>

        <input
            type="submit"
            class="btn"
            value="Enregistrer"
        >

    </form>

    <a
        href="{{ base }}/reservation/show?id={{ reservation.id }}"
        class="btn"
        style="margin-top:15px;"
    >
        Retour
    </a>

</div>
/body>
</html>