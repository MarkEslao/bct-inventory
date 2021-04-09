<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Mealcharges filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseMealchargesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'meal'       => new sfWidgetFormFilterInput(),
      'itemserial' => new sfWidgetFormFilterInput(),
      'unit'       => new sfWidgetFormFilterInput(),
      'cost'       => new sfWidgetFormFilterInput(),
      'price'      => new sfWidgetFormFilterInput(),
      'select'     => new sfWidgetFormFilterInput(),
      'quantity'   => new sfWidgetFormFilterInput(),
      'customer'   => new sfWidgetFormFilterInput(),
      'terminal'   => new sfWidgetFormFilterInput(),
      'status'     => new sfWidgetFormFilterInput(),
      'vatin'      => new sfWidgetFormFilterInput(),
      'vatex'      => new sfWidgetFormFilterInput(),
      'date'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'comments'   => new sfWidgetFormFilterInput(),
      'discount'   => new sfWidgetFormFilterInput(),
      'discount1'  => new sfWidgetFormFilterInput(),
      'receipt'    => new sfWidgetFormFilterInput(),
      'areceipt'   => new sfWidgetFormFilterInput(),
      'joborder'   => new sfWidgetFormFilterInput(),
      'cashier'    => new sfWidgetFormFilterInput(),
      'rep'        => new sfWidgetFormFilterInput(),
      'senior'     => new sfWidgetFormFilterInput(),
      'location'   => new sfWidgetFormFilterInput(),
      'ret'        => new sfWidgetFormFilterInput(),
      'orderno'    => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'meal'       => new sfValidatorPass(array('required' => false)),
      'itemserial' => new sfValidatorPass(array('required' => false)),
      'unit'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cost'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'price'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'select'     => new sfValidatorPass(array('required' => false)),
      'quantity'   => new sfValidatorPass(array('required' => false)),
      'customer'   => new sfValidatorPass(array('required' => false)),
      'terminal'   => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorPass(array('required' => false)),
      'vatin'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vatex'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'date'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'comments'   => new sfValidatorPass(array('required' => false)),
      'discount'   => new sfValidatorPass(array('required' => false)),
      'discount1'  => new sfValidatorPass(array('required' => false)),
      'receipt'    => new sfValidatorPass(array('required' => false)),
      'areceipt'   => new sfValidatorPass(array('required' => false)),
      'joborder'   => new sfValidatorPass(array('required' => false)),
      'cashier'    => new sfValidatorPass(array('required' => false)),
      'rep'        => new sfValidatorPass(array('required' => false)),
      'senior'     => new sfValidatorPass(array('required' => false)),
      'location'   => new sfValidatorPass(array('required' => false)),
      'ret'        => new sfValidatorPass(array('required' => false)),
      'orderno'    => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('mealcharges_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mealcharges';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'meal'       => 'Text',
      'itemserial' => 'Text',
      'unit'       => 'Number',
      'cost'       => 'Number',
      'price'      => 'Number',
      'select'     => 'Text',
      'quantity'   => 'Text',
      'customer'   => 'Text',
      'terminal'   => 'Text',
      'status'     => 'Text',
      'vatin'      => 'Number',
      'vatex'      => 'Number',
      'date'       => 'Date',
      'comments'   => 'Text',
      'discount'   => 'Text',
      'discount1'  => 'Text',
      'receipt'    => 'Text',
      'areceipt'   => 'Text',
      'joborder'   => 'Text',
      'cashier'    => 'Text',
      'rep'        => 'Text',
      'senior'     => 'Text',
      'location'   => 'Text',
      'ret'        => 'Text',
      'orderno'    => 'Text',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
