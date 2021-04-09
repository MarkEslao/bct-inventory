<?php

/**
 * Mealcategory form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class MealcategoryForm extends BaseMealcategoryForm
{
  public function configure()
  {
	  $this->widgetSchema['desc'] = new sfWidgetFormTextarea(array('label' => 'Description'), array('cols' => '50', 'rows' => '4'));
  }
}
