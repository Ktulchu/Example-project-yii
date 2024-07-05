ARG DOCKER_YII2_PHP_IMAGE
FROM ${DOCKER_YII2_PHP_IMAGE}

RUN composer self-update --2

RUN apt-get update \
    && apt-get install -y \
        wget \
        gdebi \
        imagemagick \
    && wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.buster_amd64.deb \
    && gdebi --n wkhtmltox_0.12.6-1.buster_amd64.deb \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

COPY etc/php.ini /usr/local/etc/php/conf.d/base.ini