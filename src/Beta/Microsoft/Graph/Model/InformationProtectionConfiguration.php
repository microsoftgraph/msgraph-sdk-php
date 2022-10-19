<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtectionConfiguration File
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
* InformationProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtectionConfiguration extends Entity
{

    /**
    * Gets the ocr
    *
    * @return OpticalCharacterRecognitionConfiguration|null The ocr
    */
    public function getOcr()
    {
        if (array_key_exists("ocr", $this->_propDict)) {
            if (is_a($this->_propDict["ocr"], "\Beta\Microsoft\Graph\Model\OpticalCharacterRecognitionConfiguration") || is_null($this->_propDict["ocr"])) {
                return $this->_propDict["ocr"];
            } else {
                $this->_propDict["ocr"] = new OpticalCharacterRecognitionConfiguration($this->_propDict["ocr"]);
                return $this->_propDict["ocr"];
            }
        }
        return null;
    }

    /**
    * Sets the ocr
    *
    * @param OpticalCharacterRecognitionConfiguration $val The value to assign to the ocr
    *
    * @return InformationProtectionConfiguration The InformationProtectionConfiguration
    */
    public function setOcr($val)
    {
        $this->_propDict["ocr"] = $val;
         return $this;
    }
}
