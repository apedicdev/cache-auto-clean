<?php
declare(strict_types=1);

namespace Apedik\CacheAutoClean\Plugin;

use Apedik\CacheAutoClean\Model\Config;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\Event\ManagerInterface;

class AdminSavePlugin
{
    public function __construct(private readonly TypeListInterface $cacheTypeList, private readonly Config $config)
    {
    }

    public function afterDispatch(ManagerInterface $subject, $result, $eventName): void
    {
        /** Not very efficient for production */
        if (str_contains($eventName, 'admin_system_config_changed_section_') === false) {
            return;
        }

        if ($this->config->isCacheAutocleanEnabled() === false) {
            return;
        }

        $this->cacheTypeList->cleanType('config');
    }
}
