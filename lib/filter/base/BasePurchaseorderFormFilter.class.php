<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Purchaseorder filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BasePurchaseorderFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'vendor'      => new sfWidgetFormPropelChoice(array('model' => 'Vendor', 'add_empty' => true)),
      'number'      => new sfWidgetFormFilterInput(),
      'deliveredby' => new sfWidgetFormFilterInput(),
      'notedby'     => new sfWidgetFormFilterInput(),
      'approvedby'  => new sfWidgetFormFilterInput(),
      'checkedby'   => new sfWidgetFormFilterInput(),
      'date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'status'      => new sfWidgetFormFilterInput(),
      'remarks'     => new sfWidgetFormFilterInput(),
      'user'        => new sfWidgetFormFilterInput(),
      'branch'      => new sfWidgetFormFilterInput(),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'vendor'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Vendor', 'column' => 'id')),
      'number'      => new sfValidatorPass(array('required' => false)),
      'deliveredby' => new sfValidatorPass(array('required' => false)),
      'notedby'     => new sfValidatorPass(array('required' => false)),
      'approvedby'  => new sfValidatorPass(array('required' => false)),
      'checkedby'   => new sfValidatorPass(array('required' => false)),
      'date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'status'      => new sfValidatorPass(array('required' => false)),
      'remarks'     => new sfValidatorPass(array('required' => false)),
      'user'        => new sfValidatorPass(array('required' => false)),
      'branch'      => new sfValidatorPass(array('required' => false)),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('purchaseorder_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Purchaseorder';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'vendor'      => 'ForeignKey',
      'number'      => 'Text',
      'deliveredby' => 'Text',
      'notedby'     => 'Text',
      'approvedby'  => 'Text',
      'checkedby'   => 'Text',
      'date'        => 'Date',
      'status'      => 'Text',
      'remarks'     => 'Text',
      'user'        => 'Text',
      'branch'      => 'Text',
      'updated_at'  => 'Date',
      'created_at'  => 'Date',
    );
  }
}
