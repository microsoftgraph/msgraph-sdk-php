<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidCustomConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* AndroidCustomConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidCustomConfiguration extends DeviceConfiguration
{

     /**
     * Gets the omaSettings
    * OMA settings. This collection can contain a maximum of 1000 elements.
     *
     * @return OmaSetting[]|null The omaSettings
     */
    public function getOmaSettings()
    {
        if (array_key_exists('omaSettings', $this->_propDict) && !is_null($this->_propDict['omaSettings'])) {
            $omaSettings = [];
            if (count($this->_propDict['omaSettings']) > 0 && is_a($this->_propDict['omaSettings'][0], 'OmaSetting')) {
                return $this->_propDict['omaSettings'];
            }
            foreach ($this->_propDict['omaSettings'] as $singleValue) {
                $omaSettings []= new OmaSetting($singleValue);
            }
            $this->_propDict['omaSettings'] = $omaSettings;
            return $this->_propDict['omaSettings'];
        }
        return null;
    }

    /**
    * Sets the omaSettings
    * OMA settings. This collection can contain a maximum of 1000 elements.
    *
    * @param OmaSetting[] $val The omaSettings
    *
    * @return AndroidCustomConfiguration
    */
    public function setOmaSettings($val)
    {
        $this->_propDict["omaSettings"] = $val;
        return $this;
    }

}
