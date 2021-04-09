<?php

/**
 * Inventorystock form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseInventorystockForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'ingredients' => new sfWidgetFormInput(),
      'qty1'        => new sfWidgetFormInput(),
      'qty2'        => new sfWidgetFormInput(),
      'qty'         => new sfWidgetFormInput(),
      'remarks'     => new sfWidgetFormInput(),
      'user'        => new sfWidgetFormInput(),
      'type'        => new sfWidgetFormInput(),
      'branch'      => new sfWidgetFormInput(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Inventorystock', 'column' => 'id', 'required' => false)),
      'ingredients' => new sfValidatorString(array('max_length' => 255)),
      'qty1'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'qty2'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'qty'         => new sfValidatorString(array('max_length' => 255)),
      'remarks'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'branch'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('inventorystock[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inventorystock';
  }


}
