<?php

/**
 * Terminal form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class TerminalForm extends BaseTerminalForm
{
  public function configure()
  {
	  $this->widgetSchema['name'] = new sfWidgetFormChoice(array(
             'choices'  => sfGuardUserPeer::$terminal)); 
  }
}
