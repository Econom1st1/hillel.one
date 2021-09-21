# Str

## Install dependencies

```
# Using Homestead
composer install

# Using Docker
docker run --rm --interactive --tty --volume $PWD:/app composer install
```

## Run a single unit test

E.g. to run `testAfter` from `./test/StrTest.php` use command:

```
# Using Homestead
./vendor/bin/phpunit --do-not-cache-result --filter testAfter$

# Using Docker
docker run -it --rm -v "$PWD":/app -w /app php:8.0.10-cli ./vendor/bin/phpunit --do-not-cache-result --filter testAfter$
```