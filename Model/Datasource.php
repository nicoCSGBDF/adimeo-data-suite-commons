<?php

namespace AdimeoDataSuite\Model;


abstract class Datasource extends PersistentObject
{
  private $id;
  private $settings;
  private $hasBatchExecution;

  final function getId()
  {
    return $this->id;
  }

  final function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getSettings()
  {
    return $this->settings;
  }

  /**
   * @param mixed $settings
   */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }

  /**
   * @return boolean
   */
  public function hasBatchExecution()
  {
    return $this->hasBatchExecution;
  }

  /**
   * @param boolean $hasBatchExecution
   */
  public function setHasBatchExecution($hasBatchExecution)
  {
    $this->hasBatchExecution = $hasBatchExecution;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return isset($this->settings['name']) ? $this->settings['name'] : '';
  }

  final function getType()
  {
    return 'datasource';
  }

  /**
   * @return array
   */
  abstract function getOutputFields();

  /**
   * @return array
   */
  abstract function getSettingFields();

  /**
   * @return array
   */
  abstract function getExecutionArguments();

  /**
   * @return string
   */
  abstract function getDisplayName();

  /**
   * @param array $args
   */
  abstract function execute($args, OutputManager $output);

  final function index($data) {

  }


}