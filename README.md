# Simple API Example With Laravel Lumen

## Introduction
This is simple Lumen CRUD operation

## API Endpoints
Method | Route | Description
--- | --- | ---
`POST` | `/api/v1/items` | Create an item
`GET` | `/api/v1/items` | Get All item
`GET` | `/api/vi/:id` | Get a single item
`PUT` | `/api/v1/:id` | Update item
`DELETE` | `/api/v1/:id` | Delete a item

## Setup
 
```
    $ git clone https://github.com/dinushchathurya/simple-lumen-api
    $ cd simple-lumen-api
    $ composer install
```
  - Duplicate and save .env.example as .env and fill in environment variables

## Create APP_KEY 

To obtain an APP_KEY run 

Method | Route | Description
--- | --- | ---
`GET` | `/key` | Get APP_KEY

then you should palce it in your .env file

## Run Migration

```
$ php artisan migrate
```

## Run The Service
```
$ php -S localhost:8000 -t public
```

## Author
[Dinush Chathurya](https://dinushchathurya.github.io/)

## License

Copyright (c) 2020 <a href="https://dinushchathurya.github.io/">Dinush Chathurya</a> and <a href="https://codingtricks.io/">codingtricks.io</a>

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Blog

https://codingtricks.io/

## Connect with me

[<img src="https://img.icons8.com/fluent/25/000000/facebook-new.png"/>](https://m.facebook.com/dinush.chathurya)
[<img src="https://img.icons8.com/fluent/25/000000/twitter.png"/>](https://twitter.com/DinushChathurya)
[<img src="https://img.icons8.com/color/25/000000/linkedin.png"/>](https://www.linkedin.com/in/dinushchathurya)
[<img src="https://img.icons8.com/fluent/25/000000/youtube-play.png"/>](https://www.youtube.com/channel/UCEByobwqWIcn7ujLG9TTDcQ)
[<img src="https://img.icons8.com/fluent/25/000000/domain.png"/>](https://dinushchathurya.github.io)
[<img src="https://img.icons8.com/color/25/000000/npm.png"/>](https://www.npmjs.com/~dinush)
[<img src="https://img.icons8.com/ios-filled/25/000000/laravel.png"/>](https://packagist.org/users/dinushchathurya/packages/)
[<img src="https://img.icons8.com/windows/25/000000/kaggle.png"/>](https://www.kaggle.com/dinushchathurya)
[<img src="https://img.icons8.com/ios-glyphs/25/000000/fm-radio.png"/>](https://dinushchathurya.github.io/radio)
[<img src="https://img.icons8.com/bubbles/25/000000/patreon.png"/>](https://www.patreon.com/dinushchathurya)
[<img src="https://img.icons8.com/color/25/000000/rss.png"/>](https://codingtricks.io/)

<p ><h2 align="center"><img src="https://img.icons8.com/officexs/16/000000/like.png"/> Happy<i class="fa fa-heart" style="color:red;"></i> Coding <img src="https://img.icons8.com/officexs/16/000000/like.png"/></h2></p>


