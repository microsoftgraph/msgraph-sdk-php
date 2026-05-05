<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GranularRestoreArtifactBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new GranularRestoreArtifactBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GranularRestoreArtifactBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GranularRestoreArtifactBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.granularDriveRestoreArtifact': return new GranularDriveRestoreArtifact();
                case '#microsoft.graph.granularSiteRestoreArtifact': return new GranularSiteRestoreArtifact();
            }
        }
        return new GranularRestoreArtifactBase();
    }

    /**
     * Gets the browseSessionId property value. The browseSessionId property
     * @return string|null
    */
    public function getBrowseSessionId(): ?string {
        $val = $this->getBackingStore()->get('browseSessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browseSessionId'");
    }

    /**
     * Gets the completionDateTime property value. The completionDateTime property
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'browseSessionId' => fn(ParseNode $n) => $o->setBrowseSessionId($n->getStringValue()),
            'completionDateTime' => fn(ParseNode $n) => $o->setCompletionDateTime($n->getDateTimeValue()),
            'restoredItemKey' => fn(ParseNode $n) => $o->setRestoredItemKey($n->getStringValue()),
            'restoredItemPath' => fn(ParseNode $n) => $o->setRestoredItemPath($n->getStringValue()),
            'restoredItemWebUrl' => fn(ParseNode $n) => $o->setRestoredItemWebUrl($n->getStringValue()),
            'restorePointDateTime' => fn(ParseNode $n) => $o->setRestorePointDateTime($n->getDateTimeValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ArtifactRestoreStatus::class)),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the restoredItemKey property value. The restoredItemKey property
     * @return string|null
    */
    public function getRestoredItemKey(): ?string {
        $val = $this->getBackingStore()->get('restoredItemKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredItemKey'");
    }

    /**
     * Gets the restoredItemPath property value. The restoredItemPath property
     * @return string|null
    */
    public function getRestoredItemPath(): ?string {
        $val = $this->getBackingStore()->get('restoredItemPath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredItemPath'");
    }

    /**
     * Gets the restoredItemWebUrl property value. The restoredItemWebUrl property
     * @return string|null
    */
    public function getRestoredItemWebUrl(): ?string {
        $val = $this->getBackingStore()->get('restoredItemWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredItemWebUrl'");
    }

    /**
     * Gets the restorePointDateTime property value. The restorePointDateTime property
     * @return DateTime|null
    */
    public function getRestorePointDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restorePointDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointDateTime'");
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return ArtifactRestoreStatus|null
    */
    public function getStatus(): ?ArtifactRestoreStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ArtifactRestoreStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the webUrl property value. The webUrl property
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
        $writer->writeStringValue('browseSessionId', $this->getBrowseSessionId());
        $writer->writeDateTimeValue('completionDateTime', $this->getCompletionDateTime());
        $writer->writeStringValue('restoredItemKey', $this->getRestoredItemKey());
        $writer->writeStringValue('restoredItemPath', $this->getRestoredItemPath());
        $writer->writeStringValue('restoredItemWebUrl', $this->getRestoredItemWebUrl());
        $writer->writeDateTimeValue('restorePointDateTime', $this->getRestorePointDateTime());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the browseSessionId property value. The browseSessionId property
     * @param string|null $value Value to set for the browseSessionId property.
    */
    public function setBrowseSessionId(?string $value): void {
        $this->getBackingStore()->set('browseSessionId', $value);
    }

    /**
     * Sets the completionDateTime property value. The completionDateTime property
     * @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completionDateTime', $value);
    }

    /**
     * Sets the restoredItemKey property value. The restoredItemKey property
     * @param string|null $value Value to set for the restoredItemKey property.
    */
    public function setRestoredItemKey(?string $value): void {
        $this->getBackingStore()->set('restoredItemKey', $value);
    }

    /**
     * Sets the restoredItemPath property value. The restoredItemPath property
     * @param string|null $value Value to set for the restoredItemPath property.
    */
    public function setRestoredItemPath(?string $value): void {
        $this->getBackingStore()->set('restoredItemPath', $value);
    }

    /**
     * Sets the restoredItemWebUrl property value. The restoredItemWebUrl property
     * @param string|null $value Value to set for the restoredItemWebUrl property.
    */
    public function setRestoredItemWebUrl(?string $value): void {
        $this->getBackingStore()->set('restoredItemWebUrl', $value);
    }

    /**
     * Sets the restorePointDateTime property value. The restorePointDateTime property
     * @param DateTime|null $value Value to set for the restorePointDateTime property.
    */
    public function setRestorePointDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restorePointDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ArtifactRestoreStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ArtifactRestoreStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the webUrl property value. The webUrl property
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
