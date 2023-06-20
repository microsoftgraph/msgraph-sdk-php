<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Headers File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* Headers class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Headers extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the origin
    *
    * @return string|null The origin
    */
    public function getOrigin()
    {
        if (array_key_exists("origin", $this->_propDict)) {
            return $this->_propDict["origin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the origin
    *
    * @param string $val The value of the origin
    *
    * @return Headers
    */
    public function setOrigin($val)
    {
        $this->_propDict["origin"] = $val;
        return $this;
    }
    /**
    * Gets the referrer
    *
    * @return string|null The referrer
    */
    public function getReferrer()
    {
        if (array_key_exists("referrer", $this->_propDict)) {
            return $this->_propDict["referrer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referrer
    *
    * @param string $val The value of the referrer
    *
    * @return Headers
    */
    public function setReferrer($val)
    {
        $this->_propDict["referrer"] = $val;
        return $this;
    }
    /**
    * Gets the xForwardedFor
    *
    * @return string|null The xForwardedFor
    */
    public function getXForwardedFor()
    {
        if (array_key_exists("xForwardedFor", $this->_propDict)) {
            return $this->_propDict["xForwardedFor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the xForwardedFor
    *
    * @param string $val The value of the xForwardedFor
    *
    * @return Headers
    */
    public function setXForwardedFor($val)
    {
        $this->_propDict["xForwardedFor"] = $val;
        return $this;
    }
}
