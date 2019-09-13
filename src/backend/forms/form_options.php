<?php

namespace pdima88\icms2elasticsearch\backend\forms;

use cmsForm;
use fieldString;

class form_options extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'childs' => array(
                    new fieldString('server', array(
                        'title' => 'Адрес сервера Elasticsearch',
                        'default' => '',
                    )),
                )
            ),

        );

    }

}
