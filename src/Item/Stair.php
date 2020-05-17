<?php
namespace Fienchen\Item;

class Stair extends Item {
    public function __construct(Array $data) {
        $this->templateVariables = [
            'width'   => (int)$data[1],
            'length' => $data[2],
            'rotate'  => $data[3],
        ];
        parent::__construct($data);
    }
}
