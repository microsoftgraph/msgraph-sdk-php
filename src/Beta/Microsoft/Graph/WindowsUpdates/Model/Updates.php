<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Updates File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* Updates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Updates extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the catalog
    *
    * @return Catalog The catalog
    */
    public function getCatalog()
    {
        if (array_key_exists("catalog", $this->_propDict)) {
            if (is_a($this->_propDict["catalog"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\Catalog")) {
                return $this->_propDict["catalog"];
            } else {
                $this->_propDict["catalog"] = new Catalog($this->_propDict["catalog"]);
                return $this->_propDict["catalog"];
            }
        }
        return null;
    }
    
    /**
    * Sets the catalog
    *
    * @param Catalog $val The catalog
    *
    * @return Updates
    */
    public function setCatalog($val)
    {
        $this->_propDict["catalog"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deployments
     *
     * @return array The deployments
     */
    public function getDeployments()
    {
        if (array_key_exists("deployments", $this->_propDict)) {
           return $this->_propDict["deployments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deployments
    *
    * @param Deployment $val The deployments
    *
    * @return Updates
    */
    public function setDeployments($val)
    {
		$this->_propDict["deployments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the updatableAssets
     *
     * @return array The updatableAssets
     */
    public function getUpdatableAssets()
    {
        if (array_key_exists("updatableAssets", $this->_propDict)) {
           return $this->_propDict["updatableAssets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the updatableAssets
    *
    * @param UpdatableAsset $val The updatableAssets
    *
    * @return Updates
    */
    public function setUpdatableAssets($val)
    {
		$this->_propDict["updatableAssets"] = $val;
        return $this;
    }
    
}
