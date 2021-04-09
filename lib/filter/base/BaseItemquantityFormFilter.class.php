<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Itemquantity filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseItemquantityFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'quantity'       => new sfWidgetFormFilterInput(),
      'location'       => new sfWidgetFormFilterInput(),
      'inventoryingri' => new sfWidgetFormFilterInput(),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'quantity'       => new sfValidatorPass(array('required' => false)),
      'location'       => new sfValidatorPass(array('required' => false)),
      'inventoryingri' => new sfValidatorPass(array('required' => false)),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('itemquantity_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Itemquantity';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'quantity'       => 'Text',
      'location'       => 'Text',
      'inventoryingri' => 'Text',
      'updated_at'     => 'Date',
      'created_at'     => 'Date',
    );
  }
}
