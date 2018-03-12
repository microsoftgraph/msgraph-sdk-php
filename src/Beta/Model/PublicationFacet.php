<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PublicationFacet File
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
* PublicationFacet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PublicationFacet extends Entity
{
    /**
    * Gets the level
    *
    * @return string The level
    */
    public function getLevel()
    {
        if (array_key_exists("level", $this->_propDict)) {
            return $this->_propDict["level"];
        } else {
            return null;
        }
    }

    /**
    * Sets the level
    *
    * @param string $val The value of the level
    *
    * @return PublicationFacet
    */
    public function setLevel($val)
    {
        $this->_propDict["level"] = $val;
        return $this;
    }
    /**
    * Gets the versionId
    *
    * @return string The versionId
    */
    public function getVersionId()
    {
        if (array_key_exists("versionId", $this->_propDict)) {
            return $this->_propDict["versionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versionId
    *
    * @param string $val The value of the versionId
    *
    * @return PublicationFacet
    */
    public function setVersionId($val)
    {
        $this->_propDict["versionId"] = $val;
        return $this;
    }
}
