<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExcludedApps File
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
* ExcludedApps class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ExcludedApps extends Entity
{
    /**
    * Gets the access
    *
    * @return bool The access
    */
    public function getAccess()
    {
        if (array_key_exists("access", $this->_propDict)) {
            return $this->_propDict["access"];
        } else {
            return null;
        }
    }

    /**
    * Sets the access
    *
    * @param bool $val The value of the access
    *
    * @return ExcludedApps
    */
    public function setAccess($val)
    {
        $this->_propDict["access"] = $val;
        return $this;
    }
    /**
    * Gets the excel
    *
    * @return bool The excel
    */
    public function getExcel()
    {
        if (array_key_exists("excel", $this->_propDict)) {
            return $this->_propDict["excel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excel
    *
    * @param bool $val The value of the excel
    *
    * @return ExcludedApps
    */
    public function setExcel($val)
    {
        $this->_propDict["excel"] = $val;
        return $this;
    }
    /**
    * Gets the groove
    *
    * @return bool The groove
    */
    public function getGroove()
    {
        if (array_key_exists("groove", $this->_propDict)) {
            return $this->_propDict["groove"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groove
    *
    * @param bool $val The value of the groove
    *
    * @return ExcludedApps
    */
    public function setGroove($val)
    {
        $this->_propDict["groove"] = $val;
        return $this;
    }
    /**
    * Gets the infoPath
    *
    * @return bool The infoPath
    */
    public function getInfoPath()
    {
        if (array_key_exists("infoPath", $this->_propDict)) {
            return $this->_propDict["infoPath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the infoPath
    *
    * @param bool $val The value of the infoPath
    *
    * @return ExcludedApps
    */
    public function setInfoPath($val)
    {
        $this->_propDict["infoPath"] = $val;
        return $this;
    }
    /**
    * Gets the lync
    *
    * @return bool The lync
    */
    public function getLync()
    {
        if (array_key_exists("lync", $this->_propDict)) {
            return $this->_propDict["lync"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lync
    *
    * @param bool $val The value of the lync
    *
    * @return ExcludedApps
    */
    public function setLync($val)
    {
        $this->_propDict["lync"] = $val;
        return $this;
    }
    /**
    * Gets the oneDrive
    *
    * @return bool The oneDrive
    */
    public function getOneDrive()
    {
        if (array_key_exists("oneDrive", $this->_propDict)) {
            return $this->_propDict["oneDrive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oneDrive
    *
    * @param bool $val The value of the oneDrive
    *
    * @return ExcludedApps
    */
    public function setOneDrive($val)
    {
        $this->_propDict["oneDrive"] = $val;
        return $this;
    }
    /**
    * Gets the oneNote
    *
    * @return bool The oneNote
    */
    public function getOneNote()
    {
        if (array_key_exists("oneNote", $this->_propDict)) {
            return $this->_propDict["oneNote"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oneNote
    *
    * @param bool $val The value of the oneNote
    *
    * @return ExcludedApps
    */
    public function setOneNote($val)
    {
        $this->_propDict["oneNote"] = $val;
        return $this;
    }
    /**
    * Gets the outlook
    *
    * @return bool The outlook
    */
    public function getOutlook()
    {
        if (array_key_exists("outlook", $this->_propDict)) {
            return $this->_propDict["outlook"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outlook
    *
    * @param bool $val The value of the outlook
    *
    * @return ExcludedApps
    */
    public function setOutlook($val)
    {
        $this->_propDict["outlook"] = $val;
        return $this;
    }
    /**
    * Gets the powerPoint
    *
    * @return bool The powerPoint
    */
    public function getPowerPoint()
    {
        if (array_key_exists("powerPoint", $this->_propDict)) {
            return $this->_propDict["powerPoint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the powerPoint
    *
    * @param bool $val The value of the powerPoint
    *
    * @return ExcludedApps
    */
    public function setPowerPoint($val)
    {
        $this->_propDict["powerPoint"] = $val;
        return $this;
    }
    /**
    * Gets the publisher
    *
    * @return bool The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    *
    * @param bool $val The value of the publisher
    *
    * @return ExcludedApps
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    /**
    * Gets the sharePointDesigner
    *
    * @return bool The sharePointDesigner
    */
    public function getSharePointDesigner()
    {
        if (array_key_exists("sharePointDesigner", $this->_propDict)) {
            return $this->_propDict["sharePointDesigner"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharePointDesigner
    *
    * @param bool $val The value of the sharePointDesigner
    *
    * @return ExcludedApps
    */
    public function setSharePointDesigner($val)
    {
        $this->_propDict["sharePointDesigner"] = $val;
        return $this;
    }
    /**
    * Gets the visio
    *
    * @return bool The visio
    */
    public function getVisio()
    {
        if (array_key_exists("visio", $this->_propDict)) {
            return $this->_propDict["visio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the visio
    *
    * @param bool $val The value of the visio
    *
    * @return ExcludedApps
    */
    public function setVisio($val)
    {
        $this->_propDict["visio"] = $val;
        return $this;
    }
    /**
    * Gets the word
    *
    * @return bool The word
    */
    public function getWord()
    {
        if (array_key_exists("word", $this->_propDict)) {
            return $this->_propDict["word"];
        } else {
            return null;
        }
    }

    /**
    * Sets the word
    *
    * @param bool $val The value of the word
    *
    * @return ExcludedApps
    */
    public function setWord($val)
    {
        $this->_propDict["word"] = $val;
        return $this;
    }
}
