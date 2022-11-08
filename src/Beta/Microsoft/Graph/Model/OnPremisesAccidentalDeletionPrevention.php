<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesAccidentalDeletionPrevention File
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
* OnPremisesAccidentalDeletionPrevention class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesAccidentalDeletionPrevention extends Entity
{
    /**
    * Gets the alertThreshold
    *
    * @return int|null The alertThreshold
    */
    public function getAlertThreshold()
    {
        if (array_key_exists("alertThreshold", $this->_propDict)) {
            return $this->_propDict["alertThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertThreshold
    *
    * @param int $val The value of the alertThreshold
    *
    * @return OnPremisesAccidentalDeletionPrevention
    */
    public function setAlertThreshold($val)
    {
        $this->_propDict["alertThreshold"] = $val;
        return $this;
    }

    /**
    * Gets the synchronizationPreventionType
    *
    * @return OnPremisesDirectorySynchronizationDeletionPreventionType|null The synchronizationPreventionType
    */
    public function getSynchronizationPreventionType()
    {
        if (array_key_exists("synchronizationPreventionType", $this->_propDict)) {
            if (is_a($this->_propDict["synchronizationPreventionType"], "\Beta\Microsoft\Graph\Model\OnPremisesDirectorySynchronizationDeletionPreventionType") || is_null($this->_propDict["synchronizationPreventionType"])) {
                return $this->_propDict["synchronizationPreventionType"];
            } else {
                $this->_propDict["synchronizationPreventionType"] = new OnPremisesDirectorySynchronizationDeletionPreventionType($this->_propDict["synchronizationPreventionType"]);
                return $this->_propDict["synchronizationPreventionType"];
            }
        }
        return null;
    }

    /**
    * Sets the synchronizationPreventionType
    *
    * @param OnPremisesDirectorySynchronizationDeletionPreventionType $val The value to assign to the synchronizationPreventionType
    *
    * @return OnPremisesAccidentalDeletionPrevention The OnPremisesAccidentalDeletionPrevention
    */
    public function setSynchronizationPreventionType($val)
    {
        $this->_propDict["synchronizationPreventionType"] = $val;
         return $this;
    }
}
