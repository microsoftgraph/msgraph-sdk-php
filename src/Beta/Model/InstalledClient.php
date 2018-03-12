<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InstalledClient File
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
* InstalledClient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class InstalledClient extends Entity
{
    /**
    * Gets the redirectUrls
    *
    * @return string The redirectUrls
    */
    public function getRedirectUrls()
    {
        if (array_key_exists("redirectUrls", $this->_propDict)) {
            return $this->_propDict["redirectUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectUrls
    *
    * @param string $val The value of the redirectUrls
    *
    * @return InstalledClient
    */
    public function setRedirectUrls($val)
    {
        $this->_propDict["redirectUrls"] = $val;
        return $this;
    }
}
