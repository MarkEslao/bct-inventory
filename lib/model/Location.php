<?php

class Location extends BaseLocation
{
	public function __toString()
  {
    return $this->getName();
  }
}
