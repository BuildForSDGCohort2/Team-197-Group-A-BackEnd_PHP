# Team-197-Group-A-BackEnd_PHP

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/f81290d95ddb4c1e931dd11c20e4f8a2)](https://app.codacy.com/gh/BuildForSDGCohort2/Team-197-Group-A-BackEnd_PHP?utm_source=github.com&utm_medium=referral&utm_content=BuildForSDGCohort2/Team-197-Group-A-BackEnd_PHP&utm_campaign=Badge_Grade_Dashboard)

## Installation (Backend)

first clone the repository
```bash

https://github.com/BuildForSDGCohort2/Team-197-Group-A-BackEnd_PHP.git
```

Change the directory to the clone path

```bash
cd  Team-197-Group-A-BackEnd_PHP
```
then install the packages with composer

```bash
composer install
```
Make a copy of the .env.exaple and create a database in your db server

```bash
cp .env.example .env
```
Generate app key

```bash
php artisan key:generate

```
Run the database migrations to create the tables
```bash
php artisan migrate

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
