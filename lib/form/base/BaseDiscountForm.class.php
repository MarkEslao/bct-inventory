<?php

/**
 * Discount form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseDiscountForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'discount'   => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'table'      => new sfWidgetFormInput(),
      'receipt'    => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Discount', 'column' => 'id', 'required' => false)),
      'discount'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'table'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'receipt'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('discount[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Discount';
  }


}
