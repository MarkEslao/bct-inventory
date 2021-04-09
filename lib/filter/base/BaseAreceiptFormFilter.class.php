<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Areceipt filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseAreceiptFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ornumber'   => new sfWidgetFormFilterInput(),
      'table'      => new sfWidgetFormFilterInput(),
      'cashier'    => new sfWidgetFormFilterInput(),
      'date'       => new sfWidgetFormFilterInput(),
      'subtotal'   => new sfWidgetFormFilterInput(),
      'vatable'    => new sfWidgetFormFilterInput(),
      'vatin'      => new sfWidgetFormFilterInput(),
      'vatex'      => new sfWidgetFormFilterInput(),
      'senior'     => new sfWidgetFormFilterInput(),
      'discount'   => new sfWidgetFormFilterInput(),
      'total'      => new sfWidgetFormFilterInput(),
      'status'     => new sfWidgetFormFilterInput(),
      'type'       => new sfWidgetFormFilterInput(),
      'comments'   => new sfWidgetFormFilterInput(),
      'customer'   => new sfWidgetFormFilterInput(),
      'credit'     => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'ornumber'   => new sfValidatorPass(array('required' => false)),
      'table'      => new sfValidatorPass(array('required' => false)),
      'cashier'    => new sfValidatorPass(array('required' => false)),
      'date'       => new sfValidatorPass(array('required' => false)),
      'subtotal'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vatable'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vatin'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vatex'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'senior'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'discount'   => new sfValidatorPass(array('required' => false)),
      'total'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'     => new sfValidatorPass(array('required' => false)),
      'type'       => new sfValidatorPass(array('required' => false)),
      'comments'   => new sfValidatorPass(array('required' => false)),
      'customer'   => new sfValidatorPass(array('required' => false)),
      'credit'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('areceipt_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Areceipt';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'ornumber'   => 'Text',
      'table'      => 'Text',
      'cashier'    => 'Text',
      'date'       => 'Text',
      'subtotal'   => 'Number',
      'vatable'    => 'Number',
      'vatin'      => 'Number',
      'vatex'      => 'Number',
      'senior'     => 'Number',
      'discount'   => 'Text',
      'total'      => 'Number',
      'status'     => 'Text',
      'type'       => 'Text',
      'comments'   => 'Text',
      'customer'   => 'Text',
      'credit'     => 'Number',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
