<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The business identifier, first explicit assignee contact, all explicit assignees, submission date, and additional collected data of one package request.
*/
class CopilotPackageRequestInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CopilotPackageRequestInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPackageRequestInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPackageRequestInfo {
        return new CopilotPackageRequestInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the assignees property value. All explicit assigned recipients returned by Governance, in source order with duplicates preserved. The first member supplies the requestedBy display contact; the collection is not truncated to that member. Empty means no explicit members were returned, not that the request has no audience. Broad or all-users audiences are not expanded or represented by this collection.
     * @return array<CopilotPackageRequestPrincipal>|null
    */
    public function getAssignees(): ?array {
        $val = $this->getBackingStore()->get('assignees');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CopilotPackageRequestPrincipal::class);
            /** @var array<CopilotPackageRequestPrincipal>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignees'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignees' => fn(ParseNode $n) => $o->setAssignees($n->getCollectionOfObjectValues([CopilotPackageRequestPrincipal::class, 'createFromDiscriminatorValue'])),
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'requestedBy' => fn(ParseNode $n) => $o->setRequestedBy($n->getObjectValue([EmailAddress::class, 'createFromDiscriminatorValue'])),
            'requestedDateTime' => fn(ParseNode $n) => $o->setRequestedDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the identifier property value. The business request identifier returned by Governance, or null when unavailable. Not a requester identity, title identifier, correlation identifier, or Graph resource key or address. Uniqueness and lifetime stability are not guaranteed. No existing Graph operation in this proposal consumes this value.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        $val = $this->getBackingStore()->get('identifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifier'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the requestedBy property value. The display name and contact address of the first explicitly assigned principal. The address may be a mail address or user principal name. Null only when there are no explicit assignees; a present first assignee may have null name and address. The first principal may be a user, group, or agent; requestedBy does not identify the request creator.
     * @return EmailAddress|null
    */
    public function getRequestedBy(): ?EmailAddress {
        $val = $this->getBackingStore()->get('requestedBy');
        if (is_null($val) || $val instanceof EmailAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedBy'");
    }

    /**
     * Gets the requestedDateTime property value. The request submission date and time in ISO 8601 format. Null when unknown; independent of assignee presence and not the package creation or modification time.
     * @return DateTime|null
    */
    public function getRequestedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignees property value. All explicit assigned recipients returned by Governance, in source order with duplicates preserved. The first member supplies the requestedBy display contact; the collection is not truncated to that member. Empty means no explicit members were returned, not that the request has no audience. Broad or all-users audiences are not expanded or represented by this collection.
     * @param array<CopilotPackageRequestPrincipal>|null $value Value to set for the assignees property.
    */
    public function setAssignees(?array $value): void {
        $this->getBackingStore()->set('assignees', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the identifier property value. The business request identifier returned by Governance, or null when unavailable. Not a requester identity, title identifier, correlation identifier, or Graph resource key or address. Uniqueness and lifetime stability are not guaranteed. No existing Graph operation in this proposal consumes this value.
     * @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the requestedBy property value. The display name and contact address of the first explicitly assigned principal. The address may be a mail address or user principal name. Null only when there are no explicit assignees; a present first assignee may have null name and address. The first principal may be a user, group, or agent; requestedBy does not identify the request creator.
     * @param EmailAddress|null $value Value to set for the requestedBy property.
    */
    public function setRequestedBy(?EmailAddress $value): void {
        $this->getBackingStore()->set('requestedBy', $value);
    }

    /**
     * Sets the requestedDateTime property value. The request submission date and time in ISO 8601 format. Null when unknown; independent of assignee presence and not the package creation or modification time.
     * @param DateTime|null $value Value to set for the requestedDateTime property.
    */
    public function setRequestedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestedDateTime', $value);
    }

}
