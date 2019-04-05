<?php
/**
 * Copyright (c) 2019
 * Copyright Holder : CompactCode - CompactCode BvBa - Belgium
 * Copyright : Unless granted permission from CompactCode BvBa.
 * You can not distribute, reuse, edit, resell or sell this.
 */

namespace CompactCode\Intercom\Helper;

use CompactCode\Base\Helper\Data as BaseHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends BaseHelper
{
    const SECTION = 'ccintercom';
    const GENERAL = 'general';
    const POSITIONING = 'positioning';

    /**
     * @return bool
     */
    public function getModuleEnable()
    {
        $field = 'enable';
        $group = self::GENERAL;
        $path = $this->getPath(self::SECTION, $group, $field);
        return (bool)$this->getConfig($path, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        $field = 'app_id';
        $group = self::GENERAL;
        $path = $this->getPath(self::SECTION, $group, $field);
        return $this->getConfig($path, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * @return mixed
     */
    public function getAccesToken()
    {
        $field = 'access_token';
        $group = self::GENERAL;
        $path = $this->getPath(self::SECTION, $group, $field);
        return $this->getConfig($path, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * @return mixed
     */
    public function getKnowledgeBaseLink()
    {
        $field = 'knowledgebase_link';
        $group = self::GENERAL;
        $path = $this->getPath(self::SECTION, $group, $field);
        return $this->getConfig($path, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        $field = 'position';
        $group = self::POSITIONING;
        $path = $this->getPath(self::SECTION, $group, $field);
        return $this->getConfig($path, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * @return mixed
     */
    public function getPaddingVertical()
    {
        $field = 'padding_vertical';
        $group = self::POSITIONING;
        $path = $this->getPath(self::SECTION, $group, $field);
        return $this->getConfig($path, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * @return mixed
     */
    public function getPaddingHorizontal()
    {
        $field = 'padding_horizontal';
        $group = self::POSITIONING;
        $path = $this->getPath(self::SECTION, $group, $field);
        return $this->getConfig($path, ScopeInterface::SCOPE_WEBSITE);
    }
}
