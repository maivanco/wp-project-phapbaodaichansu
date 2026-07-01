# WordPress Local Development Environment

A modern, containerised WordPress local development environment powered by **FrankenPHP**, **Docker Compose**, and **Vite**.

---

## 🧰 Tech Stack

### Runtime & Application

| Technology | Version | Role |
|---|---|---|
| [WordPress](https://wordpress.org/) | Latest | CMS / Application |
| [FrankenPHP](https://frankenphp.dev/) | Latest (`dunglas/frankenphp`) | PHP application server (replaces PHP-FPM + Nginx) |
| [PHP](https://www.php.net/) | Bundled with FrankenPHP | Server-side language |
| PHP Extension: `mysqli` | — | WordPress ↔ MySQL bridge |

### Web Server

| Technology | Role |
|---|---|
| [FrankenPHP](https://frankenphp.dev/) | Embeds Caddy as HTTP server |
| [Caddy](https://caddyserver.com/) (`Caddyfile`) | Reverse proxy, static asset caching, Vite HMR proxy, security rules |
| [Nginx](https://nginx.org/) (`nginx.conf`) | Legacy config (kept as reference; not used in the active stack) |

### Database

| Technology | Version | Role |
|---|---|---|
| [MySQL](https://www.mysql.com/) | `8.0` | Relational database for WordPress |

### Database UI

| Technology | Version | Role |
|---|---|---|
| [phpMyAdmin](https://www.phpmyadmin.net/) | Latest | Web-based database management UI |

### Frontend Build

| Technology | Version | Role |
|---|---|---|
| [Vite](https://vitejs.dev/) | `^5.4.0` | Frontend build tool & HMR dev server |
| [Node.js](https://nodejs.org/) | — | Required to run Vite |
| JavaScript (ESM) | — | Theme scripting (`vite/main.js`) |

### Infrastructure & DevOps

| Technology | Role |
|---|---|
| [Docker](https://www.docker.com/) | Container engine |
| [Docker Compose](https://docs.docker.com/compose/) | Multi-service orchestration (`docker-compose.yml` + override) |

---

## 🗂 Project Structure

```
wp-local-dev/
├── Dockerfile                    # Builds the WordPress + FrankenPHP image
├── Caddyfile                     # Caddy / FrankenPHP server configuration
├── docker-compose.yml            # Core services: WordPress + MySQL
├── docker-compose.override.yml   # Additional service: phpMyAdmin
├── env.default                   # Environment variable template
├── .env                          # Local environment variables (git-ignored)
├── start.local                   # Local development startup script
├── start.prod                    # Production startup script
├── package.json                  # Node.js project manifest
├── vite.config.js                # Vite build & dev-server config
├── vite/
│   └── main.js                   # Vite entry point (JS/CSS imports)
└── src-configs/
    ├── configs/
    │   ├── wp-config.php         # WordPress configuration
    │   └── php.ini               # Custom PHP settings
    ├── themes/                   # Custom WordPress themes (copied into image)
    └── plugins/                  # Custom WordPress plugins (copied into image)
```

---

## 🐳 Services

| Service | Container Name | Port | Description |
|---|---|---|---|
| `wordpress` | `local-wordpress` | `8001` | WordPress via FrankenPHP |
| `db` | `local-db` | — (internal) | MySQL 8.0 database |
| `phpmyadmin` | `local-phpmyadmin` | `8080` | phpMyAdmin UI |

### Volumes

| Volume | Mount Point | Purpose |
|---|---|---|
| `db_data` | `/var/lib/mysql` | Persistent MySQL data |
| `wp_uploads` | `/app/public/wp-content/uploads` | Persistent WordPress media uploads |

---

## ⚙️ PHP Configuration

Configured via `src-configs/configs/php.ini`:

| Setting | Value |
|---|---|
| `upload_max_filesize` | 100M |
| `post_max_size` | 100M |
| `memory_limit` | 256M |
| `max_execution_time` | 300s |
| `display_errors` | On (development mode) |
| OPcache | Enabled (`128MB` memory) |

---

## 🚀 Getting Started

### Prerequisites

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed and running
- [Node.js](https://nodejs.org/) (for Vite frontend build)

### 1. Start the project

For **local development** (includes Vite dev server and phpMyAdmin):
```bash
./start.local
```

For **production** (only core services, no dev tools):
```bash
./start.prod
```

### 3. Access the services

| Service | URL |
|---|---|
| WordPress | http://localhost:8001 |
| phpMyAdmin | http://localhost:8080 |
| Vite dev server | http://localhost:5173 |

---

## 🏗 Build (Production Assets)

```bash
npm run build
```

Built assets are output to `src-configs/themes/default-theme/dist` with the following structure:

```
dist/
├── js/         # JavaScript bundles
├── css/        # Compiled stylesheets
└── assets/     # Images and other static assets
```

---

## 🔧 Environment Variables

Copy `env.default` to `.env` and customise as needed:

```env
ENVIRONMENT=local

WORDPRESS_DB_HOST=db
WORDPRESS_DB_USER=default_user
WORDPRESS_DB_PASSWORD=default_password
WORDPRESS_DB_NAME=wp_db
WORDPRESS_DB_ROOT_PASSWORD=default_root_password
```

---

## 🔄 Useful Commands

```bash
# Start local development environment
./start.local

# Start production environment
./start.prod

# Stop all services
docker compose down

# Reset database (⚠️ destroys all data)
docker compose down -v

# Rebuild the WordPress image
docker compose build --no-cache

# View logs
docker compose logs -f wordpress
docker compose logs -f db
```

## Intro
- This project uses