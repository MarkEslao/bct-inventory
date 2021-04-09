<?php

/**
 * Areceipt form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseAreceiptForm extends BaseFormPropel
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
      'vatable'    => new sfWidgetFormInput(),
      'vatin'      => new sfWidgetFormInput(),
      'vatex'      => new sfWidgetFormInput(),
      'senior'     => new sfWidgetFormInput(),
      'discount'   => new sfWidgetFormInput(),
      'total'      => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'type'       => new sfWidgetFormInput(),
      'comments'   => new sfWidgetFormInput(),
      'customer'   => new sfWidgetFormInput(),
      'credit'     => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Areceipt', 'column' => 'id', 'required' => false)),
      'ornumber'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'table'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cashier'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'subtotal'   => new sfValidatorNumber(array('required' => false)),
      'vatable'    => new sfValidatorNumber(array('required' => false)),
      'vatin'      => new sfValidatorNumber(array('required' => false)),
      'vatex'      => new sfValidatorNumber(array('required' => false)),
      'senior'     => new sfValidatorNumber(array('required' => false)),
      'discount'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'total'      => new sfValidatorNumber(array('required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'comments'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'credit'     => new sfValidatorNumber(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('areceipt[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Areceipt';
  }


}
