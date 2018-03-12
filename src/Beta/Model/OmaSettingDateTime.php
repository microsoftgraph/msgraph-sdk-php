<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OmaSettingDateTime File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* OmaSettingDateTime class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OmaSettingDateTime extends OmaSetting
{

    /**
    * Gets the value
    * Value.
    *
    * @return \DateTime The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new \DateTime($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    * Value.
    *
    * @param \DateTime $val The value to assign to the value
    *
    * @return OmaSettingDateTime The OmaSettingDateTime
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
