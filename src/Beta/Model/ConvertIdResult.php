<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConvertIdResult File
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
* ConvertIdResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConvertIdResult extends Entity
{
    /**
    * Gets the sourceId
    *
    * @return string The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceId
    *
    * @param string $val The value of the sourceId
    *
    * @return ConvertIdResult
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }
    /**
    * Gets the targetId
    *
    * @return string The targetId
    */
    public function getTargetId()
    {
        if (array_key_exists("targetId", $this->_propDict)) {
            return $this->_propDict["targetId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetId
    *
    * @param string $val The value of the targetId
    *
    * @return ConvertIdResult
    */
    public function setTargetId($val)
    {
        $this->_propDict["targetId"] = $val;
        return $this;
    }

    /**
    * Gets the errorDetails
    *
    * @return GenericError The errorDetails
    */
    public function getErrorDetails()
    {
        if (array_key_exists("errorDetails", $this->_propDict)) {
            if (is_a($this->_propDict["errorDetails"], "Microsoft\Graph\Beta\Model\GenericError")) {
                return $this->_propDict["errorDetails"];
            } else {
                $this->_propDict["errorDetails"] = new GenericError($this->_propDict["errorDetails"]);
                return $this->_propDict["errorDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the errorDetails
    *
    * @param GenericError $val The value to assign to the errorDetails
    *
    * @return ConvertIdResult The ConvertIdResult
    */
    public function setErrorDetails($val)
    {
        $this->_propDict["errorDetails"] = $val;
         return $this;
    }
}
