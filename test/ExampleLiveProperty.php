<?php
namespace phpgt\dom;

class ExampleLiveProperty {
use LiveProperty;

public function __get($name) {
	if($name === "overload") {
		return "from __get overload";
	}

	return $this->__get_live($name);
}

private function prop_get_example() {
	return "from prop_example";
}

}