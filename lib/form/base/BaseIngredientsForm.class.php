<?php

/**
 * Ingredients form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseIngredientsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'qty'        => new sfWidgetFormInput(),
      'main'       => new sfWidgetFormPropelChoice(array('model' => 'Inventoryingri', 'add_empty' => true)),
      'items'      => new sfWidgetFormPropelChoice(array('model' => 'Inventoryingri', 'add_empty' => true)),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Ingredients', 'column' => 'id', 'required' => false)),
      'qty'        => new sfValidatorString(array('max_length' => 255)),
      'main'       => new sfValidatorPropelChoice(array('model' => 'Inventoryingri', 'column' => 'id', 'required' => false)),
      'items'      => new sfValidatorPropelChoice(array('model' => 'Inventoryingri', 'column' => 'id', 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ingredients[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ingredients';
  }


}
