<?php
/**
 * Copyright (c) 2019
 * Copyright Holder : CompactCode - CompactCode BvBa - Belgium
 * Copyright : Unless granted permission from CompactCode BvBa.
 * You can not distribute, reuse, edit, resell or sell this.
 */

namespace CompactCode\Intercom\Block;

use Magento\Framework\View\Element\Template;
use CompactCode\Intercom\Helper\Data as Helper;
use Magento\Customer\Model\Session;

class Intercom extends Template
{
    /**
     * @var Helper
     */
    private $helper;
    /**
     * @var Session
     */
    private $customerSession;

    /**
     * Intercom constructor.
     * @param Template\Context $context
     * @param Helper $helper
     * @param Session $customerSession
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Helper $helper,
        Session $customerSession,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
        $this->customerSession = $customerSession;
    }

    /**
     * @return bool
     */
    public function getModuleEnable()
    {
        return $this->helper->getModuleEnable();
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->helper->getAppId();
    }

    /**
     * @return array|bool
     */
    public function getLoggedInCustomer()
    {
        if ($this->customerSession->isLoggedIn()) {
            $customer = [
                'name' => $this->customerSession->getCustomer()->getName(),
                'email' => $this->customerSession->getCustomer()->getEmail()
            ];

            return $customer;
        }

        return false;
    }

    /**
     * @return mixed|string
     */
    public function getPosition()
    {
        $position = $this->helper->getPosition();
        if (!isset($position) || empty($position)) {
            return 'right';
        }
        return $position;
    }

    /**
     * @return mixed|string
     */
    public function getPaddingVertical()
    {
        $paddingVertical = $this->helper->getPaddingVertical();
        if (!isset($paddingVertical) || empty($paddingVertical)) {
            return '20';
        }
        return $paddingVertical;
    }

    /**
     * @return mixed|string
     */
    public function getPaddingHorizontal()
    {
        $paddingHorizontal = $this->helper->getPaddingHorizontal();
        if (!isset($paddingHorizontal) || empty($paddingHorizontal)) {
            return '20';
        }
        return $paddingHorizontal;
    }
}
