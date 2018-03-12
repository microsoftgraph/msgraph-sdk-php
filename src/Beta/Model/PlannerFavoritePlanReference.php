<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerFavoritePlanReference File
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
* PlannerFavoritePlanReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PlannerFavoritePlanReference extends Entity
{
    /**
    * Gets the orderHint
    *
    * @return string The orderHint
    */
    public function getOrderHint()
    {
        if (array_key_exists("orderHint", $this->_propDict)) {
            return $this->_propDict["orderHint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the orderHint
    *
    * @param string $val The value of the orderHint
    *
    * @return PlannerFavoritePlanReference
    */
    public function setOrderHint($val)
    {
        $this->_propDict["orderHint"] = $val;
        return $this;
    }
    /**
    * Gets the planTitle
    *
    * @return string The planTitle
    */
    public function getPlanTitle()
    {
        if (array_key_exists("planTitle", $this->_propDict)) {
            return $this->_propDict["planTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the planTitle
    *
    * @param string $val The value of the planTitle
    *
    * @return PlannerFavoritePlanReference
    */
    public function setPlanTitle($val)
    {
        $this->_propDict["planTitle"] = $val;
        return $this;
    }
}
