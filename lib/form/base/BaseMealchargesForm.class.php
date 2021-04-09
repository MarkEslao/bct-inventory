<?php

/**
 * Mealcharges form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseMealchargesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'meal'       => new sfWidgetFormInput(),
      'itemserial' => new sfWidgetFormInput(),
      'unit'       => new sfWidgetFormInput(),
      'cost'       => new sfWidgetFormInput(),
      'price'      => new sfWidgetFormInput(),
      'select'     => new sfWidgetFormInput(),
      'quantity'   => new sfWidgetFormInput(),
      'customer'   => new sfWidgetFormInput(),
      'terminal'   => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'vatin'      => new sfWidgetFormInput(),
      'vatex'      => new sfWidgetFormInput(),
      'date'       => new sfWidgetFormDate(),
      'comments'   => new sfWidgetFormInput(),
      'discount'   => new sfWidgetFormInput(),
      'discount1'  => new sfWidgetFormInput(),
      'receipt'    => new sfWidgetFormInput(),
      'areceipt'   => new sfWidgetFormInput(),
      'joborder'   => new sfWidgetFormInput(),
      'cashier'    => new sfWidgetFormInput(),
      'rep'        => new sfWidgetFormInput(),
      'senior'     => new sfWidgetFormInput(),
      'location'   => new sfWidgetFormInput(),
      'ret'        => new sfWidgetFormInput(),
      'orderno'    => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Mealcharges', 'column' => 'id', 'required' => false)),
      'meal'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'itemserial' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'unit'       => new sfValidatorNumber(array('required' => false)),
      'cost'       => new sfValidatorNumber(array('required' => false)),
      'price'      => new sfValidatorNumber(array('required' => false)),
      'select'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'terminal'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vatin'      => new sfValidatorNumber(array('required' => false)),
      'vatex'      => new sfValidatorNumber(array('required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'comments'   => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'discount'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'discount1'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'receipt'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'areceipt'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'joborder'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cashier'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'rep'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'senior'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'location'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ret'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'orderno'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mealcharges[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mealcharges';
  }


}
