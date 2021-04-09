<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Inventorystock filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseInventorystockFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ingredients' => new sfWidgetFormFilterInput(),
      'qty1'        => new sfWidgetFormFilterInput(),
      'qty2'        => new sfWidgetFormFilterInput(),
      'qty'         => new sfWidgetFormFilterInput(),
      'remarks'     => new sfWidgetFormFilterInput(),
      'user'        => new sfWidgetFormFilterInput(),
      'type'        => new sfWidgetFormFilterInput(),
      'branch'      => new sfWidgetFormFilterInput(),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'ingredients' => new sfValidatorPass(array('required' => false)),
      'qty1'        => new sfValidatorPass(array('required' => false)),
      'qty2'        => new sfValidatorPass(array('required' => false)),
      'qty'         => new sfValidatorPass(array('required' => false)),
      'remarks'     => new sfValidatorPass(array('required' => false)),
      'user'        => new sfValidatorPass(array('required' => false)),
      'type'        => new sfValidatorPass(array('required' => false)),
      'branch'      => new sfValidatorPass(array('required' => false)),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('inventorystock_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inventorystock';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'ingredients' => 'Text',
      'qty1'        => 'Text',
      'qty2'        => 'Text',
      'qty'         => 'Text',
      'remarks'     => 'Text',
      'user'        => 'Text',
      'type'        => 'Text',
      'branch'      => 'Text',
      'updated_at'  => 'Date',
      'created_at'  => 'Date',
    );
  }
}
