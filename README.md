

![bg left:40% 80%](https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/2560px-Logo.min.svg.png)

# **Laravel**

PEER les Nawid & Nadyl

https://laravel.com/

---

# Inleiding

- Wat is laravel
- Doel van deze les
- De opdracht
- Vragen

---

# Wat is laravel?

- Open-source PHP framework
- Eenvoudiger en efficiënter
- Hulpmiddelen en bibliotheken
- Model View Controller (MVC) ontwerp
- Structuur
- Beginnners tot experts

---

# Doel van deze les

- Leren hoe je gegevens uit een database kunt halen (READ)
- Tonen van gegevens uit de database
- Een kijkje in de basisconcepten van Laravel
- Ervaring

---

# Voorbereiden

- Download en installeer NodeJS
- Download en installeer HeidiSQL
- Download en installeer git-bash
- Clone de git repository

Nadat de git repo gecloned is, kan je deze openen met een code editor naar keuze (PHPStorm, VSCode, etc)

Open nu de terminal van je code editor, en volg deze stappen


```properties
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
```

---

# Database instellen

- XAMPP/Laragon starten
- Inloggen met HeidiSQL
- Maak nieuwe database aan

---

# Environment variables instellen (.env)

- Volg de instructies van onze uitleg

Cache legen (Bij elke aanpassing in .env):

```properties
php artisan config:cache
```

---

# Database migrations

Ingeboud in Laravel, snel en gemakkelijk je database beheren, zonder SQL query's te schrijven.


> php artisan make:migration <span style="color: #339966;">actie</span>\_<span style="color: #FF6600;">tabelnaam</span>\_<span style="color: #9933CC;">beschrijving</span>



Voorbeeld voor een migration voor een bestaande table:

> php artisan make:migration <span style="color: #339966;">edit</span>\_<span style="color: #FF6600;">users</span>_<span style="color: #9933CC;">add_bsn_number</span>

Voorbeeld voor een migration voor een nieuwe table:

> php artisan make:migration <span style="color: #339966;">create</span>\_<span style="color: #FF6600;">admins</span>_<span style="color: #9933CC;">table</span>

Om te deleten:

> php artisan make:migration <span style="color: #339966;">delete</span>\_<span style="color: #FF6600;">admins</span>_<span style="color: #9933CC;">table</span>
---
# Migration ontwerpen
Voorbeeld:

```php
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->string('name'); // text veld
            $table->string('email')->unique(); // text veld met unique constraint
            $table->string('password'); // text veld
            $table->timestamps(); // Created at en Updated at timestamps
            $table->softDeletes(); // Optioneel, soft deletes.
        });
    }
```
Om de alle migrations te runnen:
```properties
php artisan migrate
```
<span style="color: #ED4337; font-size: 25">*Nooit bestaande migrations aanpassen!*</span>

---
# Laravel starten

Als het goed is, heb je nu minstens 1 table in je database.

Om laravel te starten, dien je een nieuwe terminal te openen en dit uit te voeren:


```properties
php artisan serve
```

Default is port 8000, je kan dit zelf instellen met de `--port=<portnumber>` flag.
Je kan nu via `http://localhost:8000` je laravel applicatie bekijken.

---

# MVC structuur uitleg

**MVC** staat voor **Model View Controller**.

### Model
- Verantwoordelijk voor gegevens en database.
- Haalt op, slaat op en bijwerkt.

### View
- Verantwoordelijk voor wat de gebruiker ziet.
- Toont gegevens aan de gebruiker.

### Controller
- Regelt de interactie tussen Model en View.
- Ontvangt gebruikersinvoer en coördineert acties.

---

# Commands MVC

### Model:
```properties
php artisan make:model naam
```

### View:
```properties
php artisan make:view naam
```

### Controller:
```properties
php artisan make:controller naam
```

---

# Instellen model

Voorbeeld
```php

protected $table = 'todo'; //Koppelt model met een table in de database
protected $primaryKey = 'id'; //Geeft aan wat de PK is

//Voor insert of update voeg je dit ook toe:

protected $fillable = [
    'todo_item', //todo_item field in todo table
    'added_by' //added_by field in todo table
];

```
---

# Instellen controller

Voorbeeld
```php
use App\Models\User;
```
