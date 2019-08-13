<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TypedEmailAddress File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* TypedEmailAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TypedEmailAddress extends EmailAddress
{

    /**
    * Gets the type
    *
    * @return EmailType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Beta\Model\EmailType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new EmailType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param EmailType $val The value to assign to the type
    *
    * @return TypedEmailAddress The TypedEmailAddress
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the otherLabel
    *
    * @return string The otherLabel
    */
    public function getOtherLabel()
    {
        if (array_key_exists("otherLabel", $this->_propDict)) {
            return $this->_propDict["otherLabel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the otherLabel
    *
    * @param string $val The value of the otherLabel
    *
    * @return TypedEmailAddress
    */
    public function setOtherLabel($val)
    {
        $this->_propDict["otherLabel"] = $val;
        return $this;
    }
}
