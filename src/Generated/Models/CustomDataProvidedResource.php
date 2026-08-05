<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomDataProvidedResource extends AccessPackageResource implements Parsable 
{
    /**
     * Instantiates a new CustomDataProvidedResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customDataProvidedResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomDataProvidedResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomDataProvidedResource {
        return new CustomDataProvidedResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'notificationEndpointConfiguration' => fn(ParseNode $n) => $o->setNotificationEndpointConfiguration($n->getObjectValue([CustomExtensionEndpointConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the notificationEndpointConfiguration property value. The endpoint configuration of the logic app that is triggered when the access review for this resource goes into an initializing state.
     * @return CustomExtensionEndpointConfiguration|null
    */
    public function getNotificationEndpointConfiguration(): ?CustomExtensionEndpointConfiguration {
        $val = $this->getBackingStore()->get('notificationEndpointConfiguration');
        if (is_null($val) || $val instanceof CustomExtensionEndpointConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationEndpointConfiguration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('notificationEndpointConfiguration', $this->getNotificationEndpointConfiguration());
    }

    /**
     * Sets the notificationEndpointConfiguration property value. The endpoint configuration of the logic app that is triggered when the access review for this resource goes into an initializing state.
     * @param CustomExtensionEndpointConfiguration|null $value Value to set for the notificationEndpointConfiguration property.
    */
    public function setNotificationEndpointConfiguration(?CustomExtensionEndpointConfiguration $value): void {
        $this->getBackingStore()->set('notificationEndpointConfiguration', $value);
    }

}
