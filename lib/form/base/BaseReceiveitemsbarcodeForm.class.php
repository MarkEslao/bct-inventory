<?php

/**
 * Receiveitemsbarcode form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseReceiveitemsbarcodeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'purchaseorder' => new sfWidgetFormInput(),
      'items'         => new sfWidgetFormInput(),
      'quantity'      => new sfWidgetFormInput(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'created_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorPropelChoice(array('model' => 'Receiveitemsbarcode', 'column' => 'id', 'required' => false)),
      'purchaseorder' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'items'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('receiveitemsbarcode[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Receiveitemsbarcode';
  }


}
