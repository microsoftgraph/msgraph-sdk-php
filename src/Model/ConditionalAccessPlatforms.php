<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessPlatforms File
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
* ConditionalAccessPlatforms class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessPlatforms extends Entity
{

    /**
    * Gets the excludePlatforms
    * Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue.
    *
    * @return ConditionalAccessDevicePlatform[]|null The excludePlatforms
    */
    public function getExcludePlatforms()
    {
        if (array_key_exists("excludePlatforms", $this->_propDict) && !is_null($this->_propDict["excludePlatforms"])) {
       
            if (count($this->_propDict['excludePlatforms']) > 0 && is_a($this->_propDict['excludePlatforms'][0], 'ConditionalAccessDevicePlatform')) {
                return $this->_propDict['excludePlatforms'];
            }
            $excludePlatforms = [];
            foreach ($this->_propDict['excludePlatforms'] as $singleValue) {
                $excludePlatforms []= new ConditionalAccessDevicePlatform($singleValue);
            }
            $this->_propDict['excludePlatforms'] = $excludePlatforms;
            return $this->_propDict['excludePlatforms'];
            }
        return null;
    }

    /**
    * Sets the excludePlatforms
    * Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue.
    *
    * @param ConditionalAccessDevicePlatform[] $val The value to assign to the excludePlatforms
    *
    * @return ConditionalAccessPlatforms The ConditionalAccessPlatforms
    */
    public function setExcludePlatforms($val)
    {
        $this->_propDict["excludePlatforms"] = $val;
         return $this;
    }

    /**
    * Gets the includePlatforms
    * Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue.
    *
    * @return ConditionalAccessDevicePlatform[]|null The includePlatforms
    */
    public function getIncludePlatforms()
    {
        if (array_key_exists("includePlatforms", $this->_propDict) && !is_null($this->_propDict["includePlatforms"])) {
       
            if (count($this->_propDict['includePlatforms']) > 0 && is_a($this->_propDict['includePlatforms'][0], 'ConditionalAccessDevicePlatform')) {
                return $this->_propDict['includePlatforms'];
            }
            $includePlatforms = [];
            foreach ($this->_propDict['includePlatforms'] as $singleValue) {
                $includePlatforms []= new ConditionalAccessDevicePlatform($singleValue);
            }
            $this->_propDict['includePlatforms'] = $includePlatforms;
            return $this->_propDict['includePlatforms'];
            }
        return null;
    }

    /**
    * Sets the includePlatforms
    * Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue.
    *
    * @param ConditionalAccessDevicePlatform[] $val The value to assign to the includePlatforms
    *
    * @return ConditionalAccessPlatforms The ConditionalAccessPlatforms
    */
    public function setIncludePlatforms($val)
    {
        $this->_propDict["includePlatforms"] = $val;
         return $this;
    }
}
