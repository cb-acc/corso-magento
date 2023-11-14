<?php
declare(strict_types=1);

namespace Accenture\Clothing\ViewModel;

use Accenture\Clothing\Api\LineRepositoryInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * ClothingLines model
 */
class ClothingLines implements ArgumentInterface
{
    /**
     * @var LineRepositoryInterface
     */
    private LineRepositoryInterface $lineRepository;

    public function __construct(LineRepositoryInterface $lineRepository)
    {
        $this->lineRepository = $lineRepository;
    }

    /**
     * @return array
     */
    public function getLines()
    {
        return $this->lineRepository->getLines();
    }
}
