<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignedLicense File
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
* AssignedLicense class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AssignedLicense extends Entity
{
    /**
    * Gets the disabledPlans
    *
    * @return string The disabledPlans
    */
    public function getDisabledPlans()
    {
        if (array_key_exists("disabledPlans", $this->_propDict)) {
            return $this->_propDict["disabledPlans"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disabledPlans
    *
    * @param string $val The value of the disabledPlans
    *
    * @return AssignedLicense
    */
    public function setDisabledPlans($val)
    {
        $this->_propDict["disabledPlans"] = $val;
        return $this;
    }
    /**
    * Gets the skuId
    *
    * @return string The skuId
    */
    public function getSkuId()
    {
        if (array_key_exists("skuId", $this->_propDict)) {
            return $this->_propDict["skuId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skuId
    *
    * @param string $val The value of the skuId
    *
    * @return AssignedLicense
    */
    public function setSkuId($val)
    {
        $this->_propDict["skuId"] = $val;
        return $this;
    }
}
