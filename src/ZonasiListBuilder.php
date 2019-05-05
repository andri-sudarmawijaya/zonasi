<?php

namespace Drupal\zonasi;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Zonasi entities.
 *
 * @ingroup zonasi
 */
class ZonasiListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['jenis_sekolah'] = $this->t('Jenis sekolah');
    $header['machine_name'] = $this->t('Machine name');
    $header['name'] = $this->t('Zonasi');
    $header['score'] = $this->t('Skor');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\zonasi\Entity\Zonasi */
    $row['id'] = $entity->id();
	
    $row['jenis_sekolah'] = Link::createFromRoute(
      $entity->jenis_sekolah->entity->label(),
      'entity.jenis_sekolah.canonical',
      ['jenis_sekolah' => $entity->jenis_sekolah->target_id]
    );
    $row['machine_name'] = $entity->machine_name->value;
	$row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.zonasi.canonical',
      ['zonasi' => $entity->id()]
    );
	
    $row['score'] = $entity->score->value;
    return $row + parent::buildRow($entity);
  }

}
