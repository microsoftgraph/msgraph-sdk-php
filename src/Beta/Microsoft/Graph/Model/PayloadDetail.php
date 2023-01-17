<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PayloadDetail File
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
* PayloadDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PayloadDetail extends Entity
{

    /**
    * Gets the coachmarks
    *
    * @return PayloadCoachmark|null The coachmarks
    */
    public function getCoachmarks()
    {
        if (array_key_exists("coachmarks", $this->_propDict)) {
            if (is_a($this->_propDict["coachmarks"], "\Beta\Microsoft\Graph\Model\PayloadCoachmark") || is_null($this->_propDict["coachmarks"])) {
                return $this->_propDict["coachmarks"];
            } else {
                $this->_propDict["coachmarks"] = new PayloadCoachmark($this->_propDict["coachmarks"]);
                return $this->_propDict["coachmarks"];
            }
        }
        return null;
    }

    /**
    * Sets the coachmarks
    *
    * @param PayloadCoachmark $val The value to assign to the coachmarks
    *
    * @return PayloadDetail The PayloadDetail
    */
    public function setCoachmarks($val)
    {
        $this->_propDict["coachmarks"] = $val;
         return $this;
    }
    /**
    * Gets the content
    *
    * @return string|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    *
    * @param string $val The value of the content
    *
    * @return PayloadDetail
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    /**
    * Gets the phishingUrl
    *
    * @return string|null The phishingUrl
    */
    public function getPhishingUrl()
    {
        if (array_key_exists("phishingUrl", $this->_propDict)) {
            return $this->_propDict["phishingUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phishingUrl
    *
    * @param string $val The value of the phishingUrl
    *
    * @return PayloadDetail
    */
    public function setPhishingUrl($val)
    {
        $this->_propDict["phishingUrl"] = $val;
        return $this;
    }
}
