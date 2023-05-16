<?php

namespace Drupal\vixcon\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Schedule element of vixcon template
 *
 * @Layout(
 *   id = "vixcon_schedule_teaser",
 *   label = @Translation(" Vixcon : Schedule element "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/teasers",
 *   template = "schedule-element",
 *   default_region = "title",
 *   regions = {
 *     "hour" = {
 *       "label" = @Translation("hour"),
 *     },
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "room" = {
 *       "label" = @Translation("room"),
 *     },
 *     "places" = {
 *       "label" = @Translation("places"),
 *     },
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *   }
 * )
 */

class VixconScheduleTeaser extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'vixcon') . "/icones/teasers/schedule.png");
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
                    'hour' => [
                        'text' => [
                            'label' => 'Horaire',
                            'value' => '9.00am'
                        ]
                    ],
                    'title' => [
                        'text' => [
                            'label' => 'Titre',
                            'value' => 'Introduction of material Design'
                        ]
                    ],
                    'room' => [
                        'text' => [
                            'label' => 'Salle',
                            'value' => 'Salle C'
                        ]
                    ],
                    'places' => [
                        'text' => [
                            'label' => 'Places',
                            'value' => '700 places'
                        ]
                    ],
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img src="https://demo.themefisher.com/vixcon/images/about/wordpress.png" alt="" class="img-fluid"/>'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}