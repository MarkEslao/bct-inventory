<?php

/**
 * Issuance form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseIssuanceForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'branch'         => new sfWidgetFormInput(),
      'branch1'        => new sfWidgetFormInput(),
      'purchaseorder'  => new sfWidgetFormPropelChoice(array('model' => 'Vendor', 'add_empty' => true)),
      'number'         => new sfWidgetFormInput(),
      'deliveredby'    => new sfWidgetFormInput(),
      'notedby'        => new sfWidgetFormInput(),
      'date'           => new sfWidgetFormDate(),
      'status'         => new sfWidgetFormInput(),
      'remarks'        => new sfWidgetFormInput(),
      'remarksreceive' => new sfWidgetFormInput(),
      'remarksreturn'  => new sfWidgetFormInput(),
      'user'           => new sfWidgetFormInput(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'created_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'Issuance', 'column' => 'id', 'required' => false)),
      'branch'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'branch1'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'purchaseorder'  => new sfValidatorPropelChoice(array('model' => 'Vendor', 'column' => 'id', 'required' => false)),
      'number'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'deliveredby'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'notedby'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'           => new sfValidatorDate(array('required' => false)),
      'status'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remarks'        => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'remarksreceive' => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'remarksreturn'  => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'user'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'     => new sfValidatorDateTime(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('issuance[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Issuance';
  }


}
