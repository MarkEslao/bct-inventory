<?php

/**
 * Customer form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseCustomerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'code'         => new sfWidgetFormInput(),
      'name'         => new sfWidgetFormInput(),
      'address'      => new sfWidgetFormInput(),
      'contactname'  => new sfWidgetFormInput(),
      'contactphone' => new sfWidgetFormInput(),
      'fax'          => new sfWidgetFormInput(),
      'email'        => new sfWidgetFormInput(),
      'type'         => new sfWidgetFormInput(),
      'credit'       => new sfWidgetFormInput(),
      'wholesale'    => new sfWidgetFormInput(),
      'charge'       => new sfWidgetFormInput(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'Customer', 'column' => 'id', 'required' => false)),
      'code'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contactname'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contactphone' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fax'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'credit'       => new sfValidatorNumber(array('required' => false)),
      'wholesale'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'charge'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('customer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customer';
  }


}
