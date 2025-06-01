# Laravel Workshop Projekt

Dieses Projekt ist eine Laravel-Anwendung mit Docker-Containerisierung für die Entwicklungsumgebung.

## Systemanforderungen

- Docker Desktop
- Git
- Mindestens 4GB RAM für Docker
- Mindestens 10GB freier Speicherplatz

## Installation

1. Repository klonen:
```bash
git clone [repository-url]
cd [projekt-name]
```

2. Umgebungsvariablen konfigurieren:
```bash
cp .env.example .env
```
Bearbeiten Sie die `.env`-Datei und passen Sie die Datenbank-Einstellungen an (sollte eigentlich schon passiert sein):
```env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=workshop
DB_USERNAME=admin
DB_PASSWORD=password
```

3. Docker-Container starten:
```bash
docker compose up -d --build
```

4. Composer-Abhängigkeiten installieren:
```bash
docker compose exec app composer install
```

5. Laravel-Konfiguration:
```bash
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
```

6. Frontend-Abhängigkeiten installieren:
```bash
docker compose exec bun bun install
```

## Entwicklungsumgebung

Die Anwendung ist über folgende URLs erreichbar:

- Laravel-Anwendung: http://localhost:10000
- Vite-Dev-Server: http://localhost:10001

### Container-Übersicht

- **app**: PHP 8.4 mit Laravel
- **nginx**: Webserver
- **bun**: Frontend-Entwicklung mit Vite
- **db**: MySQL 8.0 Datenbank

### Nützliche Befehle

#### Laravel-Befehle
```bash
# Artisan-Befehle ausführen
docker compose exec app php artisan [befehl]

# Composer-Befehle ausführen
docker compose exec app composer [befehl]
```

#### Frontend-Befehle
```bash
# Vite-Dev-Server starten
docker compose exec bun bun run dev

# Frontend-Assets bauen
docker compose exec bun bun run build

# In den Bun-Container einsteigen
docker compose exec bun bash
```

#### Docker-Befehle
```bash
# Container neu starten
docker compose restart

# Container stoppen
docker compose down

# Logs anzeigen
docker compose logs -f [service-name]
```

## Datenbank

Die MySQL-Datenbank ist über folgende Einstellungen erreichbar:
- Host: localhost
- Port: 10002
- Datenbank: workshop
- Benutzer: admin
- Passwort: password

## Fehlerbehebung

### Vite-Dev-Server nicht erreichbar
1. Prüfen Sie, ob der Bun-Container läuft:
```bash
docker compose ps
```

2. Vite neu starten:
```bash
docker compose exec bun bun run dev
```

### Datenbank-Verbindungsprobleme
1. Prüfen Sie die `.env`-Datei
2. Container neu starten:
```bash
docker compose restart
```

### Berechtigungsprobleme
```bash
docker compose exec app chown -R www-data:www-data /var/www
```