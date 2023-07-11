<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceUserAgent extends UserAgent implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new serviceUserAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecords.serviceUserAgent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceUserAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceUserAgent {
        return new ServiceUserAgent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(ServiceRole::class)),
        ]);
    }

    /**
     * Gets the role property value. The role property
     * @return ServiceRole|null
    */
    public function getRole(): ?ServiceRole {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof ServiceRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('role', $this->getRole());
    }

    /**
     * Sets the role property value. The role property
     * @param ServiceRole|null $value Value to set for the role property.
    */
    public function setRole(?ServiceRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

}
