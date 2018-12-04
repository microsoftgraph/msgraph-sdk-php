<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenoteOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* OnenoteOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OnenoteOperation extends Operation
{
    /**
    * Gets the resourceLocation
    *
    * @return string The resourceLocation
    */
    public function getResourceLocation()
    {
        if (array_key_exists("resourceLocation", $this->_propDict)) {
            return $this->_propDict["resourceLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceLocation
    *
    * @param string $val The resourceLocation
    *
    * @return OnenoteOperation
    */
    public function setResourceLocation($val)
    {
        $this->_propDict["resourceLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    *
    * @param string $val The resourceId
    *
    * @return OnenoteOperation
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the error
    *
    * @return OnenoteOperationError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "Microsoft\Graph\Model\OnenoteOperationError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new OnenoteOperationError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }
    
    /**
    * Sets the error
    *
    * @param OnenoteOperationError $val The error
    *
    * @return OnenoteOperation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }
    
    /**
    * Gets the percentComplete
    *
    * @return string The percentComplete
    */
    public function getPercentComplete()
    {
        if (array_key_exists("percentComplete", $this->_propDict)) {
            return $this->_propDict["percentComplete"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the percentComplete
    *
    * @param string $val The percentComplete
    *
    * @return OnenoteOperation
    */
    public function setPercentComplete($val)
    {
        $this->_propDict["percentComplete"] = $val;
        return $this;
    }
    
}