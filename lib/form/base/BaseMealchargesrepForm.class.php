<?php

/**
 * Mealchargesrep form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseMealchargesrepForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'meal'       => new sfWidgetFormInput(),
      'price'      => new sfWidgetFormInput(),
      'select'     => new sfWidgetFormInput(),
      'quantity'   => new sfWidgetFormInput(),
      'customer'   => new sfWidgetFormInput(),
      'table'      => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'date'       => new sfWidgetFormDate(),
      'comments'   => new sfWidgetFormInput(),
      'discount'   => new sfWidgetFormInput(),
      'receipt'    => new sfWidgetFormInput(),
      'cashier'    => new sfWidgetFormInput(),
      'senior'     => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Mealchargesrep', 'column' => 'id', 'required' => false)),
      'meal'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price'      => new sfValidatorNumber(array('required' => false)),
      'select'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'table'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'comments'   => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'discount'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'receipt'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cashier'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'senior'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mealchargesrep[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mealchargesrep';
  }


}
