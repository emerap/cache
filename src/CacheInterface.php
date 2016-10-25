<?php

namespace Emerap\Cache;

/**
 * Provides a interface CacheInterface.
 */
interface CacheInterface {

  /**
   * Get value from cache storage.
   *
   * @return mixed
   *   Cache value.
   */
  public function get();

  /**
   * Set value to cache storage.
   *
   * @param mixed $value
   *   Value.
   */
  public function set($value);

  /**
   * Delete data from cache storage.
   */
  public function delete();

  /**
   * Get value if exist or set value if not exist.
   *
   * @param callable $value_callback
   *   Value.
   *
   * @return mixed
   *   Cache value.
   */
  public function getIsNull(callable $value_callback);

  /**
   * Getter for cacheId property.
   *
   * @return string
   *    Property cacheId value.
   */
  public function getCacheId();

  /**
   * Setter for cacheId property.
   *
   * @param string $cache_id
   *    Value for cacheId property.
   *
   * @return $this
   */
  public function setCacheId($cache_id);

}
