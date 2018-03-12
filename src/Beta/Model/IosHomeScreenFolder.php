<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosHomeScreenFolder File
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
* IosHomeScreenFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosHomeScreenFolder extends IosHomeScreenItem
{

    /**
    * Gets the pages
    * Pages of Home Screen Layout Icons which must be Application Type. This collection can contain a maximum of 500 elements.
    *
    * @return IosHomeScreenFolderPage The pages
    */
    public function getPages()
    {
        if (array_key_exists("pages", $this->_propDict)) {
            if (is_a($this->_propDict["pages"], "Microsoft\Graph\Model\IosHomeScreenFolderPage")) {
                return $this->_propDict["pages"];
            } else {
                $this->_propDict["pages"] = new IosHomeScreenFolderPage($this->_propDict["pages"]);
                return $this->_propDict["pages"];
            }
        }
        return null;
    }

    /**
    * Sets the pages
    * Pages of Home Screen Layout Icons which must be Application Type. This collection can contain a maximum of 500 elements.
    *
    * @param IosHomeScreenFolderPage $val The value to assign to the pages
    *
    * @return IosHomeScreenFolder The IosHomeScreenFolder
    */
    public function setPages($val)
    {
        $this->_propDict["pages"] = $val;
         return $this;
    }
}
