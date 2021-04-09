<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Itemlogs filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseItemlogsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ingredients' => new sfWidgetFormFilterInput(),
      'name'        => new sfWidgetFormFilterInput(),
      'begin'       => new sfWidgetFormFilterInput(),
      'adjust'      => new sfWidgetFormFilterInput(),
      'endin'       => new sfWidgetFormFilterInput(),
      'uom'         => new sfWidgetFormFilterInput(),
      'remarks'     => new sfWidgetFormFilterInput(),
      'user'        => new sfWidgetFormFilterInput(),
      'branch'      => new sfWidgetFormFilterInput(),
      'type'        => new sfWidgetFormFilterInput(),
      'date'        => new sfWidgetFormFilterInput(),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'ingredients' => new sfValidatorPass(array('required' => false)),
      'name'        => new sfValidatorPass(array('required' => false)),
      'begin'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'adjust'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'endin'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'uom'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'remarks'     => new sfValidatorPass(array('required' => false)),
      'user'        => new sfValidatorPass(array('required' => false)),
      'branch'      => new sfValidatorPass(array('required' => false)),
      'type'        => new sfValidatorPass(array('required' => false)),
      'date'        => new sfValidatorPass(array('required' => false)),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('itemlogs_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Itemlogs';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'ingredients' => 'Text',
      'name'        => 'Text',
      'begin'       => 'Number',
      'adjust'      => 'Number',
      'endin'       => 'Number',
      'uom'         => 'Number',
      'remarks'     => 'Text',
      'user'        => 'Text',
      'branch'      => 'Text',
      'type'        => 'Text',
      'date'        => 'Text',
      'updated_at'  => 'Date',
      'created_at'  => 'Date',
    );
  }
}
