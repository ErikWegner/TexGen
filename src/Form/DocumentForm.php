<?php

/**
 * @file
 * Contains Drupal\texgen\Form\DocumentForm
 */

namespace Drupal\texgen\Form;

use Drupal\texgen\Form\TexGenBase;
use Drupal\Core\Form\FormStateInterface;

class DocumentForm extends TexGenBase {
  public function getFormId() {
    return 'texgen_doc';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['result'] = array(
      '#type' => 'texgen_document',
    );

    $form['common'] = array(
        '#type' => 'fieldset',
        '#title' => t('Common settings'),
    );

    $form['common']['duplex'] = array(
        '#type' => 'radios',
        '#title' => t('Duplex document'),
        '#options' => array('yes'=>t('Yes, duplex'),'no'=>t('No, simplex')),
        '#default_value' => 'yes',
    );

    $form['common']['makeidx'] = array(
        '#type' => 'checkbox',
        '#title' => t('Generate index'),
        '#default_value' => '1'
    );

    $form['common']['makeglossar'] = array(
        '#type' => 'checkbox',
        '#title' => t('Generate glossary'),
    );

    $form['common']['makebiblio'] = array(
        '#type' => 'checkbox',
        '#title' => t('Generate bibliography'),
    );

    $form['common']['newcommands'] = array(
        '#type' => 'checkbox',
        '#title' => t('Define standard commands'),
        '#default_value' => '1'
    );

    $form['common']['definecolors'] = array(
        '#type' => 'checkbox',
        '#title' => t('Define default colours'),
        '#default_value' => '1'
    );

    $form['common']['schriftart'] = array(
        '#type' => 'select',
        '#title' => t('Font'),
        '#options' => array(
            'libertine' => 'Libertine',
            'palatino' => 'Palatino',
            'times' => 'Times',
            'chancery' => 'Zapf Chancery',
            'bookman' => 'Bookman',
            'newcent' => 'New Century Schoolbook',
            'charter' => 'Charter',
            'lmodern' => 'Latin Modern',
            'bera' => 'Bera',
        ),
    );

    $form['common']['bottomfill'] = array(
        '#type' => 'select',
        '#title' => t('Bottom line'),
        '#options' => array(
            'defaultbottom' => t('Default setting from document class'),
            'flushbottom' => 'flushbuttom: ' . t('equal page height, elastic line spacing'),
            'raggedbottom' => 'raggedbottom: ' . t('different page heights, constant line spacing'),
        )
    );



    $form['headfoottitle'] = array(
        '#type' => 'fieldset',
        '#title' => t('Header, footer, title page'),
    );

    $form['headfoottitle']['ihead'] = array(
        '#type' => 'textfield',
        '#title' => t('Inner or left header text'),
        '#description' => t('E.g. your logo or your company name.'),
    );

    $form['headfoottitle']['chead'] = array(
        '#type' => 'textfield',
        '#title' => t('Centered header text'),
    );

    $form['headfoottitle']['ohead'] = array(
        '#type' => 'textfield',
        '#title' => t('Outer or right header text'),
        '#description' => t('E.g. \headmark to show the current section.'),
    );

    $form['headfoottitle']['ifoot'] = array(
        '#type' => 'textfield',
        '#title' => t('Inner or left footer text'),
        '#description' => t('E.g. \tiny Your name.'),
    );

    $form['headfoottitle']['cfoot'] = array(
        '#type' => 'textfield',
        '#title' => t('Centered footer text'),
    );

    $form['headfoottitle']['ofoot'] = array(
        '#type' => 'textfield',
        '#title' => t('Outer or right footer text'),
        '#description' => t('E.g. \pagemark  to show the current page number.'),
    );

    $form['headfoottitle']['titletext'] = array(
        '#type' => 'textfield',
        '#title' => t('Title page heading'),
    );

    $form['headfoottitle']['titleautor'] = array(
        '#type' => 'textfield',
        '#title' => t('Author'),
    );

    $form['headfoottitle']['textzusammenfassung'] = array(
        '#type' => 'textarea',
        '#title' => t('Abstract'),
    );



    $form['pdfdocinfo'] = array(
        '#type' => 'fieldset',
        '#title' => t('PDF document information and settings'),
    );

    $form['pdfdocinfo']['pdfhyperref'] = array(
        '#type' => 'checkbox',
        '#title' => t('Use package hyperref'),
        '#default_value' => '1'
    );

    $form['pdfdocinfo']['pdfdraft'] = array(
        '#type' => 'checkbox',
        '#title' => t('Always generate pdf settings (draft=false)'),
        '#default_value' => '1'
    );

    $form['pdfdocinfo']['pdfbookmarks'] = array(
        '#type' => 'checkbox',
        '#title' => t('Generate bookmarks'),
        '#default_value' => '1'
    );

    $form['pdfdocinfo']['pdfbookmarksnum'] = array(
        '#type' => 'checkbox',
        '#title' => t('Include section numbers in bookmarks'),
        '#default_value' => '1'
    );

    $form['pdfdocinfo']['pdfbookmarksopen'] = array(
        '#type' => 'checkbox',
        '#title' => t('Bookmarks panel opened by default'),
        '#default_value' => '1'
    );

    $form['pdfdocinfo']['pdfcolorlinks'] = array(
        '#type' => 'checkbox',
        '#title' => t('Colour pdf links'),
        '#default_value' => '1'
    );

    $form['pdfdocinfo']['pdfauthor'] = array(
        '#type' => 'textfield',
        '#title' => t('Author'),
    );

    $form['pdfdocinfo']['pdftitle'] = array(
        '#type' => 'textfield',
        '#title' => t('Title'),
    );

    $form['pdfdocinfo']['pdfsubject'] = array(
        '#type' => 'textfield',
        '#title' => t('Subject'),
    );

    $form['pdfdocinfo']['pdfkeywords'] = array(
        '#type' => 'textfield',
        '#title' => t('Keywords'),
    );

    $form['pdfdocinfo']['pdfpagemode'] = array(
        '#type' => 'select',
        '#title' => t('Page mode'),
        '#options' => array(
            '1' => t('No setting'),
            '2' => t('Thumbnails opened'),
            '3' => t('Bookmarks opened'),
            '4' => t('Fullscreen'),
        ),
        '#default_value' => '3',
    );

    $form['pdfdocinfo']['pdfstartview'] = array(
        '#type' => 'select',
        '#title' => t('Page mode'),
        '#options' => array(
            '1' => t('No setting'),
            '2' => t('Fit page'),
            '3' => t('Fit page width'),
            '4' => t('Fit page contents'),
            '5' => t('Fit page contents width'),
        ),
        '#default_value' => '2',
    );

    $form['pdfdocinfo']['pdfview'] = array(
        '#type' => 'select',
        '#title' => t('Page mode when following internal links'),
        '#options' => array(
            '1' => t('No setting'),
            '2' => t('Fit page'),
            '3' => t('Fit page width'),
            '4' => t('Fit page contents'),
            '5' => t('Fit page contents width'),
        ),
        '#default_value' => '5',
    );

    $form['submit'] = array(
        '#type' => 'submit',
        '#value' => 'Submit',
    );

    return $form;
  }

  /**
 * {@inheritdoc}
 */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message(t('Your document has been created.'));
  }
}