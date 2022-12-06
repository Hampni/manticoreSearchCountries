1. `cd manticoreSearchCounties`


 To fill db with countries names:

2. `docker exec -it manticoresearchcountries-laravel.test-1 bash`

3. `php artisan db:seed --class=CountriesSeeder`

To create index:

4. `docker exec -it manticoresearchcountries-manticore-1 bash`

5. `inexer --all --rotate`

Start npm:

6. `docker exec -it manticoresearchcountries-laravel.test-1 bash`

7. `npm run dev`