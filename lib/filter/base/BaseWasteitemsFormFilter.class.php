<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Wasteitems filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseWasteitemsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'waste'      => new sfWidgetFormFilterInput(),
      'items'      => new sfWidgetFormFilterInput(),
      'quantity'   => new sfWidgetFormFilterInput(),
      'unitprice'  => new sfWidgetFormFilterInput(),
      'price'      => new sfWidgetFormFilterInput(),
      'user'       => new sfWidgetFormFilterInput(),
      'prop'       => new sfWidgetFormFilterInput(),
      'delivery'   => new sfWidgetFormFilterInput(),
      'yield'      => new sfWidgetFormFilterInput(),
      'ending'     => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'waste'      => new sfValidatorPass(array('required' => false)),
      'items'      => new sfValidatorPass(array('required' => false)),
      'quantity'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unitprice'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'price'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'user'       => new sfValidatorPass(array('required' => false)),
      'prop'       => new sfValidatorPass(array('required' => false)),
      'delivery'   => new sfValidatorPass(array('required' => false)),
      'yield'      => new sfValidatorPass(array('required' => false)),
      'ending'     => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('wasteitems_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Wasteitems';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'waste'      => 'Text',
      'items'      => 'Text',
      'quantity'   => 'Number',
      'unitprice'  => 'Number',
      'price'      => 'Number',
      'user'       => 'Text',
      'prop'       => 'Text',
      'delivery'   => 'Text',
      'yield'      => 'Text',
      'ending'     => 'Text',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
