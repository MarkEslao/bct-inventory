<?php

/**
 * Joborder form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseJoborderForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'number'     => new sfWidgetFormInput(),
      'remarks'    => new sfWidgetFormInput(),
      'date'       => new sfWidgetFormDate(),
      'user'       => new sfWidgetFormInput(),
      'customer'   => new sfWidgetFormInput(),
      'total'      => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Joborder', 'column' => 'id', 'required' => false)),
      'number'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remarks'    => new sfValidatorString(array('max_length' => 1255, 'required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'user'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'total'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('joborder[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Joborder';
  }


}
