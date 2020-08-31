<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ArchivedPrintJob File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* ArchivedPrintJob class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ArchivedPrintJob extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return ArchivedPrintJob
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the printerId
    *
    * @return string The printerId
    */
    public function getPrinterId()
    {
        if (array_key_exists("printerId", $this->_propDict)) {
            return $this->_propDict["printerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printerId
    *
    * @param string $val The value of the printerId
    *
    * @return ArchivedPrintJob
    */
    public function setPrinterId($val)
    {
        $this->_propDict["printerId"] = $val;
        return $this;
    }

    /**
    * Gets the processingState
    *
    * @return PrintJobProcessingState The processingState
    */
    public function getProcessingState()
    {
        if (array_key_exists("processingState", $this->_propDict)) {
            if (is_a($this->_propDict["processingState"], "Beta\Microsoft\Graph\Model\PrintJobProcessingState")) {
                return $this->_propDict["processingState"];
            } else {
                $this->_propDict["processingState"] = new PrintJobProcessingState($this->_propDict["processingState"]);
                return $this->_propDict["processingState"];
            }
        }
        return null;
    }

    /**
    * Sets the processingState
    *
    * @param PrintJobProcessingState $val The value to assign to the processingState
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setProcessingState($val)
    {
        $this->_propDict["processingState"] = $val;
         return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the acquiredDateTime
    *
    * @return \DateTime The acquiredDateTime
    */
    public function getAcquiredDateTime()
    {
        if (array_key_exists("acquiredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["acquiredDateTime"], "\DateTime")) {
                return $this->_propDict["acquiredDateTime"];
            } else {
                $this->_propDict["acquiredDateTime"] = new \DateTime($this->_propDict["acquiredDateTime"]);
                return $this->_propDict["acquiredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the acquiredDateTime
    *
    * @param \DateTime $val The value to assign to the acquiredDateTime
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setAcquiredDateTime($val)
    {
        $this->_propDict["acquiredDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the completionDateTime
    *
    * @return \DateTime The completionDateTime
    */
    public function getCompletionDateTime()
    {
        if (array_key_exists("completionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completionDateTime"], "\DateTime")) {
                return $this->_propDict["completionDateTime"];
            } else {
                $this->_propDict["completionDateTime"] = new \DateTime($this->_propDict["completionDateTime"]);
                return $this->_propDict["completionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completionDateTime
    *
    * @param \DateTime $val The value to assign to the completionDateTime
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setCompletionDateTime($val)
    {
        $this->_propDict["completionDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the acquiredByPrinter
    *
    * @return bool The acquiredByPrinter
    */
    public function getAcquiredByPrinter()
    {
        if (array_key_exists("acquiredByPrinter", $this->_propDict)) {
            return $this->_propDict["acquiredByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acquiredByPrinter
    *
    * @param bool $val The value of the acquiredByPrinter
    *
    * @return ArchivedPrintJob
    */
    public function setAcquiredByPrinter($val)
    {
        $this->_propDict["acquiredByPrinter"] = $val;
        return $this;
    }
    /**
    * Gets the copiesPrinted
    *
    * @return int The copiesPrinted
    */
    public function getCopiesPrinted()
    {
        if (array_key_exists("copiesPrinted", $this->_propDict)) {
            return $this->_propDict["copiesPrinted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copiesPrinted
    *
    * @param int $val The value of the copiesPrinted
    *
    * @return ArchivedPrintJob
    */
    public function setCopiesPrinted($val)
    {
        $this->_propDict["copiesPrinted"] = $val;
        return $this;
    }
    /**
    * Gets the pageCount
    *
    * @return int The pageCount
    */
    public function getPageCount()
    {
        if (array_key_exists("pageCount", $this->_propDict)) {
            return $this->_propDict["pageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pageCount
    *
    * @param int $val The value of the pageCount
    *
    * @return ArchivedPrintJob
    */
    public function setPageCount($val)
    {
        $this->_propDict["pageCount"] = $val;
        return $this;
    }
    /**
    * Gets the blackAndWhitePageCount
    *
    * @return int The blackAndWhitePageCount
    */
    public function getBlackAndWhitePageCount()
    {
        if (array_key_exists("blackAndWhitePageCount", $this->_propDict)) {
            return $this->_propDict["blackAndWhitePageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blackAndWhitePageCount
    *
    * @param int $val The value of the blackAndWhitePageCount
    *
    * @return ArchivedPrintJob
    */
    public function setBlackAndWhitePageCount($val)
    {
        $this->_propDict["blackAndWhitePageCount"] = $val;
        return $this;
    }
    /**
    * Gets the colorPageCount
    *
    * @return int The colorPageCount
    */
    public function getColorPageCount()
    {
        if (array_key_exists("colorPageCount", $this->_propDict)) {
            return $this->_propDict["colorPageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the colorPageCount
    *
    * @param int $val The value of the colorPageCount
    *
    * @return ArchivedPrintJob
    */
    public function setColorPageCount($val)
    {
        $this->_propDict["colorPageCount"] = $val;
        return $this;
    }
    /**
    * Gets the simplexPageCount
    *
    * @return int The simplexPageCount
    */
    public function getSimplexPageCount()
    {
        if (array_key_exists("simplexPageCount", $this->_propDict)) {
            return $this->_propDict["simplexPageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the simplexPageCount
    *
    * @param int $val The value of the simplexPageCount
    *
    * @return ArchivedPrintJob
    */
    public function setSimplexPageCount($val)
    {
        $this->_propDict["simplexPageCount"] = $val;
        return $this;
    }
    /**
    * Gets the duplexPageCount
    *
    * @return int The duplexPageCount
    */
    public function getDuplexPageCount()
    {
        if (array_key_exists("duplexPageCount", $this->_propDict)) {
            return $this->_propDict["duplexPageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duplexPageCount
    *
    * @param int $val The value of the duplexPageCount
    *
    * @return ArchivedPrintJob
    */
    public function setDuplexPageCount($val)
    {
        $this->_propDict["duplexPageCount"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    *
    * @param UserIdentity $val The value to assign to the createdBy
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
         return $this;
    }
}
