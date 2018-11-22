# encryptable
Laravel package to encrypt / decrypt the database tables / columns

# Installation
```sh
composer require alkhachatryan/encryptable
````

```php
class User extends Model
{
    use Encryptable;

    /**
     * Fillable columns
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * Columns which should be encrypted
     */
    protected $encryptable = ['name', 'email'];
}
```

That's all you must to do :)
