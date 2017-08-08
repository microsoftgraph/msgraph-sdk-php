<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SiteCollection File
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
* SiteCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SiteCollection extends Entity
{
    /**
    * Gets the hostname
    * The hostname for the site collection. Read-only.
    *
    * @return string The hostname
    */
    public function getHostname()
    {
        if (array_key_exists("hostname", $this->_propDict)) {
            return $this->_propDict["hostname"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostname
    * The hostname for the site collection. Read-only.
    *
    * @param string $val The value of the hostname
    *
    * @return SiteCollection
    */
    public function setHostname($val)
    {
        $this->_propDict["hostname"] = $val;
        return $this;
    }
}
