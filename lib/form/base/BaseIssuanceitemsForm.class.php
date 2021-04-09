<?php

/**
 * Issuanceitems form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseIssuanceitemsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'issuance'   => new sfWidgetFormInput(),
      'items'      => new sfWidgetFormInput(),
      'quantity'   => new sfWidgetFormInput(),
      'receive'    => new sfWidgetFormInput(),
      'unitprice'  => new sfWidgetFormInput(),
      'price'      => new sfWidgetFormInput(),
      'user'       => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Issuanceitems', 'column' => 'id', 'required' => false)),
      'issuance'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'items'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'   => new sfValidatorNumber(array('required' => false)),
      'receive'    => new sfValidatorNumber(array('required' => false)),
      'unitprice'  => new sfValidatorNumber(array('required' => false)),
      'price'      => new sfValidatorNumber(array('required' => false)),
      'user'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('issuanceitems[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Issuanceitems';
  }


}
