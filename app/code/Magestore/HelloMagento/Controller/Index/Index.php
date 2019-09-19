<?php


namespace Magestore\HelloMagento\Controller\Index;


use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action {
    /**
     * Index constructor.
     */
    public function __construct(Context $context)
    {
        return parent::__construct($context);
    }


    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        // TODO: Implement execute() method.
        echo 'Hello Magento 2! We will change the world!'; exit;
    }
}