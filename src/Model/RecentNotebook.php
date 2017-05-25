<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecentNotebook File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* RecentNotebook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RecentNotebook extends Entity
{
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
    * @param string $val The value of the displayName
    *
    * @return RecentNotebook
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastAccessedTime
    *
    * @return \DateTime The lastAccessedTime
    */
    public function getLastAccessedTime()
    {
        if (array_key_exists("lastAccessedTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAccessedTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["lastAccessedTime"];
            } else {
                $this->_propDict["lastAccessedTime"] = new \DateTime($this->_propDict["lastAccessedTime"]);
                return $this->_propDict["lastAccessedTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastAccessedTime
    *
    * @param \DateTime $val The value to assign to the lastAccessedTime
    *
    * @return RecentNotebook The RecentNotebook
    */
    public function setLastAccessedTime($val)
    {
        $this->_propDict["lastAccessedTime"] = $val;
         return $this;
    }

    /**
    * Gets the links
    *
    * @return RecentNotebookLinks The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "Microsoft\Graph\Model\RecentNotebookLinks")) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new RecentNotebookLinks($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }

    /**
    * Sets the links
    *
    * @param RecentNotebookLinks $val The value to assign to the links
    *
    * @return RecentNotebook The RecentNotebook
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
         return $this;
    }

    /**
    * Gets the sourceService
    *
    * @return OnenoteSourceService The sourceService
    */
    public function getSourceService()
    {
        if (array_key_exists("sourceService", $this->_propDict)) {
            if (is_a($this->_propDict["sourceService"], "Microsoft\Graph\Model\OnenoteSourceService")) {
                return $this->_propDict["sourceService"];
            } else {
                $this->_propDict["sourceService"] = new OnenoteSourceService($this->_propDict["sourceService"]);
                return $this->_propDict["sourceService"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceService
    *
    * @param OnenoteSourceService $val The value to assign to the sourceService
    *
    * @return RecentNotebook The RecentNotebook
    */
    public function setSourceService($val)
    {
        $this->_propDict["sourceService"] = $val;
         return $this;
    }
}
