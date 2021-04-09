<?php

/**
 * Receivingitems form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseReceivingitemsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'receive'    => new sfWidgetFormInput(),
      'items'      => new sfWidgetFormInput(),
      'quantity'   => new sfWidgetFormInput(),
      'unitprice'  => new sfWidgetFormInput(),
      'price'      => new sfWidgetFormInput(),
      'user'       => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Receivingitems', 'column' => 'id', 'required' => false)),
      'receive'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'items'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'   => new sfValidatorNumber(array('required' => false)),
      'unitprice'  => new sfValidatorNumber(array('required' => false)),
      'price'      => new sfValidatorNumber(array('required' => false)),
      'user'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('receivingitems[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Receivingitems';
  }


}
