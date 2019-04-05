<?php
/**
 * Copyright (c) 2019
 * Copyright Holder : CompactCode - CompactCode BvBa - Belgium
 * Copyright : Unless granted permission from CompactCode BvBa.
 * You can not distribute, reuse, edit, resell or sell this.
 */

namespace CompactCode\Intercom\Model\Frontend;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class InputLabel extends Field
{
    protected function _getElementHtml(AbstractElement $element)
    {
        $html = '<div class="cc-input-label">
                <div class="cc-input-label-label">intercom.help/</div>
                <input id="'. $element->getData('html_id') .'" name="' . $element->getData('name') . '" 
                       class="cc-input-label-input" value="'. $element->getData('value') .'" type="text">
              </div>';

        return $html;
    }
}
