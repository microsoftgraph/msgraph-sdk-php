<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsCatalogApp File
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
* TeamsCatalogApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TeamsCatalogApp extends Entity
{
    /**
    * Gets the externalId
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return TeamsCatalogApp
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return TeamsCatalogApp
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return TeamsCatalogApp
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the distributionMethod
    *
    * @return TeamsAppDistributionMethod The distributionMethod
    */
    public function getDistributionMethod()
    {
        if (array_key_exists("distributionMethod", $this->_propDict)) {
            if (is_a($this->_propDict["distributionMethod"], "Microsoft\Graph\Beta\Model\TeamsAppDistributionMethod")) {
                return $this->_propDict["distributionMethod"];
            } else {
                $this->_propDict["distributionMethod"] = new TeamsAppDistributionMethod($this->_propDict["distributionMethod"]);
                return $this->_propDict["distributionMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the distributionMethod
    *
    * @param TeamsAppDistributionMethod $val The distributionMethod
    *
    * @return TeamsCatalogApp
    */
    public function setDistributionMethod($val)
    {
        $this->_propDict["distributionMethod"] = $val;
        return $this;
    }
    
}