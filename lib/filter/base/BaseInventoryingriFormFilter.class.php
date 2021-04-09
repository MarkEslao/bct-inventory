<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Inventoryingri filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseInventoryingriFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(),
      'barcode'    => new sfWidgetFormFilterInput(),
      'reorder'    => new sfWidgetFormFilterInput(),
      'warehouse'  => new sfWidgetFormFilterInput(),
      'qty'        => new sfWidgetFormFilterInput(),
      'vatin'      => new sfWidgetFormFilterInput(),
      'vatex'      => new sfWidgetFormFilterInput(),
      'selprice'   => new sfWidgetFormFilterInput(),
      'vatin1'     => new sfWidgetFormFilterInput(),
      'vatex1'     => new sfWidgetFormFilterInput(),
      'wolprice'   => new sfWidgetFormFilterInput(),
      'wolqty'     => new sfWidgetFormFilterInput(),
      'price'      => new sfWidgetFormFilterInput(),
      'uom'        => new sfWidgetFormFilterInput(),
      'pouom'      => new sfWidgetFormFilterInput(),
      'con1'       => new sfWidgetFormFilterInput(),
      'con2'       => new sfWidgetFormFilterInput(),
      'category'   => new sfWidgetFormFilterInput(),
      'type'       => new sfWidgetFormFilterInput(),
      'file'       => new sfWidgetFormFilterInput(),
      'senior'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'nonstock'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active'     => new sfWidgetFormFilterInput(),
      'addons'     => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'barcode'    => new sfValidatorPass(array('required' => false)),
      'reorder'    => new sfValidatorPass(array('required' => false)),
      'warehouse'  => new sfValidatorPass(array('required' => false)),
      'qty'        => new sfValidatorPass(array('required' => false)),
      'vatin'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vatex'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'selprice'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vatin1'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vatex1'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'wolprice'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'wolqty'     => new sfValidatorPass(array('required' => false)),
      'price'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'uom'        => new sfValidatorPass(array('required' => false)),
      'pouom'      => new sfValidatorPass(array('required' => false)),
      'con1'       => new sfValidatorPass(array('required' => false)),
      'con2'       => new sfValidatorPass(array('required' => false)),
      'category'   => new sfValidatorPass(array('required' => false)),
      'type'       => new sfValidatorPass(array('required' => false)),
      'file'       => new sfValidatorPass(array('required' => false)),
      'senior'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'nonstock'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active'     => new sfValidatorPass(array('required' => false)),
      'addons'     => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('inventoryingri_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inventoryingri';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'barcode'    => 'Text',
      'reorder'    => 'Text',
      'warehouse'  => 'Text',
      'qty'        => 'Text',
      'vatin'      => 'Number',
      'vatex'      => 'Number',
      'selprice'   => 'Number',
      'vatin1'     => 'Number',
      'vatex1'     => 'Number',
      'wolprice'   => 'Number',
      'wolqty'     => 'Text',
      'price'      => 'Number',
      'uom'        => 'Text',
      'pouom'      => 'Text',
      'con1'       => 'Text',
      'con2'       => 'Text',
      'category'   => 'Text',
      'type'       => 'Text',
      'file'       => 'Text',
      'senior'     => 'Boolean',
      'nonstock'   => 'Boolean',
      'active'     => 'Text',
      'addons'     => 'Text',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
