<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Audio File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* Audio class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Audio extends Entity
{
    /**
    * Gets the album
    *
    * @return string The album
    */
    public function getAlbum()
    {
        if (array_key_exists("album", $this->_propDict)) {
            return $this->_propDict["album"];
        } else {
            return null;
        }
    }

    /**
    * Sets the album
    *
    * @param string $val The value of the album
    *
    * @return Audio
    */
    public function setAlbum($val)
    {
        $this->_propDict["album"] = $val;
        return $this;
    }
    /**
    * Gets the albumArtist
    *
    * @return string The albumArtist
    */
    public function getAlbumArtist()
    {
        if (array_key_exists("albumArtist", $this->_propDict)) {
            return $this->_propDict["albumArtist"];
        } else {
            return null;
        }
    }

    /**
    * Sets the albumArtist
    *
    * @param string $val The value of the albumArtist
    *
    * @return Audio
    */
    public function setAlbumArtist($val)
    {
        $this->_propDict["albumArtist"] = $val;
        return $this;
    }
    /**
    * Gets the artist
    *
    * @return string The artist
    */
    public function getArtist()
    {
        if (array_key_exists("artist", $this->_propDict)) {
            return $this->_propDict["artist"];
        } else {
            return null;
        }
    }

    /**
    * Sets the artist
    *
    * @param string $val The value of the artist
    *
    * @return Audio
    */
    public function setArtist($val)
    {
        $this->_propDict["artist"] = $val;
        return $this;
    }
    /**
    * Gets the bitrate
    *
    * @return int The bitrate
    */
    public function getBitrate()
    {
        if (array_key_exists("bitrate", $this->_propDict)) {
            return $this->_propDict["bitrate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bitrate
    *
    * @param int $val The value of the bitrate
    *
    * @return Audio
    */
    public function setBitrate($val)
    {
        $this->_propDict["bitrate"] = $val;
        return $this;
    }
    /**
    * Gets the composers
    *
    * @return string The composers
    */
    public function getComposers()
    {
        if (array_key_exists("composers", $this->_propDict)) {
            return $this->_propDict["composers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the composers
    *
    * @param string $val The value of the composers
    *
    * @return Audio
    */
    public function setComposers($val)
    {
        $this->_propDict["composers"] = $val;
        return $this;
    }
    /**
    * Gets the copyright
    *
    * @return string The copyright
    */
    public function getCopyright()
    {
        if (array_key_exists("copyright", $this->_propDict)) {
            return $this->_propDict["copyright"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copyright
    *
    * @param string $val The value of the copyright
    *
    * @return Audio
    */
    public function setCopyright($val)
    {
        $this->_propDict["copyright"] = $val;
        return $this;
    }
    /**
    * Gets the disc
    *
    * @return int The disc
    */
    public function getDisc()
    {
        if (array_key_exists("disc", $this->_propDict)) {
            return $this->_propDict["disc"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disc
    *
    * @param int $val The value of the disc
    *
    * @return Audio
    */
    public function setDisc($val)
    {
        $this->_propDict["disc"] = $val;
        return $this;
    }
    /**
    * Gets the discCount
    *
    * @return int The discCount
    */
    public function getDiscCount()
    {
        if (array_key_exists("discCount", $this->_propDict)) {
            return $this->_propDict["discCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the discCount
    *
    * @param int $val The value of the discCount
    *
    * @return Audio
    */
    public function setDiscCount($val)
    {
        $this->_propDict["discCount"] = $val;
        return $this;
    }
    /**
    * Gets the duration
    *
    * @return int The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            return $this->_propDict["duration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duration
    *
    * @param int $val The value of the duration
    *
    * @return Audio
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }
    /**
    * Gets the genre
    *
    * @return string The genre
    */
    public function getGenre()
    {
        if (array_key_exists("genre", $this->_propDict)) {
            return $this->_propDict["genre"];
        } else {
            return null;
        }
    }

    /**
    * Sets the genre
    *
    * @param string $val The value of the genre
    *
    * @return Audio
    */
    public function setGenre($val)
    {
        $this->_propDict["genre"] = $val;
        return $this;
    }
    /**
    * Gets the hasDrm
    *
    * @return bool The hasDrm
    */
    public function getHasDrm()
    {
        if (array_key_exists("hasDrm", $this->_propDict)) {
            return $this->_propDict["hasDrm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasDrm
    *
    * @param bool $val The value of the hasDrm
    *
    * @return Audio
    */
    public function setHasDrm($val)
    {
        $this->_propDict["hasDrm"] = $val;
        return $this;
    }
    /**
    * Gets the isVariableBitrate
    *
    * @return bool The isVariableBitrate
    */
    public function getIsVariableBitrate()
    {
        if (array_key_exists("isVariableBitrate", $this->_propDict)) {
            return $this->_propDict["isVariableBitrate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isVariableBitrate
    *
    * @param bool $val The value of the isVariableBitrate
    *
    * @return Audio
    */
    public function setIsVariableBitrate($val)
    {
        $this->_propDict["isVariableBitrate"] = $val;
        return $this;
    }
    /**
    * Gets the title
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    *
    * @param string $val The value of the title
    *
    * @return Audio
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    /**
    * Gets the track
    *
    * @return int The track
    */
    public function getTrack()
    {
        if (array_key_exists("track", $this->_propDict)) {
            return $this->_propDict["track"];
        } else {
            return null;
        }
    }

    /**
    * Sets the track
    *
    * @param int $val The value of the track
    *
    * @return Audio
    */
    public function setTrack($val)
    {
        $this->_propDict["track"] = $val;
        return $this;
    }
    /**
    * Gets the trackCount
    *
    * @return int The trackCount
    */
    public function getTrackCount()
    {
        if (array_key_exists("trackCount", $this->_propDict)) {
            return $this->_propDict["trackCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trackCount
    *
    * @param int $val The value of the trackCount
    *
    * @return Audio
    */
    public function setTrackCount($val)
    {
        $this->_propDict["trackCount"] = $val;
        return $this;
    }
    /**
    * Gets the year
    *
    * @return int The year
    */
    public function getYear()
    {
        if (array_key_exists("year", $this->_propDict)) {
            return $this->_propDict["year"];
        } else {
            return null;
        }
    }

    /**
    * Sets the year
    *
    * @param int $val The value of the year
    *
    * @return Audio
    */
    public function setYear($val)
    {
        $this->_propDict["year"] = $val;
        return $this;
    }
}
