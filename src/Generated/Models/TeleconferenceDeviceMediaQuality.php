<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeleconferenceDeviceMediaQuality implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateInterval|null $averageInboundJitter The average inbound stream network jitter. */
    private ?DateInterval $averageInboundJitter = null;
    
    /** @var float|null $averageInboundPacketLossRateInPercentage The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%. */
    private ?float $averageInboundPacketLossRateInPercentage = null;
    
    /** @var DateInterval|null $averageInboundRoundTripDelay The average inbound stream network round trip delay. */
    private ?DateInterval $averageInboundRoundTripDelay = null;
    
    /** @var DateInterval|null $averageOutboundJitter The average outbound stream network jitter. */
    private ?DateInterval $averageOutboundJitter = null;
    
    /** @var float|null $averageOutboundPacketLossRateInPercentage The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%. */
    private ?float $averageOutboundPacketLossRateInPercentage = null;
    
    /** @var DateInterval|null $averageOutboundRoundTripDelay The average outbound stream network round trip delay. */
    private ?DateInterval $averageOutboundRoundTripDelay = null;
    
    /** @var int|null $channelIndex The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3. */
    private ?int $channelIndex = null;
    
    /** @var int|null $inboundPackets The total number of the inbound packets. */
    private ?int $inboundPackets = null;
    
    /** @var string|null $localIPAddress the local IP address for the media session. */
    private ?string $localIPAddress = null;
    
    /** @var int|null $localPort The local media port. */
    private ?int $localPort = null;
    
    /** @var DateInterval|null $maximumInboundJitter The maximum inbound stream network jitter. */
    private ?DateInterval $maximumInboundJitter = null;
    
    /** @var float|null $maximumInboundPacketLossRateInPercentage The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%. */
    private ?float $maximumInboundPacketLossRateInPercentage = null;
    
    /** @var DateInterval|null $maximumInboundRoundTripDelay The maximum inbound stream network round trip delay. */
    private ?DateInterval $maximumInboundRoundTripDelay = null;
    
    /** @var DateInterval|null $maximumOutboundJitter The maximum outbound stream network jitter. */
    private ?DateInterval $maximumOutboundJitter = null;
    
    /** @var float|null $maximumOutboundPacketLossRateInPercentage The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%. */
    private ?float $maximumOutboundPacketLossRateInPercentage = null;
    
    /** @var DateInterval|null $maximumOutboundRoundTripDelay The maximum outbound stream network round trip delay. */
    private ?DateInterval $maximumOutboundRoundTripDelay = null;
    
    /** @var DateInterval|null $mediaDuration The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations. */
    private ?DateInterval $mediaDuration = null;
    
    /** @var int|null $networkLinkSpeedInBytes The network link speed in bytes */
    private ?int $networkLinkSpeedInBytes = null;
    
    /** @var int|null $outboundPackets The total number of the outbound packets. */
    private ?int $outboundPackets = null;
    
    /** @var string|null $remoteIPAddress The remote IP address for the media session. */
    private ?string $remoteIPAddress = null;
    
    /** @var int|null $remotePort The remote media port. */
    private ?int $remotePort = null;
    
    /**
     * Instantiates a new teleconferenceDeviceMediaQuality and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeleconferenceDeviceMediaQuality
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeleconferenceDeviceMediaQuality {
        return new TeleconferenceDeviceMediaQuality();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the averageInboundJitter property value. The average inbound stream network jitter.
     * @return DateInterval|null
    */
    public function getAverageInboundJitter(): ?DateInterval {
        return $this->averageInboundJitter;
    }

    /**
     * Gets the averageInboundPacketLossRateInPercentage property value. The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @return float|null
    */
    public function getAverageInboundPacketLossRateInPercentage(): ?float {
        return $this->averageInboundPacketLossRateInPercentage;
    }

    /**
     * Gets the averageInboundRoundTripDelay property value. The average inbound stream network round trip delay.
     * @return DateInterval|null
    */
    public function getAverageInboundRoundTripDelay(): ?DateInterval {
        return $this->averageInboundRoundTripDelay;
    }

    /**
     * Gets the averageOutboundJitter property value. The average outbound stream network jitter.
     * @return DateInterval|null
    */
    public function getAverageOutboundJitter(): ?DateInterval {
        return $this->averageOutboundJitter;
    }

    /**
     * Gets the averageOutboundPacketLossRateInPercentage property value. The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @return float|null
    */
    public function getAverageOutboundPacketLossRateInPercentage(): ?float {
        return $this->averageOutboundPacketLossRateInPercentage;
    }

    /**
     * Gets the averageOutboundRoundTripDelay property value. The average outbound stream network round trip delay.
     * @return DateInterval|null
    */
    public function getAverageOutboundRoundTripDelay(): ?DateInterval {
        return $this->averageOutboundRoundTripDelay;
    }

    /**
     * Gets the channelIndex property value. The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3.
     * @return int|null
    */
    public function getChannelIndex(): ?int {
        return $this->channelIndex;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'averageInboundJitter' => function (self $o, ParseNode $n) { $o->setAverageInboundJitter($n->getDateIntervalValue()); },
            'averageInboundPacketLossRateInPercentage' => function (self $o, ParseNode $n) { $o->setAverageInboundPacketLossRateInPercentage($n->getFloatValue()); },
            'averageInboundRoundTripDelay' => function (self $o, ParseNode $n) { $o->setAverageInboundRoundTripDelay($n->getDateIntervalValue()); },
            'averageOutboundJitter' => function (self $o, ParseNode $n) { $o->setAverageOutboundJitter($n->getDateIntervalValue()); },
            'averageOutboundPacketLossRateInPercentage' => function (self $o, ParseNode $n) { $o->setAverageOutboundPacketLossRateInPercentage($n->getFloatValue()); },
            'averageOutboundRoundTripDelay' => function (self $o, ParseNode $n) { $o->setAverageOutboundRoundTripDelay($n->getDateIntervalValue()); },
            'channelIndex' => function (self $o, ParseNode $n) { $o->setChannelIndex($n->getIntegerValue()); },
            'inboundPackets' => function (self $o, ParseNode $n) { $o->setInboundPackets($n->getIntegerValue()); },
            'localIPAddress' => function (self $o, ParseNode $n) { $o->setLocalIPAddress($n->getStringValue()); },
            'localPort' => function (self $o, ParseNode $n) { $o->setLocalPort($n->getIntegerValue()); },
            'maximumInboundJitter' => function (self $o, ParseNode $n) { $o->setMaximumInboundJitter($n->getDateIntervalValue()); },
            'maximumInboundPacketLossRateInPercentage' => function (self $o, ParseNode $n) { $o->setMaximumInboundPacketLossRateInPercentage($n->getFloatValue()); },
            'maximumInboundRoundTripDelay' => function (self $o, ParseNode $n) { $o->setMaximumInboundRoundTripDelay($n->getDateIntervalValue()); },
            'maximumOutboundJitter' => function (self $o, ParseNode $n) { $o->setMaximumOutboundJitter($n->getDateIntervalValue()); },
            'maximumOutboundPacketLossRateInPercentage' => function (self $o, ParseNode $n) { $o->setMaximumOutboundPacketLossRateInPercentage($n->getFloatValue()); },
            'maximumOutboundRoundTripDelay' => function (self $o, ParseNode $n) { $o->setMaximumOutboundRoundTripDelay($n->getDateIntervalValue()); },
            'mediaDuration' => function (self $o, ParseNode $n) { $o->setMediaDuration($n->getDateIntervalValue()); },
            'networkLinkSpeedInBytes' => function (self $o, ParseNode $n) { $o->setNetworkLinkSpeedInBytes($n->getIntegerValue()); },
            'outboundPackets' => function (self $o, ParseNode $n) { $o->setOutboundPackets($n->getIntegerValue()); },
            'remoteIPAddress' => function (self $o, ParseNode $n) { $o->setRemoteIPAddress($n->getStringValue()); },
            'remotePort' => function (self $o, ParseNode $n) { $o->setRemotePort($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the inboundPackets property value. The total number of the inbound packets.
     * @return int|null
    */
    public function getInboundPackets(): ?int {
        return $this->inboundPackets;
    }

    /**
     * Gets the localIPAddress property value. the local IP address for the media session.
     * @return string|null
    */
    public function getLocalIPAddress(): ?string {
        return $this->localIPAddress;
    }

    /**
     * Gets the localPort property value. The local media port.
     * @return int|null
    */
    public function getLocalPort(): ?int {
        return $this->localPort;
    }

    /**
     * Gets the maximumInboundJitter property value. The maximum inbound stream network jitter.
     * @return DateInterval|null
    */
    public function getMaximumInboundJitter(): ?DateInterval {
        return $this->maximumInboundJitter;
    }

    /**
     * Gets the maximumInboundPacketLossRateInPercentage property value. The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @return float|null
    */
    public function getMaximumInboundPacketLossRateInPercentage(): ?float {
        return $this->maximumInboundPacketLossRateInPercentage;
    }

    /**
     * Gets the maximumInboundRoundTripDelay property value. The maximum inbound stream network round trip delay.
     * @return DateInterval|null
    */
    public function getMaximumInboundRoundTripDelay(): ?DateInterval {
        return $this->maximumInboundRoundTripDelay;
    }

    /**
     * Gets the maximumOutboundJitter property value. The maximum outbound stream network jitter.
     * @return DateInterval|null
    */
    public function getMaximumOutboundJitter(): ?DateInterval {
        return $this->maximumOutboundJitter;
    }

    /**
     * Gets the maximumOutboundPacketLossRateInPercentage property value. The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @return float|null
    */
    public function getMaximumOutboundPacketLossRateInPercentage(): ?float {
        return $this->maximumOutboundPacketLossRateInPercentage;
    }

    /**
     * Gets the maximumOutboundRoundTripDelay property value. The maximum outbound stream network round trip delay.
     * @return DateInterval|null
    */
    public function getMaximumOutboundRoundTripDelay(): ?DateInterval {
        return $this->maximumOutboundRoundTripDelay;
    }

    /**
     * Gets the mediaDuration property value. The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations.
     * @return DateInterval|null
    */
    public function getMediaDuration(): ?DateInterval {
        return $this->mediaDuration;
    }

    /**
     * Gets the networkLinkSpeedInBytes property value. The network link speed in bytes
     * @return int|null
    */
    public function getNetworkLinkSpeedInBytes(): ?int {
        return $this->networkLinkSpeedInBytes;
    }

    /**
     * Gets the outboundPackets property value. The total number of the outbound packets.
     * @return int|null
    */
    public function getOutboundPackets(): ?int {
        return $this->outboundPackets;
    }

    /**
     * Gets the remoteIPAddress property value. The remote IP address for the media session.
     * @return string|null
    */
    public function getRemoteIPAddress(): ?string {
        return $this->remoteIPAddress;
    }

    /**
     * Gets the remotePort property value. The remote media port.
     * @return int|null
    */
    public function getRemotePort(): ?int {
        return $this->remotePort;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('averageInboundJitter', $this->averageInboundJitter);
        $writer->writeFloatValue('averageInboundPacketLossRateInPercentage', $this->averageInboundPacketLossRateInPercentage);
        $writer->writeDateIntervalValue('averageInboundRoundTripDelay', $this->averageInboundRoundTripDelay);
        $writer->writeDateIntervalValue('averageOutboundJitter', $this->averageOutboundJitter);
        $writer->writeFloatValue('averageOutboundPacketLossRateInPercentage', $this->averageOutboundPacketLossRateInPercentage);
        $writer->writeDateIntervalValue('averageOutboundRoundTripDelay', $this->averageOutboundRoundTripDelay);
        $writer->writeIntegerValue('channelIndex', $this->channelIndex);
        $writer->writeIntegerValue('inboundPackets', $this->inboundPackets);
        $writer->writeStringValue('localIPAddress', $this->localIPAddress);
        $writer->writeIntegerValue('localPort', $this->localPort);
        $writer->writeDateIntervalValue('maximumInboundJitter', $this->maximumInboundJitter);
        $writer->writeFloatValue('maximumInboundPacketLossRateInPercentage', $this->maximumInboundPacketLossRateInPercentage);
        $writer->writeDateIntervalValue('maximumInboundRoundTripDelay', $this->maximumInboundRoundTripDelay);
        $writer->writeDateIntervalValue('maximumOutboundJitter', $this->maximumOutboundJitter);
        $writer->writeFloatValue('maximumOutboundPacketLossRateInPercentage', $this->maximumOutboundPacketLossRateInPercentage);
        $writer->writeDateIntervalValue('maximumOutboundRoundTripDelay', $this->maximumOutboundRoundTripDelay);
        $writer->writeDateIntervalValue('mediaDuration', $this->mediaDuration);
        $writer->writeIntegerValue('networkLinkSpeedInBytes', $this->networkLinkSpeedInBytes);
        $writer->writeIntegerValue('outboundPackets', $this->outboundPackets);
        $writer->writeStringValue('remoteIPAddress', $this->remoteIPAddress);
        $writer->writeIntegerValue('remotePort', $this->remotePort);
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
     * Sets the averageInboundJitter property value. The average inbound stream network jitter.
     *  @param DateInterval|null $value Value to set for the averageInboundJitter property.
    */
    public function setAverageInboundJitter(?DateInterval $value ): void {
        $this->averageInboundJitter = $value;
    }

    /**
     * Sets the averageInboundPacketLossRateInPercentage property value. The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     *  @param float|null $value Value to set for the averageInboundPacketLossRateInPercentage property.
    */
    public function setAverageInboundPacketLossRateInPercentage(?float $value ): void {
        $this->averageInboundPacketLossRateInPercentage = $value;
    }

    /**
     * Sets the averageInboundRoundTripDelay property value. The average inbound stream network round trip delay.
     *  @param DateInterval|null $value Value to set for the averageInboundRoundTripDelay property.
    */
    public function setAverageInboundRoundTripDelay(?DateInterval $value ): void {
        $this->averageInboundRoundTripDelay = $value;
    }

    /**
     * Sets the averageOutboundJitter property value. The average outbound stream network jitter.
     *  @param DateInterval|null $value Value to set for the averageOutboundJitter property.
    */
    public function setAverageOutboundJitter(?DateInterval $value ): void {
        $this->averageOutboundJitter = $value;
    }

    /**
     * Sets the averageOutboundPacketLossRateInPercentage property value. The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     *  @param float|null $value Value to set for the averageOutboundPacketLossRateInPercentage property.
    */
    public function setAverageOutboundPacketLossRateInPercentage(?float $value ): void {
        $this->averageOutboundPacketLossRateInPercentage = $value;
    }

    /**
     * Sets the averageOutboundRoundTripDelay property value. The average outbound stream network round trip delay.
     *  @param DateInterval|null $value Value to set for the averageOutboundRoundTripDelay property.
    */
    public function setAverageOutboundRoundTripDelay(?DateInterval $value ): void {
        $this->averageOutboundRoundTripDelay = $value;
    }

    /**
     * Sets the channelIndex property value. The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3.
     *  @param int|null $value Value to set for the channelIndex property.
    */
    public function setChannelIndex(?int $value ): void {
        $this->channelIndex = $value;
    }

    /**
     * Sets the inboundPackets property value. The total number of the inbound packets.
     *  @param int|null $value Value to set for the inboundPackets property.
    */
    public function setInboundPackets(?int $value ): void {
        $this->inboundPackets = $value;
    }

    /**
     * Sets the localIPAddress property value. the local IP address for the media session.
     *  @param string|null $value Value to set for the localIPAddress property.
    */
    public function setLocalIPAddress(?string $value ): void {
        $this->localIPAddress = $value;
    }

    /**
     * Sets the localPort property value. The local media port.
     *  @param int|null $value Value to set for the localPort property.
    */
    public function setLocalPort(?int $value ): void {
        $this->localPort = $value;
    }

    /**
     * Sets the maximumInboundJitter property value. The maximum inbound stream network jitter.
     *  @param DateInterval|null $value Value to set for the maximumInboundJitter property.
    */
    public function setMaximumInboundJitter(?DateInterval $value ): void {
        $this->maximumInboundJitter = $value;
    }

    /**
     * Sets the maximumInboundPacketLossRateInPercentage property value. The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     *  @param float|null $value Value to set for the maximumInboundPacketLossRateInPercentage property.
    */
    public function setMaximumInboundPacketLossRateInPercentage(?float $value ): void {
        $this->maximumInboundPacketLossRateInPercentage = $value;
    }

    /**
     * Sets the maximumInboundRoundTripDelay property value. The maximum inbound stream network round trip delay.
     *  @param DateInterval|null $value Value to set for the maximumInboundRoundTripDelay property.
    */
    public function setMaximumInboundRoundTripDelay(?DateInterval $value ): void {
        $this->maximumInboundRoundTripDelay = $value;
    }

    /**
     * Sets the maximumOutboundJitter property value. The maximum outbound stream network jitter.
     *  @param DateInterval|null $value Value to set for the maximumOutboundJitter property.
    */
    public function setMaximumOutboundJitter(?DateInterval $value ): void {
        $this->maximumOutboundJitter = $value;
    }

    /**
     * Sets the maximumOutboundPacketLossRateInPercentage property value. The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     *  @param float|null $value Value to set for the maximumOutboundPacketLossRateInPercentage property.
    */
    public function setMaximumOutboundPacketLossRateInPercentage(?float $value ): void {
        $this->maximumOutboundPacketLossRateInPercentage = $value;
    }

    /**
     * Sets the maximumOutboundRoundTripDelay property value. The maximum outbound stream network round trip delay.
     *  @param DateInterval|null $value Value to set for the maximumOutboundRoundTripDelay property.
    */
    public function setMaximumOutboundRoundTripDelay(?DateInterval $value ): void {
        $this->maximumOutboundRoundTripDelay = $value;
    }

    /**
     * Sets the mediaDuration property value. The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations.
     *  @param DateInterval|null $value Value to set for the mediaDuration property.
    */
    public function setMediaDuration(?DateInterval $value ): void {
        $this->mediaDuration = $value;
    }

    /**
     * Sets the networkLinkSpeedInBytes property value. The network link speed in bytes
     *  @param int|null $value Value to set for the networkLinkSpeedInBytes property.
    */
    public function setNetworkLinkSpeedInBytes(?int $value ): void {
        $this->networkLinkSpeedInBytes = $value;
    }

    /**
     * Sets the outboundPackets property value. The total number of the outbound packets.
     *  @param int|null $value Value to set for the outboundPackets property.
    */
    public function setOutboundPackets(?int $value ): void {
        $this->outboundPackets = $value;
    }

    /**
     * Sets the remoteIPAddress property value. The remote IP address for the media session.
     *  @param string|null $value Value to set for the remoteIPAddress property.
    */
    public function setRemoteIPAddress(?string $value ): void {
        $this->remoteIPAddress = $value;
    }

    /**
     * Sets the remotePort property value. The remote media port.
     *  @param int|null $value Value to set for the remotePort property.
    */
    public function setRemotePort(?int $value ): void {
        $this->remotePort = $value;
    }

}
