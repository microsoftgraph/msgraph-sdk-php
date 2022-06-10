<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Audio implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $album The title of the album for this audio file.
    */
    private ?string $album = null;
    
    /**
     * @var string|null $albumArtist The artist named on the album for the audio file.
    */
    private ?string $albumArtist = null;
    
    /**
     * @var string|null $artist The performing artist for the audio file.
    */
    private ?string $artist = null;
    
    /**
     * @var int|null $bitrate Bitrate expressed in kbps.
    */
    private ?int $bitrate = null;
    
    /**
     * @var string|null $composers The name of the composer of the audio file.
    */
    private ?string $composers = null;
    
    /**
     * @var string|null $copyright Copyright information for the audio file.
    */
    private ?string $copyright = null;
    
    /**
     * @var int|null $disc The number of the disc this audio file came from.
    */
    private ?int $disc = null;
    
    /**
     * @var int|null $discCount The total number of discs in this album.
    */
    private ?int $discCount = null;
    
    /**
     * @var int|null $duration Duration of the audio file, expressed in milliseconds
    */
    private ?int $duration = null;
    
    /**
     * @var string|null $genre The genre of this audio file.
    */
    private ?string $genre = null;
    
    /**
     * @var bool|null $hasDrm Indicates if the file is protected with digital rights management.
    */
    private ?bool $hasDrm = null;
    
    /**
     * @var bool|null $isVariableBitrate Indicates if the file is encoded with a variable bitrate.
    */
    private ?bool $isVariableBitrate = null;
    
    /**
     * @var string|null $title The title of the audio file.
    */
    private ?string $title = null;
    
    /**
     * @var int|null $track The number of the track on the original disc for this audio file.
    */
    private ?int $track = null;
    
    /**
     * @var int|null $trackCount The total number of tracks on the original disc for this audio file.
    */
    private ?int $trackCount = null;
    
    /**
     * @var int|null $year The year the audio file was recorded.
    */
    private ?int $year = null;
    
    /**
     * Instantiates a new audio and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Audio
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Audio {
        return new Audio();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the album property value. The title of the album for this audio file.
     * @return string|null
    */
    public function getAlbum(): ?string {
        return $this->album;
    }

    /**
     * Gets the albumArtist property value. The artist named on the album for the audio file.
     * @return string|null
    */
    public function getAlbumArtist(): ?string {
        return $this->albumArtist;
    }

    /**
     * Gets the artist property value. The performing artist for the audio file.
     * @return string|null
    */
    public function getArtist(): ?string {
        return $this->artist;
    }

    /**
     * Gets the bitrate property value. Bitrate expressed in kbps.
     * @return int|null
    */
    public function getBitrate(): ?int {
        return $this->bitrate;
    }

    /**
     * Gets the composers property value. The name of the composer of the audio file.
     * @return string|null
    */
    public function getComposers(): ?string {
        return $this->composers;
    }

    /**
     * Gets the copyright property value. Copyright information for the audio file.
     * @return string|null
    */
    public function getCopyright(): ?string {
        return $this->copyright;
    }

    /**
     * Gets the disc property value. The number of the disc this audio file came from.
     * @return int|null
    */
    public function getDisc(): ?int {
        return $this->disc;
    }

    /**
     * Gets the discCount property value. The total number of discs in this album.
     * @return int|null
    */
    public function getDiscCount(): ?int {
        return $this->discCount;
    }

    /**
     * Gets the duration property value. Duration of the audio file, expressed in milliseconds
     * @return int|null
    */
    public function getDuration(): ?int {
        return $this->duration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'album' => function (ParseNode $n) use ($o) { $o->setAlbum($n->getStringValue()); },
            'albumArtist' => function (ParseNode $n) use ($o) { $o->setAlbumArtist($n->getStringValue()); },
            'artist' => function (ParseNode $n) use ($o) { $o->setArtist($n->getStringValue()); },
            'bitrate' => function (ParseNode $n) use ($o) { $o->setBitrate($n->getIntegerValue()); },
            'composers' => function (ParseNode $n) use ($o) { $o->setComposers($n->getStringValue()); },
            'copyright' => function (ParseNode $n) use ($o) { $o->setCopyright($n->getStringValue()); },
            'disc' => function (ParseNode $n) use ($o) { $o->setDisc($n->getIntegerValue()); },
            'discCount' => function (ParseNode $n) use ($o) { $o->setDiscCount($n->getIntegerValue()); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getIntegerValue()); },
            'genre' => function (ParseNode $n) use ($o) { $o->setGenre($n->getStringValue()); },
            'hasDrm' => function (ParseNode $n) use ($o) { $o->setHasDrm($n->getBooleanValue()); },
            'isVariableBitrate' => function (ParseNode $n) use ($o) { $o->setIsVariableBitrate($n->getBooleanValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
            'track' => function (ParseNode $n) use ($o) { $o->setTrack($n->getIntegerValue()); },
            'trackCount' => function (ParseNode $n) use ($o) { $o->setTrackCount($n->getIntegerValue()); },
            'year' => function (ParseNode $n) use ($o) { $o->setYear($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the genre property value. The genre of this audio file.
     * @return string|null
    */
    public function getGenre(): ?string {
        return $this->genre;
    }

    /**
     * Gets the hasDrm property value. Indicates if the file is protected with digital rights management.
     * @return bool|null
    */
    public function getHasDrm(): ?bool {
        return $this->hasDrm;
    }

    /**
     * Gets the isVariableBitrate property value. Indicates if the file is encoded with a variable bitrate.
     * @return bool|null
    */
    public function getIsVariableBitrate(): ?bool {
        return $this->isVariableBitrate;
    }

    /**
     * Gets the title property value. The title of the audio file.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the track property value. The number of the track on the original disc for this audio file.
     * @return int|null
    */
    public function getTrack(): ?int {
        return $this->track;
    }

    /**
     * Gets the trackCount property value. The total number of tracks on the original disc for this audio file.
     * @return int|null
    */
    public function getTrackCount(): ?int {
        return $this->trackCount;
    }

    /**
     * Gets the year property value. The year the audio file was recorded.
     * @return int|null
    */
    public function getYear(): ?int {
        return $this->year;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('album', $this->album);
        $writer->writeStringValue('albumArtist', $this->albumArtist);
        $writer->writeStringValue('artist', $this->artist);
        $writer->writeIntegerValue('bitrate', $this->bitrate);
        $writer->writeStringValue('composers', $this->composers);
        $writer->writeStringValue('copyright', $this->copyright);
        $writer->writeIntegerValue('disc', $this->disc);
        $writer->writeIntegerValue('discCount', $this->discCount);
        $writer->writeIntegerValue('duration', $this->duration);
        $writer->writeStringValue('genre', $this->genre);
        $writer->writeBooleanValue('hasDrm', $this->hasDrm);
        $writer->writeBooleanValue('isVariableBitrate', $this->isVariableBitrate);
        $writer->writeStringValue('title', $this->title);
        $writer->writeIntegerValue('track', $this->track);
        $writer->writeIntegerValue('trackCount', $this->trackCount);
        $writer->writeIntegerValue('year', $this->year);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the album property value. The title of the album for this audio file.
     *  @param string|null $value Value to set for the album property.
    */
    public function setAlbum(?string $value ): void {
        $this->album = $value;
    }

    /**
     * Sets the albumArtist property value. The artist named on the album for the audio file.
     *  @param string|null $value Value to set for the albumArtist property.
    */
    public function setAlbumArtist(?string $value ): void {
        $this->albumArtist = $value;
    }

    /**
     * Sets the artist property value. The performing artist for the audio file.
     *  @param string|null $value Value to set for the artist property.
    */
    public function setArtist(?string $value ): void {
        $this->artist = $value;
    }

    /**
     * Sets the bitrate property value. Bitrate expressed in kbps.
     *  @param int|null $value Value to set for the bitrate property.
    */
    public function setBitrate(?int $value ): void {
        $this->bitrate = $value;
    }

    /**
     * Sets the composers property value. The name of the composer of the audio file.
     *  @param string|null $value Value to set for the composers property.
    */
    public function setComposers(?string $value ): void {
        $this->composers = $value;
    }

    /**
     * Sets the copyright property value. Copyright information for the audio file.
     *  @param string|null $value Value to set for the copyright property.
    */
    public function setCopyright(?string $value ): void {
        $this->copyright = $value;
    }

    /**
     * Sets the disc property value. The number of the disc this audio file came from.
     *  @param int|null $value Value to set for the disc property.
    */
    public function setDisc(?int $value ): void {
        $this->disc = $value;
    }

    /**
     * Sets the discCount property value. The total number of discs in this album.
     *  @param int|null $value Value to set for the discCount property.
    */
    public function setDiscCount(?int $value ): void {
        $this->discCount = $value;
    }

    /**
     * Sets the duration property value. Duration of the audio file, expressed in milliseconds
     *  @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the genre property value. The genre of this audio file.
     *  @param string|null $value Value to set for the genre property.
    */
    public function setGenre(?string $value ): void {
        $this->genre = $value;
    }

    /**
     * Sets the hasDrm property value. Indicates if the file is protected with digital rights management.
     *  @param bool|null $value Value to set for the hasDrm property.
    */
    public function setHasDrm(?bool $value ): void {
        $this->hasDrm = $value;
    }

    /**
     * Sets the isVariableBitrate property value. Indicates if the file is encoded with a variable bitrate.
     *  @param bool|null $value Value to set for the isVariableBitrate property.
    */
    public function setIsVariableBitrate(?bool $value ): void {
        $this->isVariableBitrate = $value;
    }

    /**
     * Sets the title property value. The title of the audio file.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the track property value. The number of the track on the original disc for this audio file.
     *  @param int|null $value Value to set for the track property.
    */
    public function setTrack(?int $value ): void {
        $this->track = $value;
    }

    /**
     * Sets the trackCount property value. The total number of tracks on the original disc for this audio file.
     *  @param int|null $value Value to set for the trackCount property.
    */
    public function setTrackCount(?int $value ): void {
        $this->trackCount = $value;
    }

    /**
     * Sets the year property value. The year the audio file was recorded.
     *  @param int|null $value Value to set for the year property.
    */
    public function setYear(?int $value ): void {
        $this->year = $value;
    }

}
