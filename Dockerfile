FROM dunglas/frankenphp

# Install required PHP extensions for WordPress
RUN install-php-extensions mysqli

# Set the working directory to FrankenPHP's public directory
WORKDIR /app/public

# Download the latest WordPress source
RUN curl -L -O https://wordpress.org/latest.tar.gz

# Extract the WordPress tarball
RUN tar -xzf latest.tar.gz --strip-components=1

# Remove the tarball to clean up
RUN rm latest.tar.gz

RUN rm -rf wp-content/themes/*

# Copy custom themes
COPY ./src-configs/themes/ wp-content/themes/

# Copy custom plugins
COPY ./src-configs/plugins/ wp-content/plugins/

# Copy wp-config.php from project root
COPY ./src-configs/configs/wp-config.php .

# Copy PHP configuration
COPY ./src-configs/configs/php.ini /usr/local/etc/php/

# Set permissions for the WordPress files
RUN chown -R www-data:www-data /app/public