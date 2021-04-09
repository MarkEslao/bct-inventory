<?php

/**
 * Itemquantity form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseItemquantityForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'quantity'       => new sfWidgetFormInput(),
      'location'       => new sfWidgetFormInput(),
      'inventoryingri' => new sfWidgetFormInput(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'created_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'Itemquantity', 'column' => 'id', 'required' => false)),
      'quantity'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'location'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'inventoryingri' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'     => new sfValidatorDateTime(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itemquantity[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Itemquantity';
  }


}
