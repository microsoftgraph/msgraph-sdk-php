<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OmaSettingBase64 File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* OmaSettingBase64 class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OmaSettingBase64 extends OmaSetting
{
    /**
    * Gets the fileName
    * File name associated with the Value property (.cer
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileName
    * File name associated with the Value property (.cer
    *
    * @param string $val The value of the fileName
    *
    * @return OmaSettingBase64
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Value. (Base64 encoded string)
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Value. (Base64 encoded string)
    *
    * @param string $val The value of the value
    *
    * @return OmaSettingBase64
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
