<?php

namespace Drupal\vixcon\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Faq element of vixcon template
 *
 * @Layout(
 *   id = "vixcon_faq_element_teaser",
 *   label = @Translation(" Vixcon : Faq element "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/teasers",
 *   template = "faq-element",
 *   default_region = "question",
 *   regions = {
 *     "question" = {
 *       "label" = @Translation("question"),
 *     },
 *     "answer" = {
 *       "label" = @Translation("answer"),
 *     },
 *   }
 * )
 */

class VixconFaqElementTeaser extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'vixcon') . "/icones/teasers/faq-element.png");
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
                    'question' => [
                        'text' => [
                            'label' => 'question',
                            'value' => '1. How to buy a Tickets'
                        ]
                    ],
                    'answer' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore beatae eius incidunt repudiandae deserunt illum quaerat ipsum rem odio, commodi.'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}