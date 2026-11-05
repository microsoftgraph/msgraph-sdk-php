<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GoogleCloudResourceEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new GoogleCloudResourceEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.googleCloudResourceEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GoogleCloudResourceEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GoogleCloudResourceEntityMapping {
        return new GoogleCloudResourceEntityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fullResourceNameColumn' => fn(ParseNode $n) => $o->setFullResourceNameColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fullResourceNameColumn property value. Name of the detection query column that maps to the full resource name of the alert entity.
     * @return string|null
    */
    public function getFullResourceNameColumn(): ?string {
        $val = $this->getBackingStore()->get('fullResourceNameColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fullResourceNameColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fullResourceNameColumn', $this->getFullResourceNameColumn());
    }

    /**
     * Sets the fullResourceNameColumn property value. Name of the detection query column that maps to the full resource name of the alert entity.
     * @param string|null $value Value to set for the fullResourceNameColumn property.
    */
    public function setFullResourceNameColumn(?string $value): void {
        $this->getBackingStore()->set('fullResourceNameColumn', $value);
    }

}
