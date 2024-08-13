<?php

namespace Drupal\vixcon\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\Core\Form\FormStateInterface;

/**
 * Event section of vixcon template
 *
 * @Layout(
 *   id = "vixcon_event_section",
 *   label = @Translation(" Vixcon : Event section "),
 *   category = @Translation("vixcon"),
 *   path = "layouts/sections",
 *   template = "event",
 *   library = "vixcon/event",
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
 *     "first_image" = {
 *       "label" = @Translation("first image"),
 *     },
 *     "second_image" = {
 *       "label" = @Translation("second image"),
 *     },
 *     "call_to_action" = {
 *       "label" = @Translation("call to action "),
 *     },
 *   }
 * )
 */
class VixconEventSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'vixcon') . "/icones/sections/vixcon-event.png");
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
   * @see \Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection::buildConfigurationForm()
   */
  public function buildConfigurationForm($form, $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    $form['bloc_images'] = [
      '#type' => 'textfield',
      '#title' => 'Css bloc images',
      '#default_value' => $this->configuration['bloc_images']
    ];
    $form['bloc_texte'] = [
      '#type' => 'textfield',
      '#title' => 'Css bloc texte',
      '#default_value' => $this->configuration['bloc_texte']
    ];
    return $form;
  }
  
  /**
   *
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    // $this->configuration['layoutrestrictions'] =
    // $form_state->getValue('layoutrestrictions');
    $this->configuration['bloc_images'] = $form_state->getValue('bloc_images');
    $this->configuration['bloc_texte'] = $form_state->getValue('bloc_texte');
  }
  
  /**
   *
   * {@inheritdoc}
   *
   */
  function defaultConfiguration() {
    return [
      'load_libray' => true,
      'bloc_images' => 'col-md-5 mb-5 mb-md-0',
      'bloc_texte' => 'col-md-7 mt-5 mt-md-0',
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
          'call_to_action' => [
            'url' => [
              'label' => 'Call to action',
              'value' => [
                'text' => 'Discover more',
                'link' => '#',
                'class' => 'question-block'
              ]
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
}