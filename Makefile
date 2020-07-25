lint-php:
	@files=$$(find . -type f -name "*.php" | grep -v '/vendor/'); \
	for f in $${files}; do \
		php -l $$f; \
	done

php-cs-fixer:
	php ./bin/php-cs-fixer.phar fix -v

php-cs-fixer-dry:
	php bin/php-cs-fixer.phar fix -v --dry-run --diff --diff-format=udiff

phpunit:
	php vendor/bin/phpunit --colors=always
