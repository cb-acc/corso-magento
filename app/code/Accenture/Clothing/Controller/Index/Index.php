<?php declare(strict_types=1);

namespace Accenture\Clothing\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private PageFactory $pageFactory;

    public function __construct(
        PageFactory $pageFactory
    )
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        // Esempio di richiamo parametri;:
        // echo $firstParam = $this->request->getParam('first_param', null);
        return $this->pageFactory->create();
    }
}
