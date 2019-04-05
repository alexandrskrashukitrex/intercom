<?php
/**
 * Copyright (c) 2019
 * Copyright Holder : CompactCode - CompactCode BvBa - Belgium
 * Copyright : Unless granted permission from CompactCode BvBa.
 * You can not distribute, reuse, edit, resell or sell this.
 */

namespace CompactCode\Intercom\Block\Customer;

use Magento\Framework\View\Element\Template;
use Intercom\IntercomClient;
use Magento\Customer\Model\Session;
use CompactCode\Intercom\Helper\Data as Helper;

class Index extends Template
{
    /**
     * @var Session
     */
    private $customerSession;

    /**
     * @var Helper
     */
    private $helper;

    /**
     * Index constructor.
     * @param Template\Context $context
     * @param Session $customerSession
     * @param Helper $helper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Session $customerSession,
        Helper $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->customerSession = $customerSession;
        $this->helper = $helper;
    }

    public function getTickets()
    {
        $conversationsArray = [];
        $client = new IntercomClient($this->helper->getAccesToken());
        $conversation = (array)$client->conversations->getConversations([
            "type" => "user",
            "email" => $this->customerSession->getCustomer()->getEmail(),
            "open" => true
        ]);

        if (key_exists('conversations', (array)$conversation)) {
            $conversations = (array)$conversation['conversations'];

            foreach ($conversations as $key => $conversation) {
                $stdarray = (array)$conversation;
                $conversationsArray[$key]['id'] = $stdarray['id'];
                $conversationsArray[$key]['created_at'] = $stdarray['created_at'];
                $conversationsArray[$key]['state'] = $stdarray['state'];
            }
        }

        return $conversationsArray;
    }

    /**
     * @return mixed
     */
    public function getKnowledgeBaseLink()
    {
        return $this->helper->getKnowledgeBaseLink();
    }
}
