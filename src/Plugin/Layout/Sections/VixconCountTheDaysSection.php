<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Count the days section of vixcon template
 *
 * @Layout(
 *   id = "vixcon_count_the_days_section",
 *   label = @Translation(" Vixcon : Count the days "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "count-the-days",
 *   library = "vixcon/count-the-days",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "bold_title" = {
 *       "label" = @Translation("bold title"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *     "counter" = {
 *       "label" = @Translation("counter"),
 *     },
 *   }
 * )
 */

class VixconCountTheDaysSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'vixcon') . "/icones/sections/count-the-days.png");
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
            'derivate' => [
                'value' => '',
                'options' => [
                    'vixon-counter-section--simple' => 'simple',
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static'
                ],
                'fields' => [
                    'bold_title' => [
                        'text' => [
                            'label' => 'Titre gras',
                            'value' => 'Count the day'
                        ]
                    ],
                    'title' => [
                        'text' => [
                            'label' => 'Titre',
                            'value' => 'until conference start'
                        ]
                    ],
                    'description' => [
                        'text' => [
                            'label' => 'Description',
                            'value' => 'Accusantium provident suspicit dicta magni dolor deserunt nam abcaecati non veraris optio'
                        ]
                    ],
                    'counter' => [
                        'text_html' => [
                            'label' => 'Arrière Plan',
                            'value' => 'The counter is down'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}