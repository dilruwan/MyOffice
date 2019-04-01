# LibrarySystem

This is simple library application using Laravel 5.5
This is used for test buildkite integration.

### Setup development environment

#### Project directory on local machine
/Development/LibrarySystem
If you change code path folder path in Homested.yaml and Homestead.json should be changed.

#### up the vm 
cd /Development/LibrarySystem
vagrant up
vagrant ssh

cd /home/vagrant/code

#### Generate laravel app key
php artisan key:generate

#### Run from inside vm
php artisan migrate

#### Seeding sample dataset
php artisan db:seed --class=BooksTableSeeder

#### On local machine /Development/LibrarySystem

#### Set permissions
sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache

composer install

#### Database credentials
username: homestead
password: secret

Make sure you can log into Sequel Pro with above credentials