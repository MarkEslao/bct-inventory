<?php

/**
 * Giftcertificate form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseGiftcertificateForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'number'     => new sfWidgetFormInput(),
      'value'      => new sfWidgetFormInput(),
      'status'     => new sfWidgetFormInput(),
      'type'       => new sfWidgetFormInput(),
      'customer'   => new sfWidgetFormInput(),
      'contact'    => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Giftcertificate', 'column' => 'id', 'required' => false)),
      'number'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'value'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contact'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('giftcertificate[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Giftcertificate';
  }


}
