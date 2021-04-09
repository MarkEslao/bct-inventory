<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Vendor filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseVendorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormFilterInput(),
      'address'      => new sfWidgetFormFilterInput(),
      'contactname'  => new sfWidgetFormFilterInput(),
      'contactphone' => new sfWidgetFormFilterInput(),
      'fax'          => new sfWidgetFormFilterInput(),
      'email'        => new sfWidgetFormFilterInput(),
      'tin'          => new sfWidgetFormFilterInput(),
      'file'         => new sfWidgetFormFilterInput(),
      'remarks'      => new sfWidgetFormFilterInput(),
      'charge'       => new sfWidgetFormFilterInput(),
      'other'        => new sfWidgetFormFilterInput(),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'name'         => new sfValidatorPass(array('required' => false)),
      'address'      => new sfValidatorPass(array('required' => false)),
      'contactname'  => new sfValidatorPass(array('required' => false)),
      'contactphone' => new sfValidatorPass(array('required' => false)),
      'fax'          => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'tin'          => new sfValidatorPass(array('required' => false)),
      'file'         => new sfValidatorPass(array('required' => false)),
      'remarks'      => new sfValidatorPass(array('required' => false)),
      'charge'       => new sfValidatorPass(array('required' => false)),
      'other'        => new sfValidatorPass(array('required' => false)),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('vendor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendor';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'name'         => 'Text',
      'address'      => 'Text',
      'contactname'  => 'Text',
      'contactphone' => 'Text',
      'fax'          => 'Text',
      'email'        => 'Text',
      'tin'          => 'Text',
      'file'         => 'Text',
      'remarks'      => 'Text',
      'charge'       => 'Text',
      'other'        => 'Text',
      'updated_at'   => 'Date',
      'created_at'   => 'Date',
    );
  }
}
