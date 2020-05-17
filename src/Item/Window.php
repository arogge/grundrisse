<?php
namespace Fienchen\Item;

class Window extends Item {
    public function __construct(Array $data) {
        $this->templateVariables = [
            'width'   => (int)$data[1],
            'depth' => $data[2],
            'inset' => $data[3],
            'rotate'  => $data[4],
        ];
        parent::__construct($data);
    }
}
