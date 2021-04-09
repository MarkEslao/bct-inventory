<?php

/**
 * Vendor form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseVendorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInput(),
      'address'      => new sfWidgetFormInput(),
      'contactname'  => new sfWidgetFormInput(),
      'contactphone' => new sfWidgetFormInput(),
      'fax'          => new sfWidgetFormInput(),
      'email'        => new sfWidgetFormInput(),
      'tin'          => new sfWidgetFormInput(),
      'file'         => new sfWidgetFormInput(),
      'remarks'      => new sfWidgetFormInput(),
      'charge'       => new sfWidgetFormInput(),
      'other'        => new sfWidgetFormInput(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'Vendor', 'column' => 'id', 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contactname'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contactphone' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fax'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tin'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'file'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remarks'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'charge'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'other'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vendor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendor';
  }


}
