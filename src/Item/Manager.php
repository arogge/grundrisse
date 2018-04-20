<?php
namespace Fienchen\Item;
use Symfony\Component\Templating\EngineInterface;

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
				$item = new Lamp($data);
				break;
			default:
				throw new Exception('unknown type');
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
