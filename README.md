# Response laravel

Library for standardization of error messages and success of api json.

---

## Requirements

-   PHP 7.0 or newer;
-   Laravel 5.5 or newer;

---

## Installation

```bash
composer require fernandozueet/response-laravel
```

---

Response status 204:

<code>status 204</code>

```php
return respond_empty();
```

---

Response success:

<code>status 200</code>

```php
return respond_success('Record changed successfully.');
```

```json
{
    "status": "success",
    "message": "Record changed successfully."
}
```

---

Response success and included data:

<code>status 200</code>

```php
return respond_success('Record changed successfully', [ 'type' => 1 ]);
```

```json
{
    "status": "success",
    "message": "Record changed successfully.",
    "data": {
        "type": 1
    }
}
```

---

Response created:

<code>status 201</code>

```php
return respond_created('Record created successfully.');
```

```json
{
    "status": "success",
    "message": "Record created successfully."
}
```

---

Response created and included data:

<code>status 201</code>

```php
return respond_created('Record created successfully.', [ 'type' => 1 ]);
```

```json
{
    "status": "success",
    "message": "Record created successfully.",
    "data": {
        "type": 1
    }
}
```

---

Response error:

<code>status 400</code>

```php
return respond_error('Error while changing registry.');
```

```json
{
    "status": "error",
    "message": "Error while changing registry."
}
```

---

Response error and included data:

<code>status 400</code>

```php
return respond_error('Error while changing registry.', [ 'type' => 1 ]);
```

```json
{
    "status": "error",
    "message": "Error while changing registry.",
    "data": {
        "type": 1
    }
}
```

---

Response error:

<code>status 401</code>

```php
return respond_unauthorized();
```

```json
{
    "status": "error",
    "message": "Unauthenticated."
}
```

---

## Contributing

Please see [CONTRIBUTING](https://github.com/FernandoZueet/response-laravel/graphs/contributors) for details.

## Security

If you discover security related issues, please email fernandozueet@hotmail.com instead of using the issue tracker.

## Credits

-   [Fernando Zueet](https://github.com/FernandoZueet)

## License

The package is licensed under the MIT license. See [License File](LICENSE.md) for more information.
