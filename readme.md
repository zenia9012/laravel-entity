# laravelEntity

[![Latest Version on Packagist][ico-version]][link-packagist]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require yevhenii/laravel-entity
```

## Usage

- For creating Controller, Model, Migration, Repository use command:

``` bash
$ php artisan entity Post
```

Where Post is example.

Will be created : 
PostController - controller 
Post - model
PostRepository - repository 
2019_08_12_100000_create_posts_table.php - migration

- For creating Controller, Model, Migration, Repository and Factory, Seeder use command:

``` bash
$ php artisan entity Post --all
```

Where Post is example

Will be created : 
PostController - controller 
Post - model
PostRepository - repository 
2019_08_12_100000_create_posts_table.php - migration
PostsTableSeeder - seed
PostFactory - factory

- For creating just a Repository use command:

``` bash
$ php artisan entity:repository Post
```

Where Post is example

Will be created : 
PostRepository - repository 

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Yevhenii Riabyi][link-author]

## License

license. Please see the [license file](license.md) for more information.

[link-packagist]: https://packagist.org/packages/yevhenii/laravel-entity
[link-downloads]: https://packagist.org/packages/yevhenii/laravel-entity
[link-author]: https://github.com/zenia9012
