# PROJECT CMS api

One Paragraph of project description goes here

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

* [Git](https://git-scm.com/) - The GIT

### Installing

A step by step series of examples that tell you how to get a development env running

Clone the repository to your local machine

Copy .env.example and rename to .env and configure your database information.

```
run: npm install
```
### Run database migrations
```
run: php artisan migrate
```
### Run database seeder
```
run: php artisan db:seed
```
### Run the server
```
run: php artisan serve
```
you can see like this. <http://127.0.0.1:8000>

## Visite the documentations here
```
<http://127.0.0.1:8000>/docs/index.html
```

### During development
Create your own branch but before that make sure you are in master branch and run
```
run: 
git pull origin master

git checkout -b <branch name>
```
