<?php
/**
Copyright 2022 Agnese Salutari.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and limitations under the License
 **/

namespace App\Services;

/**
 * Class GUIdo.
 */
class GUIdo
{
    private static function getErrorMsg($error, $lang='en')
    {
        $errorsMessages = [
            'required' => [
                'en' => ' required',
                'it' => ' richiesto'
            ],
            'length' => [
                'en' => ' length must be ',
                'it' => ' deve essere di lunghezza ',
            ]
        ];
        return $errorsMessages[$error][$lang];
    }

    public static function makeForm($skeleton, $lang='en'){
        $result = [
            'obj' => 'form',
            'fields' => []
        ];
        foreach ($skeleton as $field => $v){
            if(!isset($v['label'])) $v['label'] = $field;
            $result['fields'][$field]['placeholder'] = (isset($v['placeholder']) && null !== $v['placeholder'])?$v['placeholder']:'';
            $result['fields'][$field]['rules'] = [
                'required' => [
                    'value' => $v['required'],
                    'errorMsg' => $v['label'].self::getErrorMsg('required', $lang)
                ],
            ];
            if(isset($v['length']) && null !== $v['length'])
                $result['fields'][$field]['rules']['length'] = [
                    'value' => $v['length'],
                    'errorMsg' => $v['label'].self::getErrorMsg('length', $lang).$v['length']
                ];
        }
        return $result;
    }
}
