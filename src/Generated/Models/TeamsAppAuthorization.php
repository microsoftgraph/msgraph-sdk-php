<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamsAppAuthorization implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamsAppAuthorization and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppAuthorization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppAuthorization {
        return new TeamsAppAuthorization();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientAppId property value. The registration ID of the Microsoft Entra app ID associated with the teamsApp.
     * @return string|null
    */
    public function getClientAppId(): ?string {
        $val = $this->getBackingStore()->get('clientAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAppId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientAppId' => fn(ParseNode $n) => $o->setClientAppId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'requiredPermissionSet' => fn(ParseNode $n) => $o->setRequiredPermissionSet($n->getObjectValue([TeamsAppPermissionSet::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the requiredPermissionSet property value. Set of permissions required by the teamsApp.
     * @return TeamsAppPermissionSet|null
    */
    public function getRequiredPermissionSet(): ?TeamsAppPermissionSet {
        $val = $this->getBackingStore()->get('requiredPermissionSet');
        if (is_null($val) || $val instanceof TeamsAppPermissionSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredPermissionSet'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientAppId', $this->getClientAppId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('requiredPermissionSet', $this->getRequiredPermissionSet());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientAppId property value. The registration ID of the Microsoft Entra app ID associated with the teamsApp.
     * @param string|null $value Value to set for the clientAppId property.
    */
    public function setClientAppId(?string $value): void {
        $this->getBackingStore()->set('clientAppId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the requiredPermissionSet property value. Set of permissions required by the teamsApp.
     * @param TeamsAppPermissionSet|null $value Value to set for the requiredPermissionSet property.
    */
    public function setRequiredPermissionSet(?TeamsAppPermissionSet $value): void {
        $this->getBackingStore()->set('requiredPermissionSet', $value);
    }

}
