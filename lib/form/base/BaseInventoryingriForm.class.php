<?php

/**
 * Inventoryingri form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseInventoryingriForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInput(),
      'barcode'    => new sfWidgetFormInput(),
      'reorder'    => new sfWidgetFormInput(),
      'warehouse'  => new sfWidgetFormInput(),
      'qty'        => new sfWidgetFormInput(),
      'vatin'      => new sfWidgetFormInput(),
      'vatex'      => new sfWidgetFormInput(),
      'selprice'   => new sfWidgetFormInput(),
      'vatin1'     => new sfWidgetFormInput(),
      'vatex1'     => new sfWidgetFormInput(),
      'wolprice'   => new sfWidgetFormInput(),
      'wolqty'     => new sfWidgetFormInput(),
      'price'      => new sfWidgetFormInput(),
      'uom'        => new sfWidgetFormInput(),
      'pouom'      => new sfWidgetFormInput(),
      'con1'       => new sfWidgetFormInput(),
      'con2'       => new sfWidgetFormInput(),
      'category'   => new sfWidgetFormInput(),
      'type'       => new sfWidgetFormInput(),
      'file'       => new sfWidgetFormInput(),
      'senior'     => new sfWidgetFormInputCheckbox(),
      'nonstock'   => new sfWidgetFormInputCheckbox(),
      'active'     => new sfWidgetFormInput(),
      'addons'     => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Inventoryingri', 'column' => 'id', 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'barcode'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'reorder'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'warehouse'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'qty'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vatin'      => new sfValidatorNumber(),
      'vatex'      => new sfValidatorNumber(),
      'selprice'   => new sfValidatorNumber(),
      'vatin1'     => new sfValidatorNumber(array('required' => false)),
      'vatex1'     => new sfValidatorNumber(array('required' => false)),
      'wolprice'   => new sfValidatorNumber(array('required' => false)),
      'wolqty'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price'      => new sfValidatorNumber(),
      'uom'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pouom'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'con1'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'con2'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'file'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'senior'     => new sfValidatorBoolean(array('required' => false)),
      'nonstock'   => new sfValidatorBoolean(array('required' => false)),
      'active'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'addons'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('inventoryingri[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inventoryingri';
  }


}
