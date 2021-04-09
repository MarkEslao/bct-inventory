<?php

/**
 * Orderitems form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseOrderitemsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'addons'        => new sfWidgetFormInput(),
      'purchaseorder' => new sfWidgetFormInput(),
      'joborder'      => new sfWidgetFormInput(),
      'items'         => new sfWidgetFormInput(),
      'sold'          => new sfWidgetFormInput(),
      'qoh'           => new sfWidgetFormInput(),
      'quantity'      => new sfWidgetFormInput(),
      'unitprice'     => new sfWidgetFormInput(),
      'price'         => new sfWidgetFormInput(),
      'date'          => new sfWidgetFormDate(),
      'user'          => new sfWidgetFormInput(),
      'ret'           => new sfWidgetFormInput(),
      'status'        => new sfWidgetFormInput(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'created_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorPropelChoice(array('model' => 'Orderitems', 'column' => 'id', 'required' => false)),
      'addons'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'purchaseorder' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'joborder'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'items'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sold'          => new sfValidatorNumber(array('required' => false)),
      'qoh'           => new sfValidatorNumber(array('required' => false)),
      'quantity'      => new sfValidatorNumber(array('required' => false)),
      'unitprice'     => new sfValidatorNumber(array('required' => false)),
      'price'         => new sfValidatorNumber(array('required' => false)),
      'date'          => new sfValidatorDate(array('required' => false)),
      'user'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ret'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orderitems[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orderitems';
  }


}
