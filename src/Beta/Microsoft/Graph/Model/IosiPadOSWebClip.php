<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosiPadOSWebClip File
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
* IosiPadOSWebClip class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosiPadOSWebClip extends MobileApp
{
    /**
    * Gets the appUrl
    * Indicates iOS/iPadOS web clip app URL. Example: 'https://www.contoso.com'
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
    * Indicates iOS/iPadOS web clip app URL. Example: 'https://www.contoso.com'
    *
    * @param string $val The appUrl
    *
    * @return IosiPadOSWebClip
    */
    public function setAppUrl($val)
    {
        $this->_propDict["appUrl"] = $val;
        return $this;
    }

    /**
    * Gets the fullScreenEnabled
    * Whether or not to open the web clip as a full-screen web app. Defaults to false. If TRUE, opens the web clip as a full-screen web app. If FALSE, the web clip opens inside of another app, such as Safari or the app specified with targetApplicationBundleIdentifier.
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
    * Whether or not to open the web clip as a full-screen web app. Defaults to false. If TRUE, opens the web clip as a full-screen web app. If FALSE, the web clip opens inside of another app, such as Safari or the app specified with targetApplicationBundleIdentifier.
    *
    * @param bool $val The fullScreenEnabled
    *
    * @return IosiPadOSWebClip
    */
    public function setFullScreenEnabled($val)
    {
        $this->_propDict["fullScreenEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the ignoreManifestScope
    * Whether or not a full screen web clip can navigate to an external web site without showing the Safari UI. Defaults to false. If FALSE, the Safari UI appears when navigating away. If TRUE, the Safari UI will not be shown.
    *
    * @return bool|null The ignoreManifestScope
    */
    public function getIgnoreManifestScope()
    {
        if (array_key_exists("ignoreManifestScope", $this->_propDict)) {
            return $this->_propDict["ignoreManifestScope"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ignoreManifestScope
    * Whether or not a full screen web clip can navigate to an external web site without showing the Safari UI. Defaults to false. If FALSE, the Safari UI appears when navigating away. If TRUE, the Safari UI will not be shown.
    *
    * @param bool $val The ignoreManifestScope
    *
    * @return IosiPadOSWebClip
    */
    public function setIgnoreManifestScope($val)
    {
        $this->_propDict["ignoreManifestScope"] = boolval($val);
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
    * @return IosiPadOSWebClip
    */
    public function setPreComposedIconEnabled($val)
    {
        $this->_propDict["preComposedIconEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the targetApplicationBundleIdentifier
    * Specifies the application bundle identifier which opens the URL. Available in iOS 14 and later.
    *
    * @return string|null The targetApplicationBundleIdentifier
    */
    public function getTargetApplicationBundleIdentifier()
    {
        if (array_key_exists("targetApplicationBundleIdentifier", $this->_propDict)) {
            return $this->_propDict["targetApplicationBundleIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetApplicationBundleIdentifier
    * Specifies the application bundle identifier which opens the URL. Available in iOS 14 and later.
    *
    * @param string $val The targetApplicationBundleIdentifier
    *
    * @return IosiPadOSWebClip
    */
    public function setTargetApplicationBundleIdentifier($val)
    {
        $this->_propDict["targetApplicationBundleIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the useManagedBrowser
    * Whether or not to use managed browser. When TRUE, the app will be required to be opened in Microsoft Edge. When FALSE, the app will not be required to be opened in Microsoft Edge. By default, this property is set to FALSE.
    *
    * @return bool|null The useManagedBrowser
    */
    public function getUseManagedBrowser()
    {
        if (array_key_exists("useManagedBrowser", $this->_propDict)) {
            return $this->_propDict["useManagedBrowser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useManagedBrowser
    * Whether or not to use managed browser. When TRUE, the app will be required to be opened in Microsoft Edge. When FALSE, the app will not be required to be opened in Microsoft Edge. By default, this property is set to FALSE.
    *
    * @param bool $val The useManagedBrowser
    *
    * @return IosiPadOSWebClip
    */
    public function setUseManagedBrowser($val)
    {
        $this->_propDict["useManagedBrowser"] = boolval($val);
        return $this;
    }

}
