<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudApplicationEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new CloudApplicationEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.cloudApplicationEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudApplicationEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudApplicationEntityMapping {
        return new CloudApplicationEntityMapping();
    }

    /**
     * Gets the appIdColumn property value. Name of the detection query column that maps to the application ID of the alert entity.
     * @return string|null
    */
    public function getAppIdColumn(): ?string {
        $val = $this->getBackingStore()->get('appIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appIdColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appIdColumn' => fn(ParseNode $n) => $o->setAppIdColumn($n->getStringValue()),
            'nameColumn' => fn(ParseNode $n) => $o->setNameColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the nameColumn property value. Name of the detection query column that maps to the name of the alert entity.
     * @return string|null
    */
    public function getNameColumn(): ?string {
        $val = $this->getBackingStore()->get('nameColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nameColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appIdColumn', $this->getAppIdColumn());
        $writer->writeStringValue('nameColumn', $this->getNameColumn());
    }

    /**
     * Sets the appIdColumn property value. Name of the detection query column that maps to the application ID of the alert entity.
     * @param string|null $value Value to set for the appIdColumn property.
    */
    public function setAppIdColumn(?string $value): void {
        $this->getBackingStore()->set('appIdColumn', $value);
    }

    /**
     * Sets the nameColumn property value. Name of the detection query column that maps to the name of the alert entity.
     * @param string|null $value Value to set for the nameColumn property.
    */
    public function setNameColumn(?string $value): void {
        $this->getBackingStore()->set('nameColumn', $value);
    }

}
