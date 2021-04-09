<?php

/**
 * Giftcert form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseGiftcertForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'senior'   => new sfWidgetFormInput(),
      'giftcert' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorPropelChoice(array('model' => 'Giftcert', 'column' => 'id', 'required' => false)),
      'senior'   => new sfValidatorString(array('max_length' => 255)),
      'giftcert' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('giftcert[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Giftcert';
  }


}
