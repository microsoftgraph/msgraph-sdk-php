<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SingleServicePrincipal extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new SingleServicePrincipal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.singleServicePrincipal');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SingleServicePrincipal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SingleServicePrincipal {
        return new SingleServicePrincipal();
    }

    /**
     * Gets the description property value. Description of this service principal.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'servicePrincipalId' => fn(ParseNode $n) => $o->setServicePrincipalId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the servicePrincipalId property value. ID of the servicePrincipal.
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        return $this->getBackingStore()->get('servicePrincipalId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('servicePrincipalId', $this->getServicePrincipalId());
    }

    /**
     * Sets the description property value. Description of this service principal.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the servicePrincipalId property value. ID of the servicePrincipal.
     *  @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalId', $value);
    }

}
