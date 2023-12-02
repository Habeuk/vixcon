<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Faq section of vixcon template
 *
 * @Layout(
 *   id = "vixcon_faq_section",
 *   label = @Translation(" Vixcon : Faq section "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "faq",
 *   library = "vixcon/faq",
 *   default_region = "title",
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

class VixconFaqSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'vixcon') . "/icones/sections/faq.png");
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
                        'text_html' => [
                            'label' => 'Description',
                            'value' => 'Accusantium provident suspicit dicta magni dolor deserunt nam abcaecati non veraris optio'
                        ]
                    ],
                    'first_image' => [
                        'text_html' => [
                            'label' => 'Première image',
                            'value' => 'https://demo.themefisher.com/vixcon/images/banner/banner-2.jpg'
                        ]
                    ],
                    'second_image' => [
                        'text_html' => [
                            'label' => 'Seconde image',
                            'value' => 'https://demo.themefisher.com/vixcon/images/banner/banner-2.jpg'
                        ]
                    ],
                    'call_to_action_text' => [
                        'text_html' => [
                            'label' => 'Call to action text',
                            'value' => 'want to know more ?'
                        ]
                    ],
                    'call_to_action' => [
                        'url' => [
                            'label' => 'Call to action',
                            'value' => [
                                'text' => 'Discover more',
                                'link' => '#',
                                'class' => 'question-block'
                            ]
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}