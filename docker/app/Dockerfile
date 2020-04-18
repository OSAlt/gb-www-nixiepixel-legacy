FROM php:7.4
RUN apt-get update -y && apt-get install -y \
    openssl \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    zlib1g-dev \
    libpq-dev \
    postgresql-server-dev-all \
    libonig-dev \
    libzip-dev \
    netcat

COPY . /app
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl 

RUN cd /app && \
    composer update && \
    composer install --no-scripts  && \ 
    useradd -ms /bin/bash app_user && \
    chown -R app_user:users /app && \
    cp docker/app/docker_run.sh /app

WORKDIR /app
VOLUME /app
VOLUME /app/public/storage

USER app_user

CMD /app/docker_run.sh
EXPOSE 9000
