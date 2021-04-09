<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Configuration filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseConfigurationFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormFilterInput(),
      'branch'       => new sfWidgetFormFilterInput(),
      'content'      => new sfWidgetFormFilterInput(),
      'footer'       => new sfWidgetFormFilterInput(),
      'file'         => new sfWidgetFormFilterInput(),
      'alliance'     => new sfWidgetFormFilterInput(),
      'giftcert'     => new sfWidgetFormFilterInput(),
      'scdiscount'   => new sfWidgetFormFilterInput(),
      'itemdiscount' => new sfWidgetFormFilterInput(),
      'discount'     => new sfWidgetFormFilterInput(),
      'demo'         => new sfWidgetFormFilterInput(),
      'points'       => new sfWidgetFormFilterInput(),
      'transdate'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'transon'      => new sfWidgetFormFilterInput(),
      'assistant'    => new sfWidgetFormFilterInput(),
      'weighting'    => new sfWidgetFormFilterInput(),
      'joborder'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'         => new sfValidatorPass(array('required' => false)),
      'branch'       => new sfValidatorPass(array('required' => false)),
      'content'      => new sfValidatorPass(array('required' => false)),
      'footer'       => new sfValidatorPass(array('required' => false)),
      'file'         => new sfValidatorPass(array('required' => false)),
      'alliance'     => new sfValidatorPass(array('required' => false)),
      'giftcert'     => new sfValidatorPass(array('required' => false)),
      'scdiscount'   => new sfValidatorPass(array('required' => false)),
      'itemdiscount' => new sfValidatorPass(array('required' => false)),
      'discount'     => new sfValidatorPass(array('required' => false)),
      'demo'         => new sfValidatorPass(array('required' => false)),
      'points'       => new sfValidatorPass(array('required' => false)),
      'transdate'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'transon'      => new sfValidatorPass(array('required' => false)),
      'assistant'    => new sfValidatorPass(array('required' => false)),
      'weighting'    => new sfValidatorPass(array('required' => false)),
      'joborder'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('configuration_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configuration';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'name'         => 'Text',
      'branch'       => 'Text',
      'content'      => 'Text',
      'footer'       => 'Text',
      'file'         => 'Text',
      'alliance'     => 'Text',
      'giftcert'     => 'Text',
      'scdiscount'   => 'Text',
      'itemdiscount' => 'Text',
      'discount'     => 'Text',
      'demo'         => 'Text',
      'points'       => 'Text',
      'transdate'    => 'Date',
      'transon'      => 'Text',
      'assistant'    => 'Text',
      'weighting'    => 'Text',
      'joborder'     => 'Text',
    );
  }
}
