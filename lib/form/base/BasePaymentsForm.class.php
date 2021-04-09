<?php

/**
 * Payments form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BasePaymentsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'table'      => new sfWidgetFormInput(),
      'card'       => new sfWidgetFormInput(),
      'code'       => new sfWidgetFormInput(),
      'type'       => new sfWidgetFormInput(),
      'amount'     => new sfWidgetFormInput(),
      'mop'        => new sfWidgetFormInput(),
      'cashier'    => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'receipt'    => new sfWidgetFormInput(),
      'areceipt'   => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Payments', 'column' => 'id', 'required' => false)),
      'table'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'card'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'code'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'amount'     => new sfValidatorNumber(array('required' => false)),
      'mop'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cashier'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'receipt'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'areceipt'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('payments[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Payments';
  }


}
