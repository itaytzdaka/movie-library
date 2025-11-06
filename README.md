# [TODOS]

> [SHORT_PROJECT_DESCRIPTION] - A small movie library with a simple admin CRUD and a public catalog (grid + details), including **import from OMDb** (by title or IMDb ID).


## Overview

This project is a task-list web application that allows admin user to create, edit, delete, and manage movies efficiently.



## Technology Stack

| Category             | Technologies   |
| -------------------- | -------------- |
| **Containerization** | [DOCKER]       |
| **Version Control**  | [GITHAB]       |
| **Application**      | [LARAVEL]      |
| **Database**         | [MYSQL]        |




## Prerequisites

Requirements for building and running the project:


| **PHP**       | **8.2**    | Required by Laravel 12               |
| **Composer**  | **2.x**    | PHP dependency manager               |
| **Node.js**   | **20.0.0** | Required for Vite 7 + Tailwind CSS 4 |
| **npm**       | **10.0.0** | Ships with Node 20                   |



## Getting Started

Follow these instructions to set up the project locally and deploy it to your cloud environment.

### Infrastructure Setup

You can run this project with docker or by PHP and NPM commands:
My OMDB_API_KEY exist in env.example


1. **[RUN_WITH_PHP_AND_NPM_commands]**

git clone https://github.com/itaytzdaka/movie-library
cd movie-library
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
    Would you like to create it?
    │ ● Yes / ○ No                
php artisan db:seed
npm run dev
php artisan serve

http://127.0.0.1:8000


2. **[RUN_WITH_DOCKER_COMPOSE]**

git clone https://github.com/itaytzdaka/movie-library
cd movie-library
cp .env.example .env
docker compose up


### Admin Login

user: admin
password: Aa123456

### Live Demo
http://98.95.90.26:8000/ (EC2 AWS)

## Contact

[Itay_Tzdaka] - LinkedIn - [itaytzdaka1@gmail.com]

Project Link: [https://github.com/itaytzdaka/movie-library]
