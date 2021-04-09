<?php

/**
 * Discountlist form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseDiscountlistForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'name'   => new sfWidgetFormInput(),
      'amount' => new sfWidgetFormInput(),
      'status' => new sfWidgetFormInput(),
      'type'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorPropelChoice(array('model' => 'Discountlist', 'column' => 'id', 'required' => false)),
      'name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'amount' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('discountlist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Discountlist';
  }


}
