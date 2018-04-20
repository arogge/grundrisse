<?php
namespace Fienchen\Item;

abstract class Item {
	protected $id;
	protected $templateVariables = [];
	public function __construct(Array $data) {
		$this->id = $data[0];
	}
	public function getTemplate() {
		return strtolower(str_replace('\\', '_', get_class($this))). '.svg.twig';
	}
	public function getTemplateVariables() {
		return array_merge(
			$this->templateVariables,
			[
				'id' => $this->id,
				'xmlid' => $this->getXmlId()
			]
		);
	}
	private function getXmlId() {
		return strtolower(str_replace('_', '-', $this->id));
	}
}
# vim: ts=2 sw=2
