<?php

/**
 * Purchaseorder form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BasePurchaseorderForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'vendor'      => new sfWidgetFormPropelChoice(array('model' => 'Vendor', 'add_empty' => true)),
      'number'      => new sfWidgetFormInput(),
      'deliveredby' => new sfWidgetFormInput(),
      'notedby'     => new sfWidgetFormInput(),
      'approvedby'  => new sfWidgetFormInput(),
      'checkedby'   => new sfWidgetFormInput(),
      'date'        => new sfWidgetFormDate(),
      'status'      => new sfWidgetFormInput(),
      'remarks'     => new sfWidgetFormInput(),
      'user'        => new sfWidgetFormInput(),
      'branch'      => new sfWidgetFormInput(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Purchaseorder', 'column' => 'id', 'required' => false)),
      'vendor'      => new sfValidatorPropelChoice(array('model' => 'Vendor', 'column' => 'id', 'required' => false)),
      'number'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'deliveredby' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'notedby'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'approvedby'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'checkedby'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'        => new sfValidatorDate(array('required' => false)),
      'status'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remarks'     => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'user'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'branch'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('purchaseorder[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Purchaseorder';
  }


}
