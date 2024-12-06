# Krayin CRM

A modern CRM system built using Laravel and modified with **docker**, **frankenPhp** and **RoadRunner**.

## Prerequisites

- Docker should be installed on your system.

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/sachin-atyantik/krayin.git
   ```

2. Navigate into the project directory:
   ```bash
   cd krayin
   ```

3. Copy the environment file:
   ```bash
   cp .env.example .env
   ```
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Make sure you have correct folder permissions to your current user. Build the Docker containers:
   ```bash
   docker-compose build or sudo docker-compose build
   ```
   (you can add --no-cache if you don't want to use any cached layers)

6. Recreate config cache to avoid db connection issue:
    ```bash
    php artisan config:cache
    ```

7. Start the application:
   ```bash
   docker-compose up
   ```
   Use `php artisan config:cache` if you are facing any database connection issue. [optional]

8. Verify the application : for **frankenPhp** use port **61**, for **RoadRunner** use port **62**:
   ```bash
   http://localhost:61/
   http://localhost:62/
   ```
9. Follow the instructions to install, make sure to add database credentials mentioned in `.env.example`
 
