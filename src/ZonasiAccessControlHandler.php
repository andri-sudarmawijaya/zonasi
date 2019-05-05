<?php

namespace Drupal\zonasi;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Zonasi entity.
 *
 * @see \Drupal\zonasi\Entity\Zonasi.
 */
class ZonasiAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\zonasi\Entity\ZonasiInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished zonasi entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published zonasi entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit zonasi entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete zonasi entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add zonasi entities');
  }

}
