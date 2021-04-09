<?php

/**
 * Receiptrep form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseReceiptrepForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'ornumber'   => new sfWidgetFormInput(),
      'table'      => new sfWidgetFormInput(),
      'cashier'    => new sfWidgetFormInput(),
      'date'       => new sfWidgetFormInput(),
      'subtotal'   => new sfWidgetFormInput(),
      'vat'        => new sfWidgetFormInput(),
      'service'    => new sfWidgetFormInput(),
      'discount'   => new sfWidgetFormInput(),
      'total'      => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'type'       => new sfWidgetFormInput(),
      'comments'   => new sfWidgetFormInput(),
      'charge'     => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Receiptrep', 'column' => 'id', 'required' => false)),
      'ornumber'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'table'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cashier'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'subtotal'   => new sfValidatorNumber(array('required' => false)),
      'vat'        => new sfValidatorNumber(array('required' => false)),
      'service'    => new sfValidatorNumber(array('required' => false)),
      'discount'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'total'      => new sfValidatorNumber(array('required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'comments'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'charge'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('receiptrep[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Receiptrep';
  }


}
