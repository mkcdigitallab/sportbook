#!/bin/bash

set -e

# Charger les variables du fichier .env
set -a
source .env
set +a

DB_CONTAINER="sportbook-db"
DB_USER="$DB_USERNAME"
DB_PASSWORD="$DB_PASSWORD"
DB_NAME="$DB_DATABASE"

case "$1" in

    migrate-terrains)
        echo "🏟️ Création de la table terrains..."
        docker exec -i "$DB_CONTAINER" \
            mysql -u"$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" \
            < database/migrations/001_create_terrains.sql
        echo "✅ Table terrains créée."
        ;;

    migrate-reservations)
        echo "📅 Création de la table reservations..."
        docker exec -i "$DB_CONTAINER" \
            mysql -u"$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" \
            < database/migrations/002_create_reservations.sql
        echo "✅ Table reservations créée."
        ;;

    migrate)
        echo "🚀 Exécution des migrations..."
        docker exec -i "$DB_CONTAINER" \
            mysql -u"$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" \
            < database/migrations/001_create_terrains.sql

        docker exec -i "$DB_CONTAINER" \
            mysql -u"$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" \
            < database/migrations/002_create_reservations.sql

        echo "✅ Toutes les migrations sont terminées."
        ;;

    tables)
        echo "📋 Tables de la base sportbook :"
        docker exec -it "$DB_CONTAINER" \
            mysql -u"$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" \
            -e "SHOW TABLES;"
        ;;

    terrains)
        echo "🏟️ Terrains :"
        docker exec -it "$DB_CONTAINER" \
            mysql -u"$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" \
            -e "SELECT * FROM terrains;"
        ;;

    reservations)
        echo "📅 Réservations :"
        docker exec -it "$DB_CONTAINER" \
            mysql -u"$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" \
            -e "SELECT * FROM reservations;"
        ;;

    seed)
        echo "🌱 Insertion des données de démonstration..."
        docker exec -it sportbook-app php database/seed.php
        echo "✅ Données insérées avec succès."
        ;;
    php-version)
        echo "🐘 Version PHP du conteneur :"
        docker exec -it sportbook-app php -v
        ;;

    php-modules)
        echo "🧩 Modules PHP du conteneur :"
        docker exec -it sportbook-app php -m | grep -E 'PDO|pdo_mysql'
        ;;

    status)
        docker compose ps
        ;;

    logs)
        docker compose logs --tail=50
        ;;

    *)
        echo "SportBook - Commandes personnalisées"
        echo ""
        echo "Utilisation :"
        echo "  ./scripts/malang-kiya-ciss.sh seed"
        echo "  ./scripts/malang-kiya-ciss.sh migrate-terrains"
        echo "  ./scripts/malang-kiya-ciss.sh migrate-reservations"
        echo "  ./scripts/malang-kiya-ciss.sh migrate"
        echo "  ./scripts/malang-kiya-ciss.sh tables"
        echo "  ./scripts/malang-kiya-ciss.sh terrains"
        echo "  ./scripts/malang-kiya-ciss.sh reservations"
        echo "  ./scripts/malang-kiya-ciss.sh status"
        echo "  ./scripts/malang-kiya-ciss.sh logs"
        exit 1
        ;;

esac
