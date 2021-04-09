<?php

/**
 * Modepayments form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseModepaymentsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'name'   => new sfWidgetFormInput(),
      'type'   => new sfWidgetFormInput(),
      'status' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorPropelChoice(array('model' => 'Modepayments', 'column' => 'id', 'required' => false)),
      'name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('modepayments[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Modepayments';
  }


}
