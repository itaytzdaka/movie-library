


# ==========================
# 1️⃣ Stage: PHP dependencies
# ==========================
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-progress --no-interaction --no-scripts


# ==========================
# 2️⃣ Stage: Node build (Vite)
# ==========================
FROM node:20-alpine AS frontend
WORKDIR /app

# Copy and install Node deps
COPY package*.json ./
RUN npm ci

COPY --from=vendor /app/vendor ./vendor

# Copy your frontend source (adjust paths if needed)
# COPY public/ public/
COPY resources/ resources/
COPY vite.config.* ./

# Build production assets into /public/build
RUN npm run build




# ==========================
# 3️⃣ Stage: Laravel runtime
# ==========================
FROM thecodingmachine/php:8.2-v4-cli AS app

USER root

RUN apt-get update && apt-get install -y --no-install-recommends \
      netcat-openbsd \
  && rm -rf /var/lib/apt/lists/*


WORKDIR /var/www

# Copy app code
COPY . .

# Copy Composer vendor folder
COPY --from=vendor /app/vendor ./vendor

# Copy built frontend assets
COPY --from=frontend /app/public/build ./public/build

# Expose Laravel dev server port
EXPOSE 8000

# Optional: copy entrypoint script
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]