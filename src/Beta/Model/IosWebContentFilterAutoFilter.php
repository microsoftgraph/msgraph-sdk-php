<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosWebContentFilterAutoFilter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* IosWebContentFilterAutoFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosWebContentFilterAutoFilter extends IosWebContentFilterBase
{
    /**
    * Gets the allowedUrls
    *
    * @return string The allowedUrls
    */
    public function getAllowedUrls()
    {
        if (array_key_exists("allowedUrls", $this->_propDict)) {
            return $this->_propDict["allowedUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedUrls
    *
    * @param string $val The value of the allowedUrls
    *
    * @return IosWebContentFilterAutoFilter
    */
    public function setAllowedUrls($val)
    {
        $this->_propDict["allowedUrls"] = $val;
        return $this;
    }
    /**
    * Gets the blockedUrls
    *
    * @return string The blockedUrls
    */
    public function getBlockedUrls()
    {
        if (array_key_exists("blockedUrls", $this->_propDict)) {
            return $this->_propDict["blockedUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockedUrls
    *
    * @param string $val The value of the blockedUrls
    *
    * @return IosWebContentFilterAutoFilter
    */
    public function setBlockedUrls($val)
    {
        $this->_propDict["blockedUrls"] = $val;
        return $this;
    }
}
