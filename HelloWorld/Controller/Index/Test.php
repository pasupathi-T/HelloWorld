<?php
/**
  * @author     Pasupathi T 
  * @package    Creative_HelloWorld
  * @copyright  Copyright (c) 2019 
  * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
namespace Creative\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo "Hello World";
        exit;
    }
}