# Magento Auto-clean config cache

## Description

The module will automatically clean the configuration cache when the configuration is saved from admin.

## Installation

1. **Composer Installation** (if applicable):
    ```bash
    composer require --dev apedik/cacheautoclean
    ```

2. **Manual Installation**:
    - Download the module's ZIP archive from [GitHub](https://github.com/apedicdev/cache-auto-clean) or another source.
    - Extract the contents into the Magento `app/code` directory.

3. **Enable the Module**:
    ```bash
    php bin/magento module:enable Apedik_CacheAutoClean
    php bin/magento setup:upgrade
    ```

## Configuration

Enable `dev/caching/cache_autoclean`

## Usage

Simply save configuration from admin will automatically clean the configuration cache

## Features

The plugin `afterDispatch` will filter event names `admin_system_config_changed_section_*` and clean the cache

## Compatibility

Tested on Magento 2.4.6 but should be compatible with all versions

## Support

Please submit any issue here https://github.com/apedicdev/cache-auto-clean/issues

## Roadmap
- Select different cache types
- Indexing
- Tests

## Credits

Antonio Pedicini [apedik.dev](https://apedik.dev)

## Disclaimer

Please use only for development.

