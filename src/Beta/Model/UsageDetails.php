<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UsageDetails File
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
* UsageDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class UsageDetails extends Entity
{

    /**
    * Gets the lastAccessedDateTime
    *
    * @return \DateTime The lastAccessedDateTime
    */
    public function getLastAccessedDateTime()
    {
        if (array_key_exists("lastAccessedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAccessedDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastAccessedDateTime"];
            } else {
                $this->_propDict["lastAccessedDateTime"] = new \DateTime($this->_propDict["lastAccessedDateTime"]);
                return $this->_propDict["lastAccessedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastAccessedDateTime
    *
    * @param \DateTime $val The value to assign to the lastAccessedDateTime
    *
    * @return UsageDetails The UsageDetails
    */
    public function setLastAccessedDateTime($val)
    {
        $this->_propDict["lastAccessedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return UsageDetails The UsageDetails
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }
}
