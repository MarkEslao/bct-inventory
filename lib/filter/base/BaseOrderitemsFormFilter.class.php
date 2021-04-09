<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Orderitems filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseOrderitemsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'addons'        => new sfWidgetFormFilterInput(),
      'purchaseorder' => new sfWidgetFormFilterInput(),
      'joborder'      => new sfWidgetFormFilterInput(),
      'items'         => new sfWidgetFormFilterInput(),
      'sold'          => new sfWidgetFormFilterInput(),
      'qoh'           => new sfWidgetFormFilterInput(),
      'quantity'      => new sfWidgetFormFilterInput(),
      'unitprice'     => new sfWidgetFormFilterInput(),
      'price'         => new sfWidgetFormFilterInput(),
      'date'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'user'          => new sfWidgetFormFilterInput(),
      'ret'           => new sfWidgetFormFilterInput(),
      'status'        => new sfWidgetFormFilterInput(),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'addons'        => new sfValidatorPass(array('required' => false)),
      'purchaseorder' => new sfValidatorPass(array('required' => false)),
      'joborder'      => new sfValidatorPass(array('required' => false)),
      'items'         => new sfValidatorPass(array('required' => false)),
      'sold'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'qoh'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'quantity'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unitprice'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'price'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'date'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'user'          => new sfValidatorPass(array('required' => false)),
      'ret'           => new sfValidatorPass(array('required' => false)),
      'status'        => new sfValidatorPass(array('required' => false)),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('orderitems_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orderitems';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'addons'        => 'Text',
      'purchaseorder' => 'Text',
      'joborder'      => 'Text',
      'items'         => 'Text',
      'sold'          => 'Number',
      'qoh'           => 'Number',
      'quantity'      => 'Number',
      'unitprice'     => 'Number',
      'price'         => 'Number',
      'date'          => 'Date',
      'user'          => 'Text',
      'ret'           => 'Text',
      'status'        => 'Text',
      'updated_at'    => 'Date',
      'created_at'    => 'Date',
    );
  }
}
