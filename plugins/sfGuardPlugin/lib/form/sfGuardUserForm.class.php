<?php

/**
 * sfGuardUser form.
 *
 * @package    form
 * @subpackage sf_guard_user
 * @version    SVN: $Id: sfGuardUserForm.class.php 13001 2008-11-14 10:45:32Z noel $
 */
class sfGuardUserForm extends sfGuardUserAdminForm
{
  protected
    $pkName = null;

  public function configure()
  {
	  
      
	  $this->widgetSchema['position'] = new sfWidgetFormChoice(array(
             'label' => 'Position',
             'choices'  => sfGuardUserPeer::$position));
             
      $this->widgetSchema['location'] = new sfWidgetFormPropelChoice(array('model' => 'Location', 'add_empty' => false));       
             
      $this->widgetSchema['kintoz'] = new sfWidgetFormChoice(array(
             'choices'  => sfGuardUserPeer::$terminal));       
             
             $this->setValidators(array(
      'name'    => new sfValidatorString(array('required' => true), array('required'   => 'The Name is Required')),
      'username'   => new sfValidatorString(array('required' => true), array('required'   => 'The Username is Required')),
      'password'    => new sfValidatorString(array('required' => true)),
      'id'    => new sfValidatorString(array('required' => false)),
      'position'    => new sfValidatorString(array('required' => false)),
      'kintoz'    => new sfValidatorString(array('required' => false)),
      'location'    => new sfValidatorString(array('required' => false)),
	  'countsheet'    => new sfValidatorString(array('required' => false)),
    ));
    $this->validatorSchema->setPostValidator( 
      new sfValidatorPropelUnique(array('model' => 'sfGuardUser', 'column' => array('username'))) 
    ); 
    
             
    parent::configure();

    unset(
      $this['last_login'],
      $this['created_at'],
      $this['salt'],
      $this['algorithm'],
      $this['is_active'],
      $this['is_super_admin'],
      $this['sf_guard_user_group_list'],
      $this['sf_guard_user_permission_list']
    );
  }
}
