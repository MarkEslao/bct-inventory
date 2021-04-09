<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Payments filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BasePaymentsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'table'      => new sfWidgetFormFilterInput(),
      'card'       => new sfWidgetFormFilterInput(),
      'code'       => new sfWidgetFormFilterInput(),
      'type'       => new sfWidgetFormFilterInput(),
      'amount'     => new sfWidgetFormFilterInput(),
      'mop'        => new sfWidgetFormFilterInput(),
      'cashier'    => new sfWidgetFormFilterInput(),
      'status'     => new sfWidgetFormFilterInput(),
      'receipt'    => new sfWidgetFormFilterInput(),
      'areceipt'   => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'table'      => new sfValidatorPass(array('required' => false)),
      'card'       => new sfValidatorPass(array('required' => false)),
      'code'       => new sfValidatorPass(array('required' => false)),
      'type'       => new sfValidatorPass(array('required' => false)),
      'amount'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mop'        => new sfValidatorPass(array('required' => false)),
      'cashier'    => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorPass(array('required' => false)),
      'receipt'    => new sfValidatorPass(array('required' => false)),
      'areceipt'   => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('payments_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Payments';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'table'      => 'Text',
      'card'       => 'Text',
      'code'       => 'Text',
      'type'       => 'Text',
      'amount'     => 'Number',
      'mop'        => 'Text',
      'cashier'    => 'Text',
      'status'     => 'Text',
      'receipt'    => 'Text',
      'areceipt'   => 'Text',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
