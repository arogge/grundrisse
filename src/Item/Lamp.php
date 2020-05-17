<?php
namespace Fienchen\Item;

class Lamp extends Item {
    public function __construct(Array $data) {
        $this->templateVariables['symbol'] = '#lamp-off';
        parent::__construct($data);
    }
}
