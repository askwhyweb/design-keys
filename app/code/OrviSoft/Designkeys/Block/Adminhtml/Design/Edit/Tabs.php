<?php
namespace OrviSoft\Designkeys\Block\Adminhtml\Design\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('design_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Design Information'));
    }
}