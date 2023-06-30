<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\EscapedClone;

use Microsoft\Graph\Generated\Models\ClonableTeamParts;
use Microsoft\Graph\Generated\Models\TeamVisibilityType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ClonePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new clonePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClonePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClonePostRequestBody {
        return new ClonePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the classification property value. The classification property
     * @return string|null
    */
    public function getClassification(): ?string {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'mailNickname' => fn(ParseNode $n) => $o->setMailNickname($n->getStringValue()),
            'partsToClone' => fn(ParseNode $n) => $o->setPartsToClone($n->getEnumValue(ClonableTeamParts::class)),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getEnumValue(TeamVisibilityType::class)),
        ];
    }

    /**
     * Gets the mailNickname property value. The mailNickname property
     * @return string|null
    */
    public function getMailNickname(): ?string {
        $val = $this->getBackingStore()->get('mailNickname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailNickname'");
    }

    /**
     * Gets the partsToClone property value. The partsToClone property
     * @return ClonableTeamParts|null
    */
    public function getPartsToClone(): ?ClonableTeamParts {
        $val = $this->getBackingStore()->get('partsToClone');
        if (is_null($val) || $val instanceof ClonableTeamParts) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partsToClone'");
    }

    /**
     * Gets the visibility property value. The visibility property
     * @return TeamVisibilityType|null
    */
    public function getVisibility(): ?TeamVisibilityType {
        $val = $this->getBackingStore()->get('visibility');
        if (is_null($val) || $val instanceof TeamVisibilityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'visibility'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('classification', $this->getClassification());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('mailNickname', $this->getMailNickname());
        $writer->writeEnumValue('partsToClone', $this->getPartsToClone());
        $writer->writeEnumValue('visibility', $this->getVisibility());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the classification property value. The classification property
     * @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the mailNickname property value. The mailNickname property
     * @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the partsToClone property value. The partsToClone property
     * @param ClonableTeamParts|null $value Value to set for the partsToClone property.
    */
    public function setPartsToClone(?ClonableTeamParts $value): void {
        $this->getBackingStore()->set('partsToClone', $value);
    }

    /**
     * Sets the visibility property value. The visibility property
     * @param TeamVisibilityType|null $value Value to set for the visibility property.
    */
    public function setVisibility(?TeamVisibilityType $value): void {
        $this->getBackingStore()->set('visibility', $value);
    }

}
