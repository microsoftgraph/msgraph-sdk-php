<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingSetting File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TrainingSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingSetting extends Entity
{

    /**
    * Gets the settingType
    *
    * @return TrainingSettingType|null The settingType
    */
    public function getSettingType()
    {
        if (array_key_exists("settingType", $this->_propDict)) {
            if (is_a($this->_propDict["settingType"], "\Beta\Microsoft\Graph\Model\TrainingSettingType") || is_null($this->_propDict["settingType"])) {
                return $this->_propDict["settingType"];
            } else {
                $this->_propDict["settingType"] = new TrainingSettingType($this->_propDict["settingType"]);
                return $this->_propDict["settingType"];
            }
        }
        return null;
    }

    /**
    * Sets the settingType
    *
    * @param TrainingSettingType $val The value to assign to the settingType
    *
    * @return TrainingSetting The TrainingSetting
    */
    public function setSettingType($val)
    {
        $this->_propDict["settingType"] = $val;
         return $this;
    }
}
