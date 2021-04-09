<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Returnitems filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseReturnitemsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'purchaseorder' => new sfWidgetFormFilterInput(),
      'items'         => new sfWidgetFormFilterInput(),
      'quantity'      => new sfWidgetFormFilterInput(),
      'unitprice'     => new sfWidgetFormFilterInput(),
      'price'         => new sfWidgetFormFilterInput(),
      'date'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'user'          => new sfWidgetFormFilterInput(),
      'remarks'       => new sfWidgetFormFilterInput(),
      'branch'        => new sfWidgetFormFilterInput(),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'purchaseorder' => new sfValidatorPass(array('required' => false)),
      'items'         => new sfValidatorPass(array('required' => false)),
      'quantity'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unitprice'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'price'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'date'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'user'          => new sfValidatorPass(array('required' => false)),
      'remarks'       => new sfValidatorPass(array('required' => false)),
      'branch'        => new sfValidatorPass(array('required' => false)),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('returnitems_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Returnitems';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'purchaseorder' => 'Text',
      'items'         => 'Text',
      'quantity'      => 'Number',
      'unitprice'     => 'Number',
      'price'         => 'Number',
      'date'          => 'Date',
      'user'          => 'Text',
      'remarks'       => 'Text',
      'branch'        => 'Text',
      'updated_at'    => 'Date',
      'created_at'    => 'Date',
    );
  }
}
