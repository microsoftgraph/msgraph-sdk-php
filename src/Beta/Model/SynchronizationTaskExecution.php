<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationTaskExecution File
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
* SynchronizationTaskExecution class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SynchronizationTaskExecution extends Entity
{
    /**
    * Gets the activityIdentifier
    *
    * @return string The activityIdentifier
    */
    public function getActivityIdentifier()
    {
        if (array_key_exists("activityIdentifier", $this->_propDict)) {
            return $this->_propDict["activityIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityIdentifier
    *
    * @param string $val The value of the activityIdentifier
    *
    * @return SynchronizationTaskExecution
    */
    public function setActivityIdentifier($val)
    {
        $this->_propDict["activityIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the countEntitled
    *
    * @return int The countEntitled
    */
    public function getCountEntitled()
    {
        if (array_key_exists("countEntitled", $this->_propDict)) {
            return $this->_propDict["countEntitled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countEntitled
    *
    * @param int $val The value of the countEntitled
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountEntitled($val)
    {
        $this->_propDict["countEntitled"] = $val;
        return $this;
    }
    /**
    * Gets the countEntitledForProvisioning
    *
    * @return int The countEntitledForProvisioning
    */
    public function getCountEntitledForProvisioning()
    {
        if (array_key_exists("countEntitledForProvisioning", $this->_propDict)) {
            return $this->_propDict["countEntitledForProvisioning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countEntitledForProvisioning
    *
    * @param int $val The value of the countEntitledForProvisioning
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountEntitledForProvisioning($val)
    {
        $this->_propDict["countEntitledForProvisioning"] = $val;
        return $this;
    }
    /**
    * Gets the countEscrowed
    *
    * @return int The countEscrowed
    */
    public function getCountEscrowed()
    {
        if (array_key_exists("countEscrowed", $this->_propDict)) {
            return $this->_propDict["countEscrowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countEscrowed
    *
    * @param int $val The value of the countEscrowed
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountEscrowed($val)
    {
        $this->_propDict["countEscrowed"] = $val;
        return $this;
    }
    /**
    * Gets the countEscrowedRaw
    *
    * @return int The countEscrowedRaw
    */
    public function getCountEscrowedRaw()
    {
        if (array_key_exists("countEscrowedRaw", $this->_propDict)) {
            return $this->_propDict["countEscrowedRaw"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countEscrowedRaw
    *
    * @param int $val The value of the countEscrowedRaw
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountEscrowedRaw($val)
    {
        $this->_propDict["countEscrowedRaw"] = $val;
        return $this;
    }
    /**
    * Gets the countExported
    *
    * @return int The countExported
    */
    public function getCountExported()
    {
        if (array_key_exists("countExported", $this->_propDict)) {
            return $this->_propDict["countExported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countExported
    *
    * @param int $val The value of the countExported
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountExported($val)
    {
        $this->_propDict["countExported"] = $val;
        return $this;
    }
    /**
    * Gets the countExports
    *
    * @return int The countExports
    */
    public function getCountExports()
    {
        if (array_key_exists("countExports", $this->_propDict)) {
            return $this->_propDict["countExports"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countExports
    *
    * @param int $val The value of the countExports
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountExports($val)
    {
        $this->_propDict["countExports"] = $val;
        return $this;
    }
    /**
    * Gets the countImported
    *
    * @return int The countImported
    */
    public function getCountImported()
    {
        if (array_key_exists("countImported", $this->_propDict)) {
            return $this->_propDict["countImported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countImported
    *
    * @param int $val The value of the countImported
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountImported($val)
    {
        $this->_propDict["countImported"] = $val;
        return $this;
    }
    /**
    * Gets the countImportedDeltas
    *
    * @return int The countImportedDeltas
    */
    public function getCountImportedDeltas()
    {
        if (array_key_exists("countImportedDeltas", $this->_propDict)) {
            return $this->_propDict["countImportedDeltas"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countImportedDeltas
    *
    * @param int $val The value of the countImportedDeltas
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountImportedDeltas($val)
    {
        $this->_propDict["countImportedDeltas"] = $val;
        return $this;
    }
    /**
    * Gets the countImportedReferenceDeltas
    *
    * @return int The countImportedReferenceDeltas
    */
    public function getCountImportedReferenceDeltas()
    {
        if (array_key_exists("countImportedReferenceDeltas", $this->_propDict)) {
            return $this->_propDict["countImportedReferenceDeltas"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countImportedReferenceDeltas
    *
    * @param int $val The value of the countImportedReferenceDeltas
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountImportedReferenceDeltas($val)
    {
        $this->_propDict["countImportedReferenceDeltas"] = $val;
        return $this;
    }

    /**
    * Gets the state
    *
    * @return SynchronizationTaskExecutionResult The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\SynchronizationTaskExecutionResult")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new SynchronizationTaskExecutionResult($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    *
    * @param SynchronizationTaskExecutionResult $val The value to assign to the state
    *
    * @return SynchronizationTaskExecution The SynchronizationTaskExecution
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }

    /**
    * Gets the error
    *
    * @return SynchronizationError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "Microsoft\Graph\Beta\Model\SynchronizationError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new SynchronizationError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param SynchronizationError $val The value to assign to the error
    *
    * @return SynchronizationTaskExecution The SynchronizationTaskExecution
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }

    /**
    * Gets the timeBegan
    *
    * @return \DateTime The timeBegan
    */
    public function getTimeBegan()
    {
        if (array_key_exists("timeBegan", $this->_propDict)) {
            if (is_a($this->_propDict["timeBegan"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["timeBegan"];
            } else {
                $this->_propDict["timeBegan"] = new \DateTime($this->_propDict["timeBegan"]);
                return $this->_propDict["timeBegan"];
            }
        }
        return null;
    }

    /**
    * Sets the timeBegan
    *
    * @param \DateTime $val The value to assign to the timeBegan
    *
    * @return SynchronizationTaskExecution The SynchronizationTaskExecution
    */
    public function setTimeBegan($val)
    {
        $this->_propDict["timeBegan"] = $val;
         return $this;
    }

    /**
    * Gets the timeEnded
    *
    * @return \DateTime The timeEnded
    */
    public function getTimeEnded()
    {
        if (array_key_exists("timeEnded", $this->_propDict)) {
            if (is_a($this->_propDict["timeEnded"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["timeEnded"];
            } else {
                $this->_propDict["timeEnded"] = new \DateTime($this->_propDict["timeEnded"]);
                return $this->_propDict["timeEnded"];
            }
        }
        return null;
    }

    /**
    * Sets the timeEnded
    *
    * @param \DateTime $val The value to assign to the timeEnded
    *
    * @return SynchronizationTaskExecution The SynchronizationTaskExecution
    */
    public function setTimeEnded($val)
    {
        $this->_propDict["timeEnded"] = $val;
         return $this;
    }
}
