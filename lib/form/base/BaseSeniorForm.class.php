<?php

/**
 * Senior form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseSeniorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'senior'     => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'table'      => new sfWidgetFormInput(),
      'take'       => new sfWidgetFormInput(),
      'card'       => new sfWidgetFormInput(),
      'discount'   => new sfWidgetFormInput(),
      'receipt'    => new sfWidgetFormInput(),
      'customer'   => new sfWidgetFormInput(),
      'giftcert'   => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Senior', 'column' => 'id', 'required' => false)),
      'senior'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255)),
      'table'      => new sfValidatorString(array('max_length' => 255)),
      'take'       => new sfValidatorString(array('max_length' => 255)),
      'card'       => new sfValidatorString(array('max_length' => 255)),
      'discount'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'receipt'    => new sfValidatorString(array('max_length' => 255)),
      'customer'   => new sfValidatorString(array('max_length' => 255)),
      'giftcert'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('senior[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Senior';
  }


}
