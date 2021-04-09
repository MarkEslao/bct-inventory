<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Expense filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseExpenseFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'number'     => new sfWidgetFormFilterInput(),
      'desc'       => new sfWidgetFormFilterInput(),
      'category'   => new sfWidgetFormFilterInput(),
      'date'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'user'       => new sfWidgetFormFilterInput(),
      'amount'     => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'number'     => new sfValidatorPass(array('required' => false)),
      'desc'       => new sfValidatorPass(array('required' => false)),
      'category'   => new sfValidatorPass(array('required' => false)),
      'date'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'user'       => new sfValidatorPass(array('required' => false)),
      'amount'     => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('expense_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Expense';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'number'     => 'Text',
      'desc'       => 'Text',
      'category'   => 'Text',
      'date'       => 'Date',
      'user'       => 'Text',
      'amount'     => 'Text',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
