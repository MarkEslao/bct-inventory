<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Ingredients filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseIngredientsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'qty'        => new sfWidgetFormFilterInput(),
      'main'       => new sfWidgetFormPropelChoice(array('model' => 'Inventoryingri', 'add_empty' => true)),
      'items'      => new sfWidgetFormPropelChoice(array('model' => 'Inventoryingri', 'add_empty' => true)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'qty'        => new sfValidatorPass(array('required' => false)),
      'main'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Inventoryingri', 'column' => 'id')),
      'items'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Inventoryingri', 'column' => 'id')),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('ingredients_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ingredients';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'qty'        => 'Text',
      'main'       => 'ForeignKey',
      'items'      => 'ForeignKey',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
