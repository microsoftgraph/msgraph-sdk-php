<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosHomeScreenFolderPage File
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
* IosHomeScreenFolderPage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosHomeScreenFolderPage extends Entity
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
    * @return IosHomeScreenFolderPage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the apps
    *
    * @return IosHomeScreenApp The apps
    */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
            if (is_a($this->_propDict["apps"], "Microsoft\Graph\Beta\Model\IosHomeScreenApp")) {
                return $this->_propDict["apps"];
            } else {
                $this->_propDict["apps"] = new IosHomeScreenApp($this->_propDict["apps"]);
                return $this->_propDict["apps"];
            }
        }
        return null;
    }

    /**
    * Sets the apps
    *
    * @param IosHomeScreenApp $val The value to assign to the apps
    *
    * @return IosHomeScreenFolderPage The IosHomeScreenFolderPage
    */
    public function setApps($val)
    {
        $this->_propDict["apps"] = $val;
         return $this;
    }
}
