<?php

/**
 * Inventorycount form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseInventorycountForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'meal'       => new sfWidgetFormInput(),
      'quantity'   => new sfWidgetFormInput(),
      'location'   => new sfWidgetFormInput(),
      'category'   => new sfWidgetFormInput(),
      'date'       => new sfWidgetFormDate(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Inventorycount', 'column' => 'id', 'required' => false)),
      'meal'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'location'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('inventorycount[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inventorycount';
  }


}
