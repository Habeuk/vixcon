<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * about section of vixcon template
 *
 * @Layout(
 *   id = "vixcon_banner_slide",
 *   label = @Translation(" Vixcon : Banner slider "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "vixcon-banner-slide",
 *   library = "vixcon/vixcon-banner-slide",
 *   default_region = "title",
 *   regions = {
 *     "nuage" = {
 *       "label" = @Translation("Nuage"),
 *     },
 *     "nuage3" = {
 *       "label" = @Translation("Nuage3"),
 *     },
 *     "image_en_mouvement" = {
 *       "label" = @Translation("Image_en_mouvement"),
 *     },
 *     "image_en_mouvement" = {
 *       "label" = @Translation("Image_en_mouvement"),
 *     },
 *     "big_titre" = {
 *       "label" = @Translation("Big titre"),
 *     },
 *     "image_card" = {
 *       "label" = @Translation("Image card"),
 *     },
 *   }
 * )
 */
class VixconBannerSlider extends FormatageModelsSection {

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'vixcon') . "/icones/sections/about.png");
  }

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
   */
  public function build(array $regions) {
    // TODO Auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    return $build;
  }

  /**
   *
   * {@inheritdoc}
   *
   */
  function defaultConfiguration() {
    return [
      'load_libray' => true,
      'infos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Layout informations',
          'loader' => 'static'
        ],
        'fields' => []
      ]
    ] + parent::defaultConfiguration();
  }
}