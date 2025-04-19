# ใช้ PHP Image ที่รวม Composer
FROM php:8.2-fpm

# ติดตั้ง Extension ที่จำเป็น
RUN apt-get update && apt-get install -y \
    libzip-dev unzip \
    && docker-php-ext-install pdo_mysql zip

# ติดตั้ง Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ทำงานที่ /var/www/html
WORKDIR /var/www/html

# Copy ทั้งโปรเจกต์ไป
COPY . .

# Install PHP Packages
RUN composer install --no-dev --optimize-autoloader

# Install NodeJS Packages แล้ว Build
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && apt-get install -y nodejs
RUN npm install && npm run build

# สิทธิ์สำหรับ storage
RUN chmod -R 777 storage bootstrap/cache

# เปิดพอร์ต 8080
EXPOSE 8080

# Start Laravel
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
