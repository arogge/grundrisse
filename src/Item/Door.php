<?php
namespace Fienchen\Item;

class Door extends Item {
    public function __construct(Array $data) {
        $this->templateVariables = [
            'width'   => (int)$data[1],
            'bearing' => $data[2],
            'rotate'  => $data[3],
        ];
        parent::__construct($data);
    }
}
