## Introduction

A trivial contact us package sends an email to an admin and save the query in DB.

## Installation

### Prerequisites

* You must have Laravel 6 installed.
* You must have Composer installed.

## Steps

### Step 1 (build)

```bash
git clone https://github.com/ahmedmamdouh886/contact-us.git
php artisan vendor:publish
php artisan migrate
``` 
### Step 2 (configuration)
- Configure the mail driver and database connection in .env file.

### Step 3
Visit: http://localhost:8000/contacts