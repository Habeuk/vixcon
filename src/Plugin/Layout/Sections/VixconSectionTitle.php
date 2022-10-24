<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Section title of vixcon template
 *
 * @Layout(
 *   id = "vixcon_section_title",
 *   label = @Translation(" Vixcon : Section Title "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "section_title",
 *   library = "vixcon/section_title",
 *   default_region = "intro",
 *   regions = {
 *     "intro" = {
 *       "label" = @Translation("intro"),
 *     },
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *     "image" = {
 *       "label" = @Translation("background image"),
 *     },
 *     "container" = {
 *       "label" = @Translation("container"),
 *     },
 *     "call_to_action_text" = {
 *       "label" = @Translation("call to action text"),
 *     },
 *     "call_to_action" = {
 *       "label" = @Translation("call to action "),
 *     },
 *   }
 * )
 */

class VixconSectionTitle extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'vixcon') . "/icones/sections/section-title.png");
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
                    'vixon-section-title--black' => 'title black',
                    'vixon-section-title--bg' => 'title background'
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static'
                ],
                'fields' => [
                    'intro' => [
                        'text' => [
                            'label' => 'Sujet',
                            'value' => 'speaking'
                        ]
                    ],
                    'title' => [
                        'text' => [
                            'label' => 'Titre',
                            'value' => 'who\'re speaking'
                        ]
                    ],
                    'description' => [
                        'text' => [
                            'label' => 'Description',
                            'value' => 'Accusantium provident suspicit dicta magni dolor deserunt nam abcaecati non veraris optio'
                        ]
                    ],
                    'image' => [
                        'text_html' => [
                            'label' => 'Arrière Plan',
                            'value' => 'https://demo.themefisher.com/vixcon/images/banner/banner-2.jpg'
                        ]
                    ],
                    'container' => [
                        'text_html' => [
                            'label' => 'Contenu',
                            'value' => 'I am the containt'
                        ]
                    ],
                    'call_to_action_text' => [
                        'text' => [
                            'label' => 'Call to action text',
                            'value' => 'Want to be a sponsor ?'
                        ]
                    ],
                    'call_to_action' => [
                        'url' => [
                            'label' => 'Call to action',
                            'value' => [
                                'text' => 'apply now',
                                'link' => '#',
                                'class' => 'btn-hero'
                            ]
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}