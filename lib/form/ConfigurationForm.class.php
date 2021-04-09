<?php

/**
 * Configuration form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class ConfigurationForm extends BaseConfigurationForm
{
  public function configure()
  {
	  $this->widgetSchema['file']        = new sfWidgetFormInputFile();
	  
	  $this->setValidators(array(
      'name'    => new sfValidatorString(array('required' => false)),
      'alliance'    => new sfValidatorString(array('required' => false)),
      'branch'    => new sfValidatorString(array('required' => false)),
      'location'    => new sfValidatorString(array('required' => false)),
      'content'    => new sfValidatorString(array('required' => false)),
      'footer'    => new sfValidatorString(array('required' => false)),
      'category'    => new sfValidatorString(array('required' => false)),
      'file'    => new sfValidatorFile(array('path' => sfConfig::get('sf_upload_dir').'/logo', 'required' => false)),
      'id'    => new sfValidatorString(array('required' => false)),
      'giftcert'    => new sfValidatorString(array('required' => false)),
      'scdiscount'    => new sfValidatorString(array('required' => false)),
      'itemdiscount'    => new sfValidatorString(array('required' => false)),

    )); 
  }
}
