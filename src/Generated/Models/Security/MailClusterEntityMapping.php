<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailClusterEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new MailClusterEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.mailClusterEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailClusterEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailClusterEntityMapping {
        return new MailClusterEntityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'queryColumn' => fn(ParseNode $n) => $o->setQueryColumn($n->getStringValue()),
            'sourceColumn' => fn(ParseNode $n) => $o->setSourceColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the queryColumn property value. Name of the detection query column that maps to the query of the alert entity.
     * @return string|null
    */
    public function getQueryColumn(): ?string {
        $val = $this->getBackingStore()->get('queryColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'queryColumn'");
    }

    /**
     * Gets the sourceColumn property value. Name of the detection query column that maps to the source of the alert entity.
     * @return string|null
    */
    public function getSourceColumn(): ?string {
        $val = $this->getBackingStore()->get('sourceColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('queryColumn', $this->getQueryColumn());
        $writer->writeStringValue('sourceColumn', $this->getSourceColumn());
    }

    /**
     * Sets the queryColumn property value. Name of the detection query column that maps to the query of the alert entity.
     * @param string|null $value Value to set for the queryColumn property.
    */
    public function setQueryColumn(?string $value): void {
        $this->getBackingStore()->set('queryColumn', $value);
    }

    /**
     * Sets the sourceColumn property value. Name of the detection query column that maps to the source of the alert entity.
     * @param string|null $value Value to set for the sourceColumn property.
    */
    public function setSourceColumn(?string $value): void {
        $this->getBackingStore()->set('sourceColumn', $value);
    }

}
