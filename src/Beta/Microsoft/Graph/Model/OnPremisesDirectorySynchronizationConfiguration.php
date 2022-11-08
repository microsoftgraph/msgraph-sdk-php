<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesDirectorySynchronizationConfiguration File
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
* OnPremisesDirectorySynchronizationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesDirectorySynchronizationConfiguration extends Entity
{

    /**
    * Gets the accidentalDeletionPrevention
    *
    * @return OnPremisesAccidentalDeletionPrevention|null The accidentalDeletionPrevention
    */
    public function getAccidentalDeletionPrevention()
    {
        if (array_key_exists("accidentalDeletionPrevention", $this->_propDict)) {
            if (is_a($this->_propDict["accidentalDeletionPrevention"], "\Beta\Microsoft\Graph\Model\OnPremisesAccidentalDeletionPrevention") || is_null($this->_propDict["accidentalDeletionPrevention"])) {
                return $this->_propDict["accidentalDeletionPrevention"];
            } else {
                $this->_propDict["accidentalDeletionPrevention"] = new OnPremisesAccidentalDeletionPrevention($this->_propDict["accidentalDeletionPrevention"]);
                return $this->_propDict["accidentalDeletionPrevention"];
            }
        }
        return null;
    }

    /**
    * Sets the accidentalDeletionPrevention
    *
    * @param OnPremisesAccidentalDeletionPrevention $val The value to assign to the accidentalDeletionPrevention
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setAccidentalDeletionPrevention($val)
    {
        $this->_propDict["accidentalDeletionPrevention"] = $val;
         return $this;
    }

    /**
    * Gets the customerRequestedSynchronizationInterval
    *
    * @return \DateInterval|null The customerRequestedSynchronizationInterval
    */
    public function getCustomerRequestedSynchronizationInterval()
    {
        if (array_key_exists("customerRequestedSynchronizationInterval", $this->_propDict)) {
            if (is_a($this->_propDict["customerRequestedSynchronizationInterval"], "\DateInterval") || is_null($this->_propDict["customerRequestedSynchronizationInterval"])) {
                return $this->_propDict["customerRequestedSynchronizationInterval"];
            } else {
                $this->_propDict["customerRequestedSynchronizationInterval"] = new \DateInterval($this->_propDict["customerRequestedSynchronizationInterval"]);
                return $this->_propDict["customerRequestedSynchronizationInterval"];
            }
        }
        return null;
    }

    /**
    * Sets the customerRequestedSynchronizationInterval
    *
    * @param \DateInterval $val The value to assign to the customerRequestedSynchronizationInterval
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setCustomerRequestedSynchronizationInterval($val)
    {
        $this->_propDict["customerRequestedSynchronizationInterval"] = $val;
         return $this;
    }

    /**
    * Gets the synchronizationInterval
    *
    * @return \DateInterval|null The synchronizationInterval
    */
    public function getSynchronizationInterval()
    {
        if (array_key_exists("synchronizationInterval", $this->_propDict)) {
            if (is_a($this->_propDict["synchronizationInterval"], "\DateInterval") || is_null($this->_propDict["synchronizationInterval"])) {
                return $this->_propDict["synchronizationInterval"];
            } else {
                $this->_propDict["synchronizationInterval"] = new \DateInterval($this->_propDict["synchronizationInterval"]);
                return $this->_propDict["synchronizationInterval"];
            }
        }
        return null;
    }

    /**
    * Sets the synchronizationInterval
    *
    * @param \DateInterval $val The value to assign to the synchronizationInterval
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setSynchronizationInterval($val)
    {
        $this->_propDict["synchronizationInterval"] = $val;
         return $this;
    }
}
