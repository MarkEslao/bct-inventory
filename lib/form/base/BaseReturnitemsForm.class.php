<?php

/**
 * Returnitems form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseReturnitemsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'purchaseorder' => new sfWidgetFormInput(),
      'items'         => new sfWidgetFormInput(),
      'quantity'      => new sfWidgetFormInput(),
      'unitprice'     => new sfWidgetFormInput(),
      'price'         => new sfWidgetFormInput(),
      'date'          => new sfWidgetFormDate(),
      'user'          => new sfWidgetFormInput(),
      'remarks'       => new sfWidgetFormInput(),
      'branch'        => new sfWidgetFormInput(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'created_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorPropelChoice(array('model' => 'Returnitems', 'column' => 'id', 'required' => false)),
      'purchaseorder' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'items'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'      => new sfValidatorNumber(array('required' => false)),
      'unitprice'     => new sfValidatorNumber(array('required' => false)),
      'price'         => new sfValidatorNumber(array('required' => false)),
      'date'          => new sfValidatorDate(array('required' => false)),
      'user'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remarks'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'branch'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('returnitems[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Returnitems';
  }


}
