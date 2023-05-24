<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Section sponsor of vixcon template
 *
 * @Layout(
 *   id = "vixcon_sponsors_section",
 *   label = @Translation(" Vixcon : Sponsor Section "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "sponsor-section",
 *   library = "vixcon/sponsor-section",
 *   default_region = "label",
 *   regions = {
 *     "label" = {
 *       "label" = @Translation("label"),
 *     },
 *     "content" = {
 *       "label" = @Translation("content"),
 *     },
 *   }
 * )
 */

class VixconSponsorsSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'vixcon') . "/icones/sections/sponsor.png");
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
                'fields' => [
                    'label' => [
                        'text' => [
                            'label' => 'Label',
                            'value' => 'Gold sponsors'
                        ]
                    ],
                    'content' => [
                        'text_html' => [
                            'label' => 'Contenu',
                            'value' => '<div class="sponsor-item">
                            <img src="https://demo.themefisher.com/vixcon/images/clients/client-img-5.png"
                                 alt="">
                        </div>'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}