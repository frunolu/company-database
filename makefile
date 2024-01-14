up:
	docker-compose up -d --build --force-recreate --remove-orphans

down:
	docker-compose down --volumes --remove-orphans

composer-install:
	docker-compose exec php su --command="composer -n install --prefer-dist --ignore-platform-reqs" www-data

cache-clean:
	git clean -fdX project/temp/

migrate:
	docker-compose exec php su --command="php artisan migrate:fresh" www-data

composer-update:
	docker-compose exec php su --command="composer update - W --ignore-platform-reqs" www-data

vendor-publish:
	docker-compose exec php su --command="php artisan vendor:publish" www-data

start-project: up composer-install

