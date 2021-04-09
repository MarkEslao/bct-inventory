<?php

/**
 * Purchaseorder form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class PurchaseorderForm extends BasePurchaseorderForm
{
  public function configure()
  {
	   $this->widgetSchema['date'] = new sfWidgetFormInputDateTag();
	   $this->widgetSchema['expdate'] = new sfWidgetFormInputDateTag();
  }
}
