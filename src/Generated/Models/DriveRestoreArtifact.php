<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DriveRestoreArtifact extends RestoreArtifactBase implements Parsable 
{
    /**
     * Instantiates a new DriveRestoreArtifact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveRestoreArtifact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriveRestoreArtifact {
        return new DriveRestoreArtifact();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'restoredSiteId' => fn(ParseNode $n) => $o->setRestoredSiteId($n->getStringValue()),
            'restoredSiteName' => fn(ParseNode $n) => $o->setRestoredSiteName($n->getStringValue()),
            'restoredSiteWebUrl' => fn(ParseNode $n) => $o->setRestoredSiteWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the restoredSiteId property value. The new site identifier if destinationType is new, and the input site ID if the destinationType is inPlace.
     * @return string|null
    */
    public function getRestoredSiteId(): ?string {
        $val = $this->getBackingStore()->get('restoredSiteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredSiteId'");
    }

    /**
     * Gets the restoredSiteName property value. The name of the restored site.
     * @return string|null
    */
    public function getRestoredSiteName(): ?string {
        $val = $this->getBackingStore()->get('restoredSiteName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredSiteName'");
    }

    /**
     * Gets the restoredSiteWebUrl property value. The web URL of the restored site.
     * @return string|null
    */
    public function getRestoredSiteWebUrl(): ?string {
        $val = $this->getBackingStore()->get('restoredSiteWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredSiteWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('restoredSiteId', $this->getRestoredSiteId());
    }

    /**
     * Sets the restoredSiteId property value. The new site identifier if destinationType is new, and the input site ID if the destinationType is inPlace.
     * @param string|null $value Value to set for the restoredSiteId property.
    */
    public function setRestoredSiteId(?string $value): void {
        $this->getBackingStore()->set('restoredSiteId', $value);
    }

    /**
     * Sets the restoredSiteName property value. The name of the restored site.
     * @param string|null $value Value to set for the restoredSiteName property.
    */
    public function setRestoredSiteName(?string $value): void {
        $this->getBackingStore()->set('restoredSiteName', $value);
    }

    /**
     * Sets the restoredSiteWebUrl property value. The web URL of the restored site.
     * @param string|null $value Value to set for the restoredSiteWebUrl property.
    */
    public function setRestoredSiteWebUrl(?string $value): void {
        $this->getBackingStore()->set('restoredSiteWebUrl', $value);
    }

}
