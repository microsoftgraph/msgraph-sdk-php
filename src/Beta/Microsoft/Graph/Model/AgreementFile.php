<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgreementFile File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AgreementFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgreementFile extends AgreementFileProperties
{

     /** 
     * Gets the localizations
     *
     * @return array The localizations
     */
    public function getLocalizations()
    {
        if (array_key_exists("localizations", $this->_propDict)) {
           return $this->_propDict["localizations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the localizations
    *
    * @param AgreementFileLocalization $val The localizations
    *
    * @return AgreementFile
    */
    public function setLocalizations($val)
    {
		$this->_propDict["localizations"] = $val;
        return $this;
    }
    
}