<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewDenyActionSettings File
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
* AccessReviewDenyActionSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AccessReviewDenyActionSettings extends Entity
{
    /**
    * Gets the removeAccessToResource
    *
    * @return bool The removeAccessToResource
    */
    public function getRemoveAccessToResource()
    {
        if (array_key_exists("removeAccessToResource", $this->_propDict)) {
            return $this->_propDict["removeAccessToResource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeAccessToResource
    *
    * @param bool $val The value of the removeAccessToResource
    *
    * @return AccessReviewDenyActionSettings
    */
    public function setRemoveAccessToResource($val)
    {
        $this->_propDict["removeAccessToResource"] = $val;
        return $this;
    }
    /**
    * Gets the disableUserSignIn
    *
    * @return bool The disableUserSignIn
    */
    public function getDisableUserSignIn()
    {
        if (array_key_exists("disableUserSignIn", $this->_propDict)) {
            return $this->_propDict["disableUserSignIn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disableUserSignIn
    *
    * @param bool $val The value of the disableUserSignIn
    *
    * @return AccessReviewDenyActionSettings
    */
    public function setDisableUserSignIn($val)
    {
        $this->_propDict["disableUserSignIn"] = $val;
        return $this;
    }
    /**
    * Gets the deleteUserFromDirectory
    *
    * @return bool The deleteUserFromDirectory
    */
    public function getDeleteUserFromDirectory()
    {
        if (array_key_exists("deleteUserFromDirectory", $this->_propDict)) {
            return $this->_propDict["deleteUserFromDirectory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deleteUserFromDirectory
    *
    * @param bool $val The value of the deleteUserFromDirectory
    *
    * @return AccessReviewDenyActionSettings
    */
    public function setDeleteUserFromDirectory($val)
    {
        $this->_propDict["deleteUserFromDirectory"] = $val;
        return $this;
    }
    /**
    * Gets the timeBeforeDeletionInDays
    *
    * @return int The timeBeforeDeletionInDays
    */
    public function getTimeBeforeDeletionInDays()
    {
        if (array_key_exists("timeBeforeDeletionInDays", $this->_propDict)) {
            return $this->_propDict["timeBeforeDeletionInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeBeforeDeletionInDays
    *
    * @param int $val The value of the timeBeforeDeletionInDays
    *
    * @return AccessReviewDenyActionSettings
    */
    public function setTimeBeforeDeletionInDays($val)
    {
        $this->_propDict["timeBeforeDeletionInDays"] = $val;
        return $this;
    }
}
