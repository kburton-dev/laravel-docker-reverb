FROM composer AS composer
FROM dunglas/frankenphp:latest-php8.3-bookworm

ARG USER=app
ENV SERVER_NAME=:80
ENV XDG_CONFIG_HOME=/app/.config

RUN \
    useradd $USER; \
    setcap -r /usr/local/bin/frankenphp; \
    chown -R $USER:$USER /data/caddy; \
    chown -R $USER:$USER /config/caddy; \
    chown -R $USER:$USER /app;

RUN install-php-extensions \
    gd \
    xml \
    xsl \
    zip \
    curl \
    intl \
    pcov \
    soap \
    oauth \
    pcntl \
    redis \
    bcmath \
    mysqli \
    xhprof \
    xdebug \
    imagick \
    sockets \
    sqlite3 \
    opcache \
    mbstring \
    readline \
    pdo_mysql

RUN \
    mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"; \
    mkdir /app/vendor && chown $USER:$USER /app/vendor;

USER $USER

COPY --link ./local-dev.ini /usr/local/etc/php/conf.d/local-dev.ini
COPY --chown=$USER:$USER --link --from=composer /usr/bin/composer /usr/bin/composer