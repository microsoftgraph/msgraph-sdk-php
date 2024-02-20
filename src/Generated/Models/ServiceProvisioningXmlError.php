<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceProvisioningXmlError extends ServiceProvisioningError implements Parsable 
{
    /**
     * Instantiates a new ServiceProvisioningXmlError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.serviceProvisioningXmlError');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceProvisioningXmlError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceProvisioningXmlError {
        return new ServiceProvisioningXmlError();
    }

    /**
     * Gets the errorDetail property value. Error Information published by the Federated Service as an xml string.
     * @return string|null
    */
    public function getErrorDetail(): ?string {
        $val = $this->getBackingStore()->get('errorDetail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDetail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorDetail' => fn(ParseNode $n) => $o->setErrorDetail($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('errorDetail', $this->getErrorDetail());
    }

    /**
     * Sets the errorDetail property value. Error Information published by the Federated Service as an xml string.
     * @param string|null $value Value to set for the errorDetail property.
    */
    public function setErrorDetail(?string $value): void {
        $this->getBackingStore()->set('errorDetail', $value);
    }

}
