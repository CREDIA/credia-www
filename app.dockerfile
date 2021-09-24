FROM php:7.3-fpm
# Copiar composer.lock y composer.json
COPY composer.lock composer.json /var/www/

# Establecer el directorio de trabajo
WORKDIR /var/www

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    git \
    curl \
    vim \
    nano

# Instalar Node JS y NPM
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y \
    nodejs 

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN  apt update
RUN apt install yarn    
RUN npm install --global lerna
# Limpiar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN  apt-get update && apt install -y unzip zlib1g-dev libicu-dev libsqlite3-dev sqlite3 libpng-dev  libzip-dev wget
RUN  docker-php-ext-install pdo_sqlite pdo_mysql zip pcntl intl gd
RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis


# Instalar composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --version=1.10.13 --filename=composer

# Agregar usuario para la aplicacion laravel
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copiar los contenidos del directorio existente de la aplicacion
COPY . /var/www

# Copiar los permisos del directorio de la aplicacion
COPY --chown=www:www . /var/www

# Cambiar el usuario actual a www
USER www

EXPOSE 9000
CMD ["php-fpm"]