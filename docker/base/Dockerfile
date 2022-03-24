FROM php:8.1
RUN  \
    curl -sL https://deb.nodesource.com/setup_12.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g yarn && \
    apt-get install -y \
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
    netcat && \
    nodejs && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl   && \
    composer global require hirak/prestissimo



