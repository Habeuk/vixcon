<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Footer section of vixcon template
 *
 * @Layout(
 *   id = "vixcon_footer_section",
 *   label = @Translation(" Vixcon : Footer "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "vixcon-footer",
 *   library = "vixcon/footer",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *     "form" = {
 *       "label" = @Translation("form"),
 *     },
 *     "shortText" = {
 *       "label" = @Translation("short text"),
 *     },
 *     "copyright" = {
 *       "label" = @Translation("copyright"),
 *     },
 *     "socials" = {
 *       "label" = @Translation("socials"),
 *     },
 *   }
 * )
 */

class VixconFooterSection extends FormatageModelsSection {

    /**
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'vixcon') . "/icones/sections/footer.png");
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
                            'value' => 'Vixcon.'
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => '<p class="footer-description h6">
                            We are creative-led experiental Event Production agency that helps brands connect, engage and evolve
                        </p>'
                        ]
                    ],
                    'form' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<form action="#" class="suscribe-form">
                            <input type="text" name="" placeholder="Put your email address" id="" class="field">
                            <a href="#" class="suscribe-btn h6">Suscribe now</a>
                        </form>'
                        ]
                    ],
                    'shortText' => [
                        'text_html' => [
                            'label' => 'Short Text',
                            'value' => '<p class="short-text h6">We will not spam at your inbox. Don\'t panic</p>'
                        ]
                    ],
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => 'image'
                        ]
                    ],
                    'copyright' => [
                        'text' => [
                            'label' => 'Copyright',
                            'value' => 'Copyright Reserved to Habeuk 2022'
                        ]
                    ],
                    'socials' => [
                        'text_html' => [
                            'label' => 'Liens sociaux',
                            'value' => '<ul class="socials">
                            <li class="item">
                                <a href="#" class="link-social">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M8.46 18h2.93v-7.3h2.45l.37-2.84h-2.82V6.04c0-.82.23-1.38 1.41-1.38h1.51V2.11c-.26-.03-1.15-.11-2.19-.11c-2.18 0-3.66 1.33-3.66 3.76v2.1H6v2.84h2.46V18z"/></svg>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#" class="link-social">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M18.94 4.46c-.49.73-1.11 1.38-1.83 1.9c.01.15.01.31.01.47c0 4.85-3.69 10.44-10.43 10.44c-2.07 0-4-.61-5.63-1.65c.29.03.58.05.88.05c1.72 0 3.3-.59 4.55-1.57a3.671 3.671 0 0 1-3.42-2.55c.22.04.45.07.69.07c.33 0 .66-.05.96-.13a3.68 3.68 0 0 1-2.94-3.6v-.04c.5.27 1.06.44 1.66.46a3.68 3.68 0 0 1-1.63-3.06c0-.67.18-1.3.5-1.84c1.81 2.22 4.51 3.68 7.56 3.83c-.06-.27-.1-.55-.1-.84a3.67 3.67 0 0 1 3.67-3.66c1.06 0 2.01.44 2.68 1.16c.83-.17 1.62-.47 2.33-.89c-.28.85-.86 1.57-1.62 2.02a7.08 7.08 0 0 0 2.11-.57z"/></svg>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#" class="link-social">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z" clip-rule="evenodd"/></svg>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#" class="link-social">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 496 512"><path fill="currentColor" d="M496 256c0 137-111 248-248 248c-25.6 0-50.2-3.9-73.4-11.1c10.1-16.5 25.2-43.5 30.8-65c3-11.6 15.4-59 15.4-59c8.1 15.4 31.7 28.5 56.8 28.5c74.8 0 128.7-68.8 128.7-154.3c0-81.9-66.9-143.2-152.9-143.2c-107 0-163.9 71.8-163.9 150.1c0 36.4 19.4 81.7 50.3 96.1c4.7 2.2 7.2 1.2 8.3-3.3c.8-3.4 5-20.3 6.9-28.1c.6-2.5.3-4.7-1.7-7.1c-10.1-12.5-18.3-35.3-18.3-56.6c0-54.7 41.4-107.6 112-107.6c60.9 0 103.6 41.5 103.6 100.9c0 67.1-33.9 113.6-78 113.6c-24.3 0-42.6-20.1-36.7-44.8c7-29.5 20.5-61.3 20.5-82.6c0-19-10.2-34.9-31.4-34.9c-24.9 0-44.9 25.7-44.9 60.2c0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256C0 119 111 8 248 8s248 111 248 248z"/></svg>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#" class="link-social">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M14.92 18H18C18 9.32 10.82 2.25 2 2.25v3.02c7.12 0 12.92 5.71 12.92 12.73zm-5.44 0h3.08C12.56 12.27 7.82 7.6 2 7.6v3.02c2 0 3.87.77 5.29 2.16A7.292 7.292 0 0 1 9.48 18zm-5.35-.02c1.17 0 2.13-.93 2.13-2.09c0-1.15-.96-2.09-2.13-2.09c-1.18 0-2.13.94-2.13 2.09c0 1.16.95 2.09 2.13 2.09z"/></svg>
                                </a>
                            </li>
                        </ul>'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}