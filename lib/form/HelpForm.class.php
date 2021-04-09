<?php

/**
 * Help form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class HelpForm extends BaseHelpForm
{
  public function configure()
  {
	  $this->widgetSchema['desc'] = new sfWidgetFormTextarea(array('label' => 'Decription'), array('cols' => '122', 'rows' => '40'));
	  $this->widgetSchema['file']        = new sfWidgetFormInputFile();
	  
	  $this->setValidators(array(
	  'id'    => new sfValidatorString(array('required' => false)),
      'name'    => new sfValidatorString(array('required' => false)),
      'short'    => new sfValidatorString(array('required' => false)),
      'desc'    => new sfValidatorString(array('required' => false)),
      'file'    => new sfValidatorFile(array('path' => sfConfig::get('sf_upload_dir').'/help', 'required' => false)),
    )); 
  }
}
