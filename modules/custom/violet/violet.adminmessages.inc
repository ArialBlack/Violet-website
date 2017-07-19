<?php

function violet_admin_labels_form($form, &$form_state){
    $form['violet_tel_num'] = array(
        '#type' => 'textfield',
        '#title' => t('Tel num'),
        '#required' => TRUE,
        '#default_value' => variable_get('violet_tel_num', '+ 966549494991'),
    );

    $form['violet_tel_text'] = array(
        '#type' => 'textfield',
        '#title' => t('Tel text'),
        '#required' => TRUE,
        '#default_value' => variable_get('violet_tel_text', '+ 966 54 949 49 91'),
    );

    $form['violet_skype'] = array(
        '#type' => 'textfield',
        '#title' => t('Skype'),
        '#required' => TRUE,
        '#default_value' => variable_get('violet_skype', 'violet.marketing'),
    );

    $form['violet_copyrights'] = array(
        '#type' => 'textfield',
        '#title' => t('Skype'),
        '#required' => TRUE,
        '#default_value' => variable_get('violet_copyrights', '2016 © All Rights Reserved.'),
    );
    
    return system_settings_form($form);
}