# Meeting Protocol Worldwide Bicycle coding challenge

### Configuration
* Build Docker images
  * `docker-compose build` - this will build all needed docker images for this project
  * Run `docker-compose up`
  * That's it! I have created a startup script that will make sure the needed `.env` file is in place, composer is installed and ran, along with migrations and seeding of the database.
* Running tests
  * Run the Docker command `docker exec -it bicycle-php-1 php artisan test`
* See the site
  * http://localhost:8000