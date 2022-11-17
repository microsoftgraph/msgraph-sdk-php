<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Audio implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new audio and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.audio');
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the album property value. The title of the album for this audio file.
     * @return string|null
    */
    public function getAlbum(): ?string {
        return $this->getBackingStore()->get('album');
    }

    /**
     * Gets the albumArtist property value. The artist named on the album for the audio file.
     * @return string|null
    */
    public function getAlbumArtist(): ?string {
        return $this->getBackingStore()->get('albumArtist');
    }

    /**
     * Gets the artist property value. The performing artist for the audio file.
     * @return string|null
    */
    public function getArtist(): ?string {
        return $this->getBackingStore()->get('artist');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bitrate property value. Bitrate expressed in kbps.
     * @return int|null
    */
    public function getBitrate(): ?int {
        return $this->getBackingStore()->get('bitrate');
    }

    /**
     * Gets the composers property value. The name of the composer of the audio file.
     * @return string|null
    */
    public function getComposers(): ?string {
        return $this->getBackingStore()->get('composers');
    }

    /**
     * Gets the copyright property value. Copyright information for the audio file.
     * @return string|null
    */
    public function getCopyright(): ?string {
        return $this->getBackingStore()->get('copyright');
    }

    /**
     * Gets the disc property value. The number of the disc this audio file came from.
     * @return int|null
    */
    public function getDisc(): ?int {
        return $this->getBackingStore()->get('disc');
    }

    /**
     * Gets the discCount property value. The total number of discs in this album.
     * @return int|null
    */
    public function getDiscCount(): ?int {
        return $this->getBackingStore()->get('discCount');
    }

    /**
     * Gets the duration property value. Duration of the audio file, expressed in milliseconds
     * @return int|null
    */
    public function getDuration(): ?int {
        return $this->getBackingStore()->get('duration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'album' => fn(ParseNode $n) => $o->setAlbum($n->getStringValue()),
            'albumArtist' => fn(ParseNode $n) => $o->setAlbumArtist($n->getStringValue()),
            'artist' => fn(ParseNode $n) => $o->setArtist($n->getStringValue()),
            'bitrate' => fn(ParseNode $n) => $o->setBitrate($n->getIntegerValue()),
            'composers' => fn(ParseNode $n) => $o->setComposers($n->getStringValue()),
            'copyright' => fn(ParseNode $n) => $o->setCopyright($n->getStringValue()),
            'disc' => fn(ParseNode $n) => $o->setDisc($n->getIntegerValue()),
            'discCount' => fn(ParseNode $n) => $o->setDiscCount($n->getIntegerValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getIntegerValue()),
            'genre' => fn(ParseNode $n) => $o->setGenre($n->getStringValue()),
            'hasDrm' => fn(ParseNode $n) => $o->setHasDrm($n->getBooleanValue()),
            'isVariableBitrate' => fn(ParseNode $n) => $o->setIsVariableBitrate($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'track' => fn(ParseNode $n) => $o->setTrack($n->getIntegerValue()),
            'trackCount' => fn(ParseNode $n) => $o->setTrackCount($n->getIntegerValue()),
            'year' => fn(ParseNode $n) => $o->setYear($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the genre property value. The genre of this audio file.
     * @return string|null
    */
    public function getGenre(): ?string {
        return $this->getBackingStore()->get('genre');
    }

    /**
     * Gets the hasDrm property value. Indicates if the file is protected with digital rights management.
     * @return bool|null
    */
    public function getHasDrm(): ?bool {
        return $this->getBackingStore()->get('hasDrm');
    }

    /**
     * Gets the isVariableBitrate property value. Indicates if the file is encoded with a variable bitrate.
     * @return bool|null
    */
    public function getIsVariableBitrate(): ?bool {
        return $this->getBackingStore()->get('isVariableBitrate');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the title property value. The title of the audio file.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Gets the track property value. The number of the track on the original disc for this audio file.
     * @return int|null
    */
    public function getTrack(): ?int {
        return $this->getBackingStore()->get('track');
    }

    /**
     * Gets the trackCount property value. The total number of tracks on the original disc for this audio file.
     * @return int|null
    */
    public function getTrackCount(): ?int {
        return $this->getBackingStore()->get('trackCount');
    }

    /**
     * Gets the year property value. The year the audio file was recorded.
     * @return int|null
    */
    public function getYear(): ?int {
        return $this->getBackingStore()->get('year');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('album', $this->getAlbum());
        $writer->writeStringValue('albumArtist', $this->getAlbumArtist());
        $writer->writeStringValue('artist', $this->getArtist());
        $writer->writeIntegerValue('bitrate', $this->getBitrate());
        $writer->writeStringValue('composers', $this->getComposers());
        $writer->writeStringValue('copyright', $this->getCopyright());
        $writer->writeIntegerValue('disc', $this->getDisc());
        $writer->writeIntegerValue('discCount', $this->getDiscCount());
        $writer->writeIntegerValue('duration', $this->getDuration());
        $writer->writeStringValue('genre', $this->getGenre());
        $writer->writeBooleanValue('hasDrm', $this->getHasDrm());
        $writer->writeBooleanValue('isVariableBitrate', $this->getIsVariableBitrate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeIntegerValue('track', $this->getTrack());
        $writer->writeIntegerValue('trackCount', $this->getTrackCount());
        $writer->writeIntegerValue('year', $this->getYear());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the album property value. The title of the album for this audio file.
     *  @param string|null $value Value to set for the album property.
    */
    public function setAlbum(?string $value): void {
        $this->getBackingStore()->set('album', $value);
    }

    /**
     * Sets the albumArtist property value. The artist named on the album for the audio file.
     *  @param string|null $value Value to set for the albumArtist property.
    */
    public function setAlbumArtist(?string $value): void {
        $this->getBackingStore()->set('albumArtist', $value);
    }

    /**
     * Sets the artist property value. The performing artist for the audio file.
     *  @param string|null $value Value to set for the artist property.
    */
    public function setArtist(?string $value): void {
        $this->getBackingStore()->set('artist', $value);
    }

    /**
     * Sets the bitrate property value. Bitrate expressed in kbps.
     *  @param int|null $value Value to set for the bitrate property.
    */
    public function setBitrate(?int $value): void {
        $this->getBackingStore()->set('bitrate', $value);
    }

    /**
     * Sets the composers property value. The name of the composer of the audio file.
     *  @param string|null $value Value to set for the composers property.
    */
    public function setComposers(?string $value): void {
        $this->getBackingStore()->set('composers', $value);
    }

    /**
     * Sets the copyright property value. Copyright information for the audio file.
     *  @param string|null $value Value to set for the copyright property.
    */
    public function setCopyright(?string $value): void {
        $this->getBackingStore()->set('copyright', $value);
    }

    /**
     * Sets the disc property value. The number of the disc this audio file came from.
     *  @param int|null $value Value to set for the disc property.
    */
    public function setDisc(?int $value): void {
        $this->getBackingStore()->set('disc', $value);
    }

    /**
     * Sets the discCount property value. The total number of discs in this album.
     *  @param int|null $value Value to set for the discCount property.
    */
    public function setDiscCount(?int $value): void {
        $this->getBackingStore()->set('discCount', $value);
    }

    /**
     * Sets the duration property value. Duration of the audio file, expressed in milliseconds
     *  @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the genre property value. The genre of this audio file.
     *  @param string|null $value Value to set for the genre property.
    */
    public function setGenre(?string $value): void {
        $this->getBackingStore()->set('genre', $value);
    }

    /**
     * Sets the hasDrm property value. Indicates if the file is protected with digital rights management.
     *  @param bool|null $value Value to set for the hasDrm property.
    */
    public function setHasDrm(?bool $value): void {
        $this->getBackingStore()->set('hasDrm', $value);
    }

    /**
     * Sets the isVariableBitrate property value. Indicates if the file is encoded with a variable bitrate.
     *  @param bool|null $value Value to set for the isVariableBitrate property.
    */
    public function setIsVariableBitrate(?bool $value): void {
        $this->getBackingStore()->set('isVariableBitrate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the title property value. The title of the audio file.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the track property value. The number of the track on the original disc for this audio file.
     *  @param int|null $value Value to set for the track property.
    */
    public function setTrack(?int $value): void {
        $this->getBackingStore()->set('track', $value);
    }

    /**
     * Sets the trackCount property value. The total number of tracks on the original disc for this audio file.
     *  @param int|null $value Value to set for the trackCount property.
    */
    public function setTrackCount(?int $value): void {
        $this->getBackingStore()->set('trackCount', $value);
    }

    /**
     * Sets the year property value. The year the audio file was recorded.
     *  @param int|null $value Value to set for the year property.
    */
    public function setYear(?int $value): void {
        $this->getBackingStore()->set('year', $value);
    }

}
