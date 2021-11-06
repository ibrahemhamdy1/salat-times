# Salat Times App
The app  is about geting the masjids iqmaas times

## How To run this project
    1- Git clone https://github.com/ibrahemhamdy1/salat-times.git
    2- Make .env file 'cp .env.example .env'
    3- You need to create a database for this project and config the .env file to add the database
    4- Run  'npm install'
    5- run 'composer install'
    5- Setup the database and the test data run 'php artisan migrate --seed'
## Endpoints 
     -  GET |  "/masjids"  Returns a list of masjids
     -  PUT|PATCH | "/masjids/{masjid}" show the create a new masjid form
     -  POST | "/masjids"  save a new masjid
     -  GET|HEAD  | "masjids/{masjid}/edit" show the edit the masjid form
     -  PUT|PATCH | "masjids/{masjid}"  update the masjid
     -  DELETE | "masjids/{masjid}" delete the masjid
     - GET|HEAD  | "api/v1/prayer-time-by-day/{masjidId?}/{calendar?}/{month?}/{day?}/{year?"}
     
