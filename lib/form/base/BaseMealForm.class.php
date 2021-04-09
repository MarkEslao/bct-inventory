<?php

/**
 * Meal form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseMealForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInput(),
      'desc'         => new sfWidgetFormInput(),
      'price'        => new sfWidgetFormInput(),
      'file'         => new sfWidgetFormInput(),
      'mealcategory' => new sfWidgetFormInput(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'Meal', 'column' => 'id', 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255)),
      'desc'         => new sfValidatorString(array('max_length' => 1000)),
      'price'        => new sfValidatorString(array('max_length' => 255)),
      'file'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mealcategory' => new sfValidatorString(array('max_length' => 255)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('meal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Meal';
  }


}
