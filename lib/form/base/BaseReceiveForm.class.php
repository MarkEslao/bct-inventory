<?php

/**
 * Receive form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseReceiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'branch'         => new sfWidgetFormPropelChoice(array('model' => 'Location', 'add_empty' => true)),
      'number'         => new sfWidgetFormInput(),
      'deliveredby'    => new sfWidgetFormInput(),
      'notedby'        => new sfWidgetFormInput(),
      'date'           => new sfWidgetFormDate(),
      'status'         => new sfWidgetFormInput(),
      'remarks'        => new sfWidgetFormInput(),
      'remarksreceive' => new sfWidgetFormInput(),
      'user'           => new sfWidgetFormInput(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'created_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'Receive', 'column' => 'id', 'required' => false)),
      'branch'         => new sfValidatorPropelChoice(array('model' => 'Location', 'column' => 'id', 'required' => false)),
      'number'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'deliveredby'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'notedby'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'           => new sfValidatorDate(array('required' => false)),
      'status'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remarks'        => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'remarksreceive' => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'user'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'     => new sfValidatorDateTime(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('receive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Receive';
  }


}
