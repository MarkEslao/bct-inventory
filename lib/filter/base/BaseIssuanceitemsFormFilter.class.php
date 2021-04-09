<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Issuanceitems filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseIssuanceitemsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'issuance'   => new sfWidgetFormFilterInput(),
      'items'      => new sfWidgetFormFilterInput(),
      'quantity'   => new sfWidgetFormFilterInput(),
      'receive'    => new sfWidgetFormFilterInput(),
      'unitprice'  => new sfWidgetFormFilterInput(),
      'price'      => new sfWidgetFormFilterInput(),
      'user'       => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'issuance'   => new sfValidatorPass(array('required' => false)),
      'items'      => new sfValidatorPass(array('required' => false)),
      'quantity'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'receive'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unitprice'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'price'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'user'       => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('issuanceitems_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Issuanceitems';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'issuance'   => 'Text',
      'items'      => 'Text',
      'quantity'   => 'Number',
      'receive'    => 'Number',
      'unitprice'  => 'Number',
      'price'      => 'Number',
      'user'       => 'Text',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
