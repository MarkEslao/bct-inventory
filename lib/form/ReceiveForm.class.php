<?php

/**
 * Receive form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class ReceiveForm extends BaseReceiveForm
{
  public function configure()
  {
	  $this->widgetSchema['date'] = new sfWidgetFormInputDateTag();
  }
}
