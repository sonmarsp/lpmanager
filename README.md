# lpmanager

# Cloning a project from Git Hub

# Cloning a project from Git Hub

# Go to the project directory and collect images
sudo docker-compose build

# Launch containers
sudo docker-compose up -d

# Run the PHP composer console command in the container to collect PHP dependencies for Laravel
sudo docker exec php-fpm-lar1 composer about
sudo docker exec php-fpm-lar1 composer install

