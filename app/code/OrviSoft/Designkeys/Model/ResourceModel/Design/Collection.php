<?php

namespace OrviSoft\Designkeys\Model\ResourceModel\Design;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('OrviSoft\Designkeys\Model\Design', 'OrviSoft\Designkeys\Model\ResourceModel\Design');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>