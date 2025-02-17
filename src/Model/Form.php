<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Config\Page\Model;

use Gm;
use Gm\Backend\Config\Model\ServiceForm;

/**
 * Модель данных конфигурации службы "Информация о сайте".
 * 
 * Cлужба {@see \Gm\Page\Page}.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Config\Page\Model
 * @since 1.0
 */
class Form extends ServiceForm
{
    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        parent::init();

        $this->unifiedName = Gm::$app->page->getObjectName();
    }

    /**
     * {@inheritdoc}
     */
    public function maskedAttributes(): array
    {
        return [
            'meta'             => 'meta',
            'titlePattern'     => 'titlePattern',
            'title'            => 'title',
            'author'           => 'author',
            'description'      => 'description',
            'keywords'         => 'keywords',
            'image'            => 'image',
            'robots'           => 'robots',
            'useOpenGraph'     => 'useOpenGraph',
            'useTwitterCard'   => 'useTwitterCard',
            'useSchemaOrg'     => 'useSchemaOrg',
            'useVKSchema'      => 'useVKSchema',
            'useMetaGenerator' => 'useMetaGenerator',
            'useHeaderPowered' => 'useHeaderPowered',
            'textPowered'      => 'textPowered'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'titlePattern'     => 'Header pattern',
            'title'            => 'Title',
            'author'           => 'Author',
            'keywords'         => 'Keywords',
            'description'      => 'Description',
            'image'            => 'Image',
            'useOpenGraph'     => 'Open Graph markup',
            'useTwitterCard'   => 'Twitter Card markup',
            'useSchemaOrg'     => 'Schema.org markup',
            'useVKSchema'      => 'VK markup',
            'useMetaGenerator' => 'meta tag "GENERATOR"',
            'useHeaderPowered' => 'in the HTTP header',
            'textPowered'      => 'sign as'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function formatterRules(): array
    {
        return [
            [
                [
                    'useOpenGraph', 'useTwitterCard', 'useSchemaOrg', 'useVKSchema', 'useMetaGenerator',
                    'useHeaderPowered'
                ], 'logic' => [true, false],
            ]
        ];
    }
}
