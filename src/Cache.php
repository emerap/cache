<?php

namespace Emerap\Cache;

/**
 * Provides a class Cache.
 */
abstract class Cache implements CacheInterface {

  /**
   * Cache id.
   *
   * @var string
   */
  protected $cacheId;

  /**
   * {@inheritdoc}
   */
  public function getIsNull(callable $value_callback) {
    $cache_value = $this->get();
    if (is_null($cache_value)) {
      $value = call_user_func($value_callback);
      $this->set($value);
      return $value;
    }
    return $cache_value;
  }

  /**
   * Getter for cacheId property.
   *
   * @return string
   *    Property cacheId value.
   */
  public function getCacheId() {
    return $this->cacheId;
  }

  /**
   * Setter for cacheId property.
   *
   * @param string|array $cache_id
   *    Value for cacheId property.
   *
   * @return $this
   */
  public function setCacheId($cache_id) {
    $cache_id = (is_array($cache_id)) ? implode(':', $cache_id) : $cache_id;
    $this->cacheId = $cache_id;
    return $this;
  }

}
