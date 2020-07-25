lint-php:
	@files=$$(find . -type f -name "*.php" | grep -v '/vendor/'); \
	for f in $${files}; do \
		php -l $$f; \
	done

php-cs-fixer:
	php ./bin/php-cs-fixer.phar fix -v

phpstan:
	php vendor/bin/phpstan analyse -c phpstan.neon ./src tests/

phpunit:
	php vendor/bin/phpunit tests/ --colors=always --stop-on-failure
