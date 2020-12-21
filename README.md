devWing with laravel8.

`git clone https://github.com/Bazsmagister/devWing.git`

`cd [into_the_cloned_repo]`

`composer install`

//linux
`cp .env.example .env`

//windows
`copy .env.example .env`

edit .env file with database credentials

`php artisan key:generate`

`php artisan migrate:fresh --seed`

`php artisan serve`

## Used external package:

I used (intervention/image) package to make a thumbnail from a given picture. I created a 200\*200px thumbnail.
(It could create any size of thumbnail).

## Model:

I created an Article model with migration, seeder, and controller.

I filled out in Article model class the protected $fillable.

Faster but less safer : protected $guarded =[];

## Controller:

In the controller I use the index method for the main page, and the show method to the articles/{$article} page.

## Routing:

in routes/web.php
Because of we need the index page on the main page, I put the index method's content into the get::(/) route.

I used route::resource -> it gives me all the important routes we could use in a CRUD. :

php artisan route:list

## Views:

In resources/views/ I created an articles directory with 2 files within it:

index.blade.php and show.blade.php

in index method I make a foreach blade directive on $articles and show all of them.

in show.blade.php I show the given $article.

## Style:

I used tailwindCSS from a CDN.
