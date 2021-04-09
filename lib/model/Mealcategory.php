<?php

class Mealcategory extends BaseMealcategory
{
public function getActiveJobs1()
{
  $criteria = new Criteria();
  $criteria->add(MealPeer::MEALCATEGORY, $this->getId());
 
  return MealPeer::getActiveJobs1($criteria);
}
public function __toString(){


return $this->getName();	

}
}
