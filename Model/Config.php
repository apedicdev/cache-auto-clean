<?php
declare(strict_types=1);

namespace Apedik\CacheAutoClean\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    public function __construct(private readonly ScopeConfigInterface $scopeConfig)
    {
    }

    public function isCacheAutocleanEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag('dev/caching/cache_autoclean');
    }
}
