<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LinkedResource extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new linkedResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LinkedResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LinkedResource {
        return new LinkedResource();
    }

    /**
     * Gets the applicationName property value. The app name of the source that sends the linkedResource.
     * @return string|null
    */
    public function getApplicationName(): ?string {
        $val = $this->getBackingStore()->get('applicationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationName'");
    }

    /**
     * Gets the displayName property value. The title of the linkedResource.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the externalId property value. ID of the object that is associated with this task on the third-party/partner system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationName' => fn(ParseNode $n) => $o->setApplicationName($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the webUrl property value. Deep link to the linkedResource.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationName', $this->getApplicationName());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the applicationName property value. The app name of the source that sends the linkedResource.
     * @param string|null $value Value to set for the applicationName property.
    */
    public function setApplicationName(?string $value): void {
        $this->getBackingStore()->set('applicationName', $value);
    }

    /**
     * Sets the displayName property value. The title of the linkedResource.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. ID of the object that is associated with this task on the third-party/partner system.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the webUrl property value. Deep link to the linkedResource.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
