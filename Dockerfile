# Use an official PHP runtime as a parent image
FROM php:8.0.30-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Make Apache listen on port 8080 instead of 80
RUN sed -i 's/80/8080/' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Expose port 8080 to the outside world
EXPOSE 8080
