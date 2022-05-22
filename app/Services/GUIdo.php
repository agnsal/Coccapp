<?php

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
