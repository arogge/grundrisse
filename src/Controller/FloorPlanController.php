<?php

namespace Fienchen\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fienchen\Item\Manager;

class FloorPlanController extends Controller {
	private $manager;
	public function __construct(Manager $manager) {
		$this->manager = $manager;
	}
	/**
	 * @Route("/")
	 */
	public function foo() {
		//$item = $this->manager->createItem([ 'L_E01_1' ]);
		$this->manager->loadItems();
		$items = $this->manager->getItemsSvg();
		return $this->render('floorplan.html', ['items' => $items ]);
	}
}

# vim: ts=2 sw=2
?>
