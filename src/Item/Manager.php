<?php
namespace Fienchen\Item;

class Manager {
	private $templating;
	private $items;

	public function __construct(\Twig_Environment $templating) {
		$this->templating = $templating;
	}

	public function loadItems() {
		foreach (file(__DIR__.'/items.txt') as $line)
			$this->createItem(explode(':', trim($line)));
	}

	public function createItem(Array $data) {
		$id = $data[0];
		$type_id = @array_shift(explode('_', $id));
		switch($type_id) {
			case 'L':
			case 'LD':
			case 'LDA':
				$item = new Lamp($data);
				break;
			case 'T':
			    $item = new Door($data);
			    break;
			case 'F':
			    $item = new Window($data);
			    break;
			case 'TREPPE':
			    $item = new Stair($data);
			    break;
			default:
				throw new \Exception('unknown type');
		}
		$this->items[$id] = $item;
		return $item;
	}

	public function getItemsSvg() {
		$data = '';
		foreach($this->items as $item) {
			$data .= $this->templating->render($item->getTemplate(), $item->getTemplateVariables());
		}
		return $data;
	}
}
