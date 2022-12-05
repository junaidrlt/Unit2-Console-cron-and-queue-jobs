<?php
declare(strict_types=1);

namespace RLTSquare\Ccq\Model;

use RLTSquare\Ccq\Api\Data\QueueInterface;

class Queue implements QueueInterface
{
    /**
     * @var array
     */
    protected array $data=[];

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }
}
