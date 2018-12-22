<?php
/**
 * * Created by PhpStorm.
 * User: Kalys
 * Date: 22.12.18
 * Time: 18:56
 */

class View
{
  private $path;
  private $params;

  /**
   * View constructor.
   * @param $path
   * @param $params
   */
  public function __construct($path, $params)
  {
    $this->path = $path;
    $this->params = $params;
  }

  /**
   * @return mixed
   */
  public function getPath()
  {
    return $this->path;
  }

  /**
   * @return mixed
   */
  public function getParams()
  {
    return $this->params;
  }
}