# ใช้ PHP Image ที่รวม Composer
FROM php:8.2-fpm

# ติดตั้ง Extension ที่จำเป็น
RUN apt-get update && apt-get install -y \
    libzip-dev unzip libpq-dev git curl \
    && docker-php-ext-install pdo_mysql pdo_pgsql pgsql zip

# ติดตั้ง Composer (จาก composer official image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ติดตั้ง Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && apt-get install -y nodejs

# กำหนด Working Directory
WORKDIR /var/www/html

# Copy ไฟล์ทั้งหมดเข้าไปใน Container
COPY . .

# ติดตั้ง PHP Dependencies
RUN composer install --no-dev --optimize-autoloader

# ติดตั้ง Node Modules และ Build Assets
RUN npm install && npm run build

# ตั้ง Permission สำหรับ Laravel
RUN chmod -R 775 storage bootstrap/cache

# เปิดพอร์ตสำหรับ PHP Built-in Server
EXPOSE 8080

# Start Laravel Server และ Migrate Database อัตโนมัติ
CMD php artisan migrate --force && php -S 0.0.0.0:8080 -t public
