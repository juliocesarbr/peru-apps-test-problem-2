# Peru Apps Test - Problem 2

This repo contains the solution for problem 2

# Description of the problem

Desarrollo de un servicio REST, que pueda ser consumido por un WebApp.
Este servicio REST debe permitir, mediante un comando POST, obtener la hora en
formato UTC de 2 parámetros enviados al servicio: hora y timezone (por ejemplo:
dato1=18:31:45, dato2=-3), deberán devolver la hora calculada, en un archivo json
con el siguiente formato:

```
{
    "response": {
        "time": "18:43:00",
        "timezone": "utc"
    }
}
```

# Stack required

- PHP ^7.3
- Composer ^2.1.6,

# Install dependencies

```
composer install
```

# Run project

```
php -S localhost:8000 -t public
```

# How to connect to endpoint 

```
http://localhost:8000/api/get-utc-date
```

- Request type: POST
- Params:

```
{
    time: 18:31:45,
    value: -3
}
```

