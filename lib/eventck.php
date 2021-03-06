<?php

namespace Prokl\Ckeditor;

use Bitrix\Main\Page\Asset;

/**
 * Class EventCK
 * @package Prokl\Ckeditor
 */
class EventCK
{
    /**
     * Подключение ассетов.
     *
     * @return void
     */
    public function register() : void
    {
        if (!defined('ADMIN_SECTION')) {
            return;
        }

        Asset::getInstance()->addJs('/bitrix/modules/prokl.ckeditor/src/build/ckeditor.js');
        Asset::getInstance()->addJs('/bitrix/modules/prokl.ckeditor/assets/script.js');
        Asset::getInstance()->addCss('/bitrix/modules/prokl.ckeditor/assets/style.css');
    }
}
