<?php

/**
 * Cashcount form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseCashcountForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'date'        => new sfWidgetFormDate(),
      'oneth'       => new sfWidgetFormInput(),
      'fiveh'       => new sfWidgetFormInput(),
      'twoh'        => new sfWidgetFormInput(),
      'oneh'        => new sfWidgetFormInput(),
      'fifty'       => new sfWidgetFormInput(),
      'twenty'      => new sfWidgetFormInput(),
      'ten'         => new sfWidgetFormInput(),
      'five'        => new sfWidgetFormInput(),
      'one'         => new sfWidgetFormInput(),
      'fiftyc'      => new sfWidgetFormInput(),
      'twentyfivec' => new sfWidgetFormInput(),
      'tenc'        => new sfWidgetFormInput(),
      'fivec'       => new sfWidgetFormInput(),
      'amount'      => new sfWidgetFormInput(),
      'total'       => new sfWidgetFormInput(),
      'over'        => new sfWidgetFormInput(),
      'short'       => new sfWidgetFormInput(),
      'terminal'    => new sfWidgetFormInput(),
      'cashier'     => new sfWidgetFormInput(),
      'type'        => new sfWidgetFormInput(),
      'remarks'     => new sfWidgetFormInput(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Cashcount', 'column' => 'id', 'required' => false)),
      'date'        => new sfValidatorDate(),
      'oneth'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fiveh'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'twoh'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'oneh'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fifty'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'twenty'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ten'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'five'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'one'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fiftyc'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'twentyfivec' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tenc'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fivec'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'amount'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'total'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'over'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'short'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'terminal'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cashier'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remarks'     => new sfValidatorString(array('max_length' => 1255, 'required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cashcount[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cashcount';
  }


}
