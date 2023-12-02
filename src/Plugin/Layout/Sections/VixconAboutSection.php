<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * about section of vixcon template
 *
 * @Layout(
 *   id = "vixcon_about_section",
 *   label = @Translation(" Vixcon : About "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "about",
 *   library = "vixcon/about",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *   }
 * )
 */

class VixconAboutSection extends FormatageModelsSection {

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
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => '<h2 class="vas-title">
                            Inovation
                            <br>
                            <span class="color-theme">Inspiration</span>
                            Connect People
                        </h2>n'
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => 'The Event Company is an event design and production company that specializes in
                            corporate and social events as well as
                            non-profit fundraisers. We consider ourselves experts when it comes to event fundraising and
                            public/media relations and
                            offer consultation services to our clients to help make their event a sensational success.'
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