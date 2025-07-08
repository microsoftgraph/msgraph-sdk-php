<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProtectedApplicationMetadata extends IntegratedApplicationMetadata implements Parsable 
{
    /**
     * Instantiates a new ProtectedApplicationMetadata and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.protectedApplicationMetadata');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProtectedApplicationMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProtectedApplicationMetadata {
        return new ProtectedApplicationMetadata();
    }

    /**
     * Gets the applicationLocation property value. The client (application) ID of the Microsoft Entra application. Required.
     * @return PolicyLocation|null
    */
    public function getApplicationLocation(): ?PolicyLocation {
        $val = $this->getBackingStore()->get('applicationLocation');
        if (is_null($val) || $val instanceof PolicyLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationLocation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationLocation' => fn(ParseNode $n) => $o->setApplicationLocation($n->getObjectValue([PolicyLocation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicationLocation', $this->getApplicationLocation());
    }

    /**
     * Sets the applicationLocation property value. The client (application) ID of the Microsoft Entra application. Required.
     * @param PolicyLocation|null $value Value to set for the applicationLocation property.
    */
    public function setApplicationLocation(?PolicyLocation $value): void {
        $this->getBackingStore()->set('applicationLocation', $value);
    }

}
