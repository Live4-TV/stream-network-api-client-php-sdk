# Build with OpenAPI Generator

## Requirements
- Docker

## Build

```shell
docker run --rm -v "${PWD}:/local" --network=host openapitools/openapi-generator-cli generate \
-i /local/openapi.yaml \
-g php \
-o /local/php \
--package-name=StreamNetworkApi \
--git-host=github.com \
--git-repo-id=stream-network-api-client-php-sdk \
--git-user-id=Live4TV \
--artifact-version=1.0.0 \
--invoker-package=StreamNetworkApi
```

After you must run the php-cs-fixer
```shell
    docker run --rm -v "${PWD}:/app" -w /app composer:2.5 /bin/bash -c 'composer install --ignore-platform-reqs --no-scripts;
  /app/vendor/bin/php-cs-fixer fix -v --show-progress=dots --allow-risky=yes' 
```