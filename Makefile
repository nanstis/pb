# Create a MYSQL database using docker.
db_create:
	docker-compose up -d

# Run migrations and seeders.
db_fresh:
	php artisan --env dev migrate:fresh && php artisan --env dev db:seed

# Start the development server.
run:
	php artisan  dev serve

# Start the Vite development server.
dev:
	npm run dev

# Build using Vite.
build:
	npm run build



