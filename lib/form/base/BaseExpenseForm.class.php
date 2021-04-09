<?php

/**
 * Expense form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseExpenseForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'number'     => new sfWidgetFormInput(),
      'desc'       => new sfWidgetFormInput(),
      'category'   => new sfWidgetFormInput(),
      'date'       => new sfWidgetFormDate(),
      'user'       => new sfWidgetFormInput(),
      'amount'     => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Expense', 'column' => 'id', 'required' => false)),
      'number'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'desc'       => new sfValidatorString(array('max_length' => 1255, 'required' => false)),
      'category'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'user'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'amount'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('expense[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Expense';
  }


}
