<?php

/**
 * Help form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseHelpForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'    => new sfWidgetFormInputHidden(),
      'name'  => new sfWidgetFormInput(),
      'short' => new sfWidgetFormInput(),
      'desc'  => new sfWidgetFormInput(),
      'file'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'    => new sfValidatorPropelChoice(array('model' => 'Help', 'column' => 'id', 'required' => false)),
      'name'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'short' => new sfValidatorString(array('max_length' => 30000, 'required' => false)),
      'desc'  => new sfValidatorString(array('max_length' => 30000, 'required' => false)),
      'file'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('help[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Help';
  }


}
