<?php
namespace OrviSoft\Designkeys\Model;

class Design extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('OrviSoft\Designkeys\Model\ResourceModel\Design');
    }
}
?>