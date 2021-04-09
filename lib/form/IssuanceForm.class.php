<?php

/**
 * Issuance form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class IssuanceForm extends BaseIssuanceForm
{
  public function configure()
  {
	  $this->widgetSchema['date'] = new sfWidgetFormInputDateTag();
  }
}
