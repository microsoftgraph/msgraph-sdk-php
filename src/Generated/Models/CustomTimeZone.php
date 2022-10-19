<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomTimeZone extends TimeZoneBase implements Parsable 
{
    /**
     * @var int|null $bias The time offset of the time zone from Coordinated Universal Time (UTC). This value is in minutes. Time zones that are ahead of UTC have a positive offset; time zones that are behind UTC have a negative offset.
    */
    private ?int $bias = null;
    
    /**
     * @var DaylightTimeZoneOffset|null $daylightOffset Specifies when the time zone switches from standard time to daylight saving time.
    */
    private ?DaylightTimeZoneOffset $daylightOffset = null;
    
    /**
     * @var StandardTimeZoneOffset|null $standardOffset Specifies when the time zone switches from daylight saving time to standard time.
    */
    private ?StandardTimeZoneOffset $standardOffset = null;
    
    /**
     * Instantiates a new CustomTimeZone and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customTimeZone');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTimeZone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTimeZone {
        return new CustomTimeZone();
    }

    /**
     * Gets the bias property value. The time offset of the time zone from Coordinated Universal Time (UTC). This value is in minutes. Time zones that are ahead of UTC have a positive offset; time zones that are behind UTC have a negative offset.
     * @return int|null
    */
    public function getBias(): ?int {
        return $this->bias;
    }

    /**
     * Gets the daylightOffset property value. Specifies when the time zone switches from standard time to daylight saving time.
     * @return DaylightTimeZoneOffset|null
    */
    public function getDaylightOffset(): ?DaylightTimeZoneOffset {
        return $this->daylightOffset;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bias' => fn(ParseNode $n) => $o->setBias($n->getIntegerValue()),
            'daylightOffset' => fn(ParseNode $n) => $o->setDaylightOffset($n->getObjectValue([DaylightTimeZoneOffset::class, 'createFromDiscriminatorValue'])),
            'standardOffset' => fn(ParseNode $n) => $o->setStandardOffset($n->getObjectValue([StandardTimeZoneOffset::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the standardOffset property value. Specifies when the time zone switches from daylight saving time to standard time.
     * @return StandardTimeZoneOffset|null
    */
    public function getStandardOffset(): ?StandardTimeZoneOffset {
        return $this->standardOffset;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('bias', $this->bias);
        $writer->writeObjectValue('daylightOffset', $this->daylightOffset);
        $writer->writeObjectValue('standardOffset', $this->standardOffset);
    }

    /**
     * Sets the bias property value. The time offset of the time zone from Coordinated Universal Time (UTC). This value is in minutes. Time zones that are ahead of UTC have a positive offset; time zones that are behind UTC have a negative offset.
     *  @param int|null $value Value to set for the bias property.
    */
    public function setBias(?int $value ): void {
        $this->bias = $value;
    }

    /**
     * Sets the daylightOffset property value. Specifies when the time zone switches from standard time to daylight saving time.
     *  @param DaylightTimeZoneOffset|null $value Value to set for the daylightOffset property.
    */
    public function setDaylightOffset(?DaylightTimeZoneOffset $value ): void {
        $this->daylightOffset = $value;
    }

    /**
     * Sets the standardOffset property value. Specifies when the time zone switches from daylight saving time to standard time.
     *  @param StandardTimeZoneOffset|null $value Value to set for the standardOffset property.
    */
    public function setStandardOffset(?StandardTimeZoneOffset $value ): void {
        $this->standardOffset = $value;
    }

}
