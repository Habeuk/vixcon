<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Schedule section of vixcon template
 *
 * @Layout(
 *   id = "vixcon_schedule_section",
 *   label = @Translation(" Vixcon : Schedule section "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "schedule",
 *   library = "vixcon/schedule",
 *   default_region = "day_one",
 *   regions = {
 *     "day_one" = {
 *       "label" = @Translation("day one"),
 *     },
 *     "day_two" = {
 *       "label" = @Translation("day two"),
 *     },
 *     "day_three" = {
 *       "label" = @Translation("day three"),
 *     },
 *     "day_one_container" = {
 *       "label" = @Translation("day one container"),
 *     },
 *     "day_two_container" = {
 *       "label" = @Translation("day two container"),
 *     },
 *     "day_three_container" = {
 *       "label" = @Translation("day three container"),
 *     },
 *     "day_one_duration" = {
 *       "label" = @Translation("day one duration"),
 *     },
 *     "day_two_duration" = {
 *       "label" = @Translation("day two duration"),
 *     },
 *     "day_three_duration" = {
 *       "label" = @Translation("day three duration"),
 *     },
 *   }
 * )
 */

class VixconScheduleSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'vixcon') . "/icones/sections/schedule.png");
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
                    'day_one' => [
                        'text' => [
                            'label' => 'Jour 1',
                            'value' => 'Jour 1'
                        ]
                    ],
                    'day_two' => [
                        'text' => [
                            'label' => 'Jour 2',
                            'value' => 'Jour 2'
                        ]
                    ],
                    'day_three' => [
                        'text' => [
                            'label' => 'Jour 3',
                            'value' => 'Jour 3'
                        ]
                    ],
                    'day_one_container' => [
                        'text_html' => [
                            'label' => 'Day one program',
                            'value' => 'containt'
                        ]
                    ],
                    'day_two_container' => [
                        'text_html' => [
                            'label' => 'Day two container',
                            'value' => 'container'
                        ]
                    ],
                    'day_three_container' => [
                        'text_html' => [
                            'label' => 'Day three container',
                            'value' => 'container'
                        ]
                    ],
                    'day_one_duration' => [
                        'text' => [
                            'label' => 'Day one duration',
                            'value' => '13 Nov ,2019 [09.00am - 04.00pm]'
                        ]
                    ],
                    'day_two_duration' => [
                        'text' => [
                            'label' => 'Day two duration',
                            'value' => '13 Nov ,2019 [09.00am - 04.00pm]'
                        ]
                    ],
                    'day_three_duration' => [
                        'text' => [
                            'label' => 'Day three duration',
                            'value' => '13 Nov ,2019 [09.00am - 04.00pm]'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}