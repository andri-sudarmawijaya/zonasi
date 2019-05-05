<?php

namespace Drupal\zonasi\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Zonasi entities.
 *
 * @ingroup zonasi
 */
interface ZonasiInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Zonasi name.
   *
   * @return string
   *   Name of the Zonasi.
   */
  public function getName();

  /**
   * Sets the Zonasi name.
   *
   * @param string $name
   *   The Zonasi name.
   *
   * @return \Drupal\zonasi\Entity\ZonasiInterface
   *   The called Zonasi entity.
   */
  public function setName($name);

  /**
   * Gets the Zonasi creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Zonasi.
   */
  public function getCreatedTime();

  /**
   * Sets the Zonasi creation timestamp.
   *
   * @param int $timestamp
   *   The Zonasi creation timestamp.
   *
   * @return \Drupal\zonasi\Entity\ZonasiInterface
   *   The called Zonasi entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Zonasi published status indicator.
   *
   * Unpublished Zonasi are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Zonasi is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Zonasi.
   *
   * @param bool $published
   *   TRUE to set this Zonasi to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\zonasi\Entity\ZonasiInterface
   *   The called Zonasi entity.
   */
  public function setPublished($published);

}
