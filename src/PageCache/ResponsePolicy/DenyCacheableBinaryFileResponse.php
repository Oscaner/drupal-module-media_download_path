<?php

namespace Drupal\media_download_path\PageCache\ResponsePolicy;

use Drupal\Core\PageCache\ResponsePolicyInterface;
use Drupal\media_download_path\PageCache\CacheableBinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DenyCacheableBinaryFileResponse.
 *
 * @package Drupal\media_download_path\PageCache
 */
class DenyCacheableBinaryFileResponse implements ResponsePolicyInterface {

  /**
   * {@inheritdoc}
   */
  public function check(Response $response, Request $request) {
    if ($response instanceof CacheableBinaryFileResponse) {
      return static::DENY;
    }
  }

}
