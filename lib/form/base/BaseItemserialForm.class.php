<?php

/**
 * Itemserial form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseItemserialForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'items'      => new sfWidgetFormInput(),
      'number'     => new sfWidgetFormInput(),
      'quantity'   => new sfWidgetFormInput(),
      'date'       => new sfWidgetFormDate(),
      'user'       => new sfWidgetFormInput(),
      'branch'     => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Itemserial', 'column' => 'id', 'required' => false)),
      'items'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'number'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'user'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'branch'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itemserial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Itemserial';
  }


}
