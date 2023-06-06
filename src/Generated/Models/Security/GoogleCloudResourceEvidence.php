<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GoogleCloudResourceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new GoogleCloudResourceEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GoogleCloudResourceEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GoogleCloudResourceEvidence {
        return new GoogleCloudResourceEvidence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'locationType' => fn(ParseNode $n) => $o->setLocationType($n->getEnumValue(GoogleCloudLocationType::class)),
            'projectId' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'projectNumber' => fn(ParseNode $n) => $o->setProjectNumber($n->getIntegerValue()),
            'resourceName' => fn(ParseNode $n) => $o->setResourceName($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the location property value. The zone or region where the resource is located.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->getBackingStore()->get('location');
    }

    /**
     * Gets the locationType property value. The type of location. Possible values are: unknown, regional, zonal, global, unknownFutureValue.
     * @return GoogleCloudLocationType|null
    */
    public function getLocationType(): ?GoogleCloudLocationType {
        return $this->getBackingStore()->get('locationType');
    }

    /**
     * Gets the projectId property value. The Google project ID as defined by the user.
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->getBackingStore()->get('projectId');
    }

    /**
     * Gets the projectNumber property value. The project number assigned by Google.
     * @return int|null
    */
    public function getProjectNumber(): ?int {
        return $this->getBackingStore()->get('projectNumber');
    }

    /**
     * Gets the resourceName property value. The name of the resource.
     * @return string|null
    */
    public function getResourceName(): ?string {
        return $this->getBackingStore()->get('resourceName');
    }

    /**
     * Gets the resourceType property value. The type of the resource.
     * @return string|null
    */
    public function getResourceType(): ?string {
        return $this->getBackingStore()->get('resourceType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeEnumValue('locationType', $this->getLocationType());
        $writer->writeStringValue('projectId', $this->getProjectId());
        $writer->writeIntegerValue('projectNumber', $this->getProjectNumber());
        $writer->writeStringValue('resourceName', $this->getResourceName());
        $writer->writeStringValue('resourceType', $this->getResourceType());
    }

    /**
     * Sets the location property value. The zone or region where the resource is located.
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the locationType property value. The type of location. Possible values are: unknown, regional, zonal, global, unknownFutureValue.
     * @param GoogleCloudLocationType|null $value Value to set for the locationType property.
    */
    public function setLocationType(?GoogleCloudLocationType $value): void {
        $this->getBackingStore()->set('locationType', $value);
    }

    /**
     * Sets the projectId property value. The Google project ID as defined by the user.
     * @param string|null $value Value to set for the projectId property.
    */
    public function setProjectId(?string $value): void {
        $this->getBackingStore()->set('projectId', $value);
    }

    /**
     * Sets the projectNumber property value. The project number assigned by Google.
     * @param int|null $value Value to set for the projectNumber property.
    */
    public function setProjectNumber(?int $value): void {
        $this->getBackingStore()->set('projectNumber', $value);
    }

    /**
     * Sets the resourceName property value. The name of the resource.
     * @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value): void {
        $this->getBackingStore()->set('resourceName', $value);
    }

    /**
     * Sets the resourceType property value. The type of the resource.
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

}
