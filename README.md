# Krayin CRM

A modern CRM system built using Laravel and modified with docker and frankenPhp.

## Prerequisites

- Docker should be installed on your system.

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/maulik1211/krayin.git
   ```

2. Navigate into the project directory:
   ```bash
   cd krayin
   ```

3. Copy the environment file:
   ```bash
   cp .env.example .env
   ```

4.Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Build the Docker containers:
   ```bash
   docker-compose build
   ```

6. Start the application:
   ```bash
   docker-compose build
   ```
