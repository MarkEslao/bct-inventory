<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Discount filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseDiscountFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'discount'   => new sfWidgetFormFilterInput(),
      'status'     => new sfWidgetFormFilterInput(),
      'table'      => new sfWidgetFormFilterInput(),
      'receipt'    => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'discount'   => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorPass(array('required' => false)),
      'table'      => new sfValidatorPass(array('required' => false)),
      'receipt'    => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('discount_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Discount';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'discount'   => 'Text',
      'status'     => 'Text',
      'table'      => 'Text',
      'receipt'    => 'Text',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
