<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitlementsDataCollection File
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
* EntitlementsDataCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitlementsDataCollection extends EntitlementsDataCollectionInfo
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.entitlementsDataCollection");
    }


    /**
    * Gets the lastCollectionDateTime
    *
    * @return \DateTime|null The lastCollectionDateTime
    */
    public function getLastCollectionDateTime()
    {
        if (array_key_exists("lastCollectionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCollectionDateTime"], "\DateTime") || is_null($this->_propDict["lastCollectionDateTime"])) {
                return $this->_propDict["lastCollectionDateTime"];
            } else {
                $this->_propDict["lastCollectionDateTime"] = new \DateTime($this->_propDict["lastCollectionDateTime"]);
                return $this->_propDict["lastCollectionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCollectionDateTime
    *
    * @param \DateTime $val The value to assign to the lastCollectionDateTime
    *
    * @return EntitlementsDataCollection The EntitlementsDataCollection
    */
    public function setLastCollectionDateTime($val)
    {
        $this->_propDict["lastCollectionDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the permissionsModificationCapability
    *
    * @return PermissionsModificationCapability|null The permissionsModificationCapability
    */
    public function getPermissionsModificationCapability()
    {
        if (array_key_exists("permissionsModificationCapability", $this->_propDict)) {
            if (is_a($this->_propDict["permissionsModificationCapability"], "\Beta\Microsoft\Graph\Model\PermissionsModificationCapability") || is_null($this->_propDict["permissionsModificationCapability"])) {
                return $this->_propDict["permissionsModificationCapability"];
            } else {
                $this->_propDict["permissionsModificationCapability"] = new PermissionsModificationCapability($this->_propDict["permissionsModificationCapability"]);
                return $this->_propDict["permissionsModificationCapability"];
            }
        }
        return null;
    }

    /**
    * Sets the permissionsModificationCapability
    *
    * @param PermissionsModificationCapability $val The value to assign to the permissionsModificationCapability
    *
    * @return EntitlementsDataCollection The EntitlementsDataCollection
    */
    public function setPermissionsModificationCapability($val)
    {
        $this->_propDict["permissionsModificationCapability"] = $val;
         return $this;
    }

    /**
    * Gets the status
    *
    * @return DataCollectionStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\DataCollectionStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DataCollectionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param DataCollectionStatus $val The value to assign to the status
    *
    * @return EntitlementsDataCollection The EntitlementsDataCollection
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
