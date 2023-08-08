<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSWebClip File
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
* MacOSWebClip class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSWebClip extends MobileApp
{
    /**
    * Gets the appUrl
    * The web app URL starting with http:// or https://, such as https://learn.microsoft.com/en-us/mem/.
    *
    * @return string|null The appUrl
    */
    public function getAppUrl()
    {
        if (array_key_exists("appUrl", $this->_propDict)) {
            return $this->_propDict["appUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appUrl
    * The web app URL starting with http:// or https://, such as https://learn.microsoft.com/en-us/mem/.
    *
    * @param string $val The appUrl
    *
    * @return MacOSWebClip
    */
    public function setAppUrl($val)
    {
        $this->_propDict["appUrl"] = $val;
        return $this;
    }

    /**
    * Gets the fullScreenEnabled
    * Whether or not to open the web clip as a full-screen web app. Defaults to false. If TRUE, opens the web clip as a full-screen web app. If FALSE, the web clip opens inside of another app.
    *
    * @return bool|null The fullScreenEnabled
    */
    public function getFullScreenEnabled()
    {
        if (array_key_exists("fullScreenEnabled", $this->_propDict)) {
            return $this->_propDict["fullScreenEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fullScreenEnabled
    * Whether or not to open the web clip as a full-screen web app. Defaults to false. If TRUE, opens the web clip as a full-screen web app. If FALSE, the web clip opens inside of another app.
    *
    * @param bool $val The fullScreenEnabled
    *
    * @return MacOSWebClip
    */
    public function setFullScreenEnabled($val)
    {
        $this->_propDict["fullScreenEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the preComposedIconEnabled
    * Whether or not the icon for the app is precomosed. Defaults to false. If TRUE, prevents SpringBoard from adding "shine" to the icon. If FALSE, SpringBoard can add "shine".
    *
    * @return bool|null The preComposedIconEnabled
    */
    public function getPreComposedIconEnabled()
    {
        if (array_key_exists("preComposedIconEnabled", $this->_propDict)) {
            return $this->_propDict["preComposedIconEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preComposedIconEnabled
    * Whether or not the icon for the app is precomosed. Defaults to false. If TRUE, prevents SpringBoard from adding "shine" to the icon. If FALSE, SpringBoard can add "shine".
    *
    * @param bool $val The preComposedIconEnabled
    *
    * @return MacOSWebClip
    */
    public function setPreComposedIconEnabled($val)
    {
        $this->_propDict["preComposedIconEnabled"] = boolval($val);
        return $this;
    }

}
