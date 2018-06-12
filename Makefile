APP_NAME ?= spacebar
DOCKER_NETWORK ?= spacebar

up:
	docker-compose up -d

down:
	docker-compose down

clear:
	docker-compose down -v


init:
	docker-compose run --rm spacebar composer install --no-interaction
