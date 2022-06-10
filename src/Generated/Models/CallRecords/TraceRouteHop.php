<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TraceRouteHop implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $hopCount The network path count of this hop that was used to compute the RTT.
    */
    private ?int $hopCount = null;
    
    /**
     * @var string|null $ipAddress IP address used for this hop in the network trace.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var DateInterval|null $roundTripTime The time from when the trace route packet was sent from the client to this hop and back to the client, denoted in [ISO 8601][] format. For example, 1 second is denoted as PT1S, where P is the duration designator, T is the time designator, and S is the second designator.
    */
    private ?DateInterval $roundTripTime = null;
    
    /**
     * Instantiates a new traceRouteHop and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TraceRouteHop
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TraceRouteHop {
        return new TraceRouteHop();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hopCount' => function (ParseNode $n) use ($o) { $o->setHopCount($n->getIntegerValue()); },
            'ipAddress' => function (ParseNode $n) use ($o) { $o->setIpAddress($n->getStringValue()); },
            'roundTripTime' => function (ParseNode $n) use ($o) { $o->setRoundTripTime($n->getDateIntervalValue()); },
        ];
    }

    /**
     * Gets the hopCount property value. The network path count of this hop that was used to compute the RTT.
     * @return int|null
    */
    public function getHopCount(): ?int {
        return $this->hopCount;
    }

    /**
     * Gets the ipAddress property value. IP address used for this hop in the network trace.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the roundTripTime property value. The time from when the trace route packet was sent from the client to this hop and back to the client, denoted in [ISO 8601][] format. For example, 1 second is denoted as PT1S, where P is the duration designator, T is the time designator, and S is the second designator.
     * @return DateInterval|null
    */
    public function getRoundTripTime(): ?DateInterval {
        return $this->roundTripTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('hopCount', $this->hopCount);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeDateIntervalValue('roundTripTime', $this->roundTripTime);
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
     * Sets the hopCount property value. The network path count of this hop that was used to compute the RTT.
     *  @param int|null $value Value to set for the hopCount property.
    */
    public function setHopCount(?int $value ): void {
        $this->hopCount = $value;
    }

    /**
     * Sets the ipAddress property value. IP address used for this hop in the network trace.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the roundTripTime property value. The time from when the trace route packet was sent from the client to this hop and back to the client, denoted in [ISO 8601][] format. For example, 1 second is denoted as PT1S, where P is the duration designator, T is the time designator, and S is the second designator.
     *  @param DateInterval|null $value Value to set for the roundTripTime property.
    */
    public function setRoundTripTime(?DateInterval $value ): void {
        $this->roundTripTime = $value;
    }

}
