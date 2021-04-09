<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Customer filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseCustomerFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'code'         => new sfWidgetFormFilterInput(),
      'name'         => new sfWidgetFormFilterInput(),
      'address'      => new sfWidgetFormFilterInput(),
      'contactname'  => new sfWidgetFormFilterInput(),
      'contactphone' => new sfWidgetFormFilterInput(),
      'fax'          => new sfWidgetFormFilterInput(),
      'email'        => new sfWidgetFormFilterInput(),
      'type'         => new sfWidgetFormFilterInput(),
      'credit'       => new sfWidgetFormFilterInput(),
      'wholesale'    => new sfWidgetFormFilterInput(),
      'charge'       => new sfWidgetFormFilterInput(),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'code'         => new sfValidatorPass(array('required' => false)),
      'name'         => new sfValidatorPass(array('required' => false)),
      'address'      => new sfValidatorPass(array('required' => false)),
      'contactname'  => new sfValidatorPass(array('required' => false)),
      'contactphone' => new sfValidatorPass(array('required' => false)),
      'fax'          => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'type'         => new sfValidatorPass(array('required' => false)),
      'credit'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'wholesale'    => new sfValidatorPass(array('required' => false)),
      'charge'       => new sfValidatorPass(array('required' => false)),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('customer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customer';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'code'         => 'Text',
      'name'         => 'Text',
      'address'      => 'Text',
      'contactname'  => 'Text',
      'contactphone' => 'Text',
      'fax'          => 'Text',
      'email'        => 'Text',
      'type'         => 'Text',
      'credit'       => 'Number',
      'wholesale'    => 'Text',
      'charge'       => 'Text',
      'updated_at'   => 'Date',
      'created_at'   => 'Date',
    );
  }
}
