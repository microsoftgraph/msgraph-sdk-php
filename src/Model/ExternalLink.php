<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalLink File
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
* ExternalLink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ExternalLink extends Entity
{
    /**
    * Gets the href
    *
    * @return string The href
    */
    public function getHref()
    {
        if (array_key_exists("href", $this->_propDict)) {
            return $this->_propDict["href"];
        } else {
            return null;
        }
    }

    /**
    * Sets the href
    *
    * @param string $val The value of the href
    *
    * @return ExternalLink
    */
    public function setHref($val)
    {
        $this->_propDict["href"] = $val;
        return $this;
    }
}
