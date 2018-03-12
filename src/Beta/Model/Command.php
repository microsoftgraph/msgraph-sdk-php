<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Command File
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
* Command class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Command extends Entity
{
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return Command
    */
    public function setStatus($val)
    {
        $this->_propDict["Status"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    *
    * @param string $val The type
    *
    * @return Command
    */
    public function setType($val)
    {
        $this->_propDict["Type"] = $val;
        return $this;
    }
    
    /**
    * Gets the appServiceName
    *
    * @return string The appServiceName
    */
    public function getAppServiceName()
    {
        if (array_key_exists("appServiceName", $this->_propDict)) {
            return $this->_propDict["appServiceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appServiceName
    *
    * @param string $val The appServiceName
    *
    * @return Command
    */
    public function setAppServiceName($val)
    {
        $this->_propDict["AppServiceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the packageFamilyName
    *
    * @return string The packageFamilyName
    */
    public function getPackageFamilyName()
    {
        if (array_key_exists("packageFamilyName", $this->_propDict)) {
            return $this->_propDict["packageFamilyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the packageFamilyName
    *
    * @param string $val The packageFamilyName
    *
    * @return Command
    */
    public function setPackageFamilyName($val)
    {
        $this->_propDict["PackageFamilyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the error
    *
    * @return string The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            return $this->_propDict["error"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the error
    *
    * @param string $val The error
    *
    * @return Command
    */
    public function setError($val)
    {
        $this->_propDict["Error"] = $val;
        return $this;
    }
    
    /**
    * Gets the payload
    *
    * @return PayloadRequest The payload
    */
    public function getPayload()
    {
        if (array_key_exists("payload", $this->_propDict)) {
            if (is_a($this->_propDict["payload"], "Microsoft\Graph\Beta\Model\PayloadRequest")) {
                return $this->_propDict["payload"];
            } else {
                $this->_propDict["payload"] = new PayloadRequest($this->_propDict["payload"]);
                return $this->_propDict["payload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payload
    *
    * @param PayloadRequest $val The payload
    *
    * @return Command
    */
    public function setPayload($val)
    {
        $this->_propDict["payload"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionTicket
    *
    * @return string The permissionTicket
    */
    public function getPermissionTicket()
    {
        if (array_key_exists("permissionTicket", $this->_propDict)) {
            return $this->_propDict["permissionTicket"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionTicket
    *
    * @param string $val The permissionTicket
    *
    * @return Command
    */
    public function setPermissionTicket($val)
    {
        $this->_propDict["PermissionTicket"] = $val;
        return $this;
    }
    
    /**
    * Gets the postBackUri
    *
    * @return string The postBackUri
    */
    public function getPostBackUri()
    {
        if (array_key_exists("postBackUri", $this->_propDict)) {
            return $this->_propDict["postBackUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the postBackUri
    *
    * @param string $val The postBackUri
    *
    * @return Command
    */
    public function setPostBackUri($val)
    {
        $this->_propDict["PostBackUri"] = $val;
        return $this;
    }
    
    /**
    * Gets the responsepayload
    *
    * @return PayloadResponse The responsepayload
    */
    public function getResponsepayload()
    {
        if (array_key_exists("responsepayload", $this->_propDict)) {
            if (is_a($this->_propDict["responsepayload"], "Microsoft\Graph\Beta\Model\PayloadResponse")) {
                return $this->_propDict["responsepayload"];
            } else {
                $this->_propDict["responsepayload"] = new PayloadResponse($this->_propDict["responsepayload"]);
                return $this->_propDict["responsepayload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the responsepayload
    *
    * @param PayloadResponse $val The responsepayload
    *
    * @return Command
    */
    public function setResponsepayload($val)
    {
        $this->_propDict["responsepayload"] = $val;
        return $this;
    }
    
}