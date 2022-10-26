<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * venue location section of vixcon template
 *
 * @Layout(
 *   id = "vixcon_venue_location_section",
 *   label = @Translation(" Vixcon : Venue location "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "venue-location",
 *   library = "vixcon/venue-location",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "date" = {
 *       "label" = @Translation("date"),
 *     },
 *     "address" = {
 *       "label" = @Translation("description"),
 *     },
 *     "link" = {
 *       "label" = @Translation("link"),
 *     },
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *   }
 * )
 */

class VixconVenueLocationSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'vixcon') . "/icones/sections/venue-location.png");
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
                    'title' => [
                        'text' => [
                            'label' => 'Titre',
                            'value' => 'venue location'
                        ]
                    ],
                    'date' => [
                        'text' => [
                            'label' => 'Date',
                            'value' => '18 - 21 December, 2019'
                        ]
                    ],
                    'address' => [
                        'text' => [
                            'label' => 'Description',
                            'value' => '85 Golden Street, Darlinghurst <br>ERP 2019, United States '
                        ]
                    ],
                    'link' => [
                        'url' => [
                            'label' => 'Link',
                            'value' => [
                                'text' => 'View Map location',
                                'link' => '#',
                                'class' => 'link-location'
                            ]
                        ]
                    ],
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img src="https://demo.themefisher.com/vixcon/images/bg/cta-bg.jpg" alt="">'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}