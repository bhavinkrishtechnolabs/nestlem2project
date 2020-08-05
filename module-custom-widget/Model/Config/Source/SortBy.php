<?php
namespace Ktpl\CustomWidget\Model\Config\Source;

class SortBy implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
             ['value' => 'id', 'label' => __('Product ID')],
            ['value' => 'name', 'label' => __('Product Name')],
            ['value' => 'price', 'label' => __('Price')]
        ];
    }
}
