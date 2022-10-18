<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentLimitConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * @var int|null $limit The maximum number of devices that a user can enroll
    */
    private ?int $limit = null;
    
    /**
     * Instantiates a new DeviceEnrollmentLimitConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceEnrollmentLimitConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentLimitConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentLimitConfiguration {
        return new DeviceEnrollmentLimitConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the limit property value. The maximum number of devices that a user can enroll
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('limit', $this->limit);
    }

    /**
     * Sets the limit property value. The maximum number of devices that a user can enroll
     *  @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value ): void {
        $this->limit = $value;
    }

}
