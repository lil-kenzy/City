# Use official PHP + Apache image
FROM php:8.2-apache

# Enable Apache rewrite and configure to listen on $PORT
RUN a2enmod rewrite

# Expose container port (Render will map $PORT → this)
EXPOSE 80

# Make Apache listen on the env PORT (default to 80)
ENV PORT 80
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf \
 && sed -i "s/:80/:${PORT}/" /etc/apache2/sites-available/*.conf

# Install system dependencies & PHP extensions
RUN apt-get update && apt-get install -y \
      libzip-dev \
      libpng-dev \
      libicu-dev \
    && docker-php-ext-install pdo_mysql zip gd intl \
    && rm -rf /var/lib/apt/lists/*

# Copy application code
COPY . /var/www/html/

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


# Set working directory
WORKDIR /var/www/html

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Start Apache
CMD ["apache2-foreground"]
