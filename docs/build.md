# Build with OpenAPI Generator

## Requirements
- Docker

## Build

```shell
docker run --rm -v "${PWD}:/local" --network=host openapitools/openapi-generator-cli generate \
-i https://api-stream-network.live4.tv/api-json \
-g php \
-o /local \
--additional-properties=composerPackageName=live4tv/stream-network-api-client-php-sdk \
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