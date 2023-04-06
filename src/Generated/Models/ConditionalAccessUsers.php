<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessUsers implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessUsers and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessUsers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessUsers {
        return new ConditionalAccessUsers();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludeGroups property value. Group IDs excluded from scope of policy.
     * @return array<string>|null
    */
    public function getExcludeGroups(): ?array {
        return $this->getBackingStore()->get('excludeGroups');
    }

    /**
     * Gets the excludeGuestsOrExternalUsers property value. The excludeGuestsOrExternalUsers property
     * @return ConditionalAccessGuestsOrExternalUsers|null
    */
    public function getExcludeGuestsOrExternalUsers(): ?ConditionalAccessGuestsOrExternalUsers {
        return $this->getBackingStore()->get('excludeGuestsOrExternalUsers');
    }

    /**
     * Gets the excludeRoles property value. Role IDs excluded from scope of policy.
     * @return array<string>|null
    */
    public function getExcludeRoles(): ?array {
        return $this->getBackingStore()->get('excludeRoles');
    }

    /**
     * Gets the excludeUsers property value. User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     * @return array<string>|null
    */
    public function getExcludeUsers(): ?array {
        return $this->getBackingStore()->get('excludeUsers');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeGroups' => fn(ParseNode $n) => $o->setExcludeGroups($n->getCollectionOfPrimitiveValues()),
            'excludeGuestsOrExternalUsers' => fn(ParseNode $n) => $o->setExcludeGuestsOrExternalUsers($n->getObjectValue([ConditionalAccessGuestsOrExternalUsers::class, 'createFromDiscriminatorValue'])),
            'excludeRoles' => fn(ParseNode $n) => $o->setExcludeRoles($n->getCollectionOfPrimitiveValues()),
            'excludeUsers' => fn(ParseNode $n) => $o->setExcludeUsers($n->getCollectionOfPrimitiveValues()),
            'includeGroups' => fn(ParseNode $n) => $o->setIncludeGroups($n->getCollectionOfPrimitiveValues()),
            'includeGuestsOrExternalUsers' => fn(ParseNode $n) => $o->setIncludeGuestsOrExternalUsers($n->getObjectValue([ConditionalAccessGuestsOrExternalUsers::class, 'createFromDiscriminatorValue'])),
            'includeRoles' => fn(ParseNode $n) => $o->setIncludeRoles($n->getCollectionOfPrimitiveValues()),
            'includeUsers' => fn(ParseNode $n) => $o->setIncludeUsers($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeGroups property value. Group IDs in scope of policy unless explicitly excluded.
     * @return array<string>|null
    */
    public function getIncludeGroups(): ?array {
        return $this->getBackingStore()->get('includeGroups');
    }

    /**
     * Gets the includeGuestsOrExternalUsers property value. The includeGuestsOrExternalUsers property
     * @return ConditionalAccessGuestsOrExternalUsers|null
    */
    public function getIncludeGuestsOrExternalUsers(): ?ConditionalAccessGuestsOrExternalUsers {
        return $this->getBackingStore()->get('includeGuestsOrExternalUsers');
    }

    /**
     * Gets the includeRoles property value. Role IDs in scope of policy unless explicitly excluded.
     * @return array<string>|null
    */
    public function getIncludeRoles(): ?array {
        return $this->getBackingStore()->get('includeRoles');
    }

    /**
     * Gets the includeUsers property value. User IDs in scope of policy unless explicitly excluded, None, All, or GuestsOrExternalUsers.
     * @return array<string>|null
    */
    public function getIncludeUsers(): ?array {
        return $this->getBackingStore()->get('includeUsers');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeGroups', $this->getExcludeGroups());
        $writer->writeObjectValue('excludeGuestsOrExternalUsers', $this->getExcludeGuestsOrExternalUsers());
        $writer->writeCollectionOfPrimitiveValues('excludeRoles', $this->getExcludeRoles());
        $writer->writeCollectionOfPrimitiveValues('excludeUsers', $this->getExcludeUsers());
        $writer->writeCollectionOfPrimitiveValues('includeGroups', $this->getIncludeGroups());
        $writer->writeObjectValue('includeGuestsOrExternalUsers', $this->getIncludeGuestsOrExternalUsers());
        $writer->writeCollectionOfPrimitiveValues('includeRoles', $this->getIncludeRoles());
        $writer->writeCollectionOfPrimitiveValues('includeUsers', $this->getIncludeUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the excludeGroups property value. Group IDs excluded from scope of policy.
     * @param array<string>|null $value Value to set for the excludeGroups property.
    */
    public function setExcludeGroups(?array $value): void {
        $this->getBackingStore()->set('excludeGroups', $value);
    }

    /**
     * Sets the excludeGuestsOrExternalUsers property value. The excludeGuestsOrExternalUsers property
     * @param ConditionalAccessGuestsOrExternalUsers|null $value Value to set for the excludeGuestsOrExternalUsers property.
    */
    public function setExcludeGuestsOrExternalUsers(?ConditionalAccessGuestsOrExternalUsers $value): void {
        $this->getBackingStore()->set('excludeGuestsOrExternalUsers', $value);
    }

    /**
     * Sets the excludeRoles property value. Role IDs excluded from scope of policy.
     * @param array<string>|null $value Value to set for the excludeRoles property.
    */
    public function setExcludeRoles(?array $value): void {
        $this->getBackingStore()->set('excludeRoles', $value);
    }

    /**
     * Sets the excludeUsers property value. User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     * @param array<string>|null $value Value to set for the excludeUsers property.
    */
    public function setExcludeUsers(?array $value): void {
        $this->getBackingStore()->set('excludeUsers', $value);
    }

    /**
     * Sets the includeGroups property value. Group IDs in scope of policy unless explicitly excluded.
     * @param array<string>|null $value Value to set for the includeGroups property.
    */
    public function setIncludeGroups(?array $value): void {
        $this->getBackingStore()->set('includeGroups', $value);
    }

    /**
     * Sets the includeGuestsOrExternalUsers property value. The includeGuestsOrExternalUsers property
     * @param ConditionalAccessGuestsOrExternalUsers|null $value Value to set for the includeGuestsOrExternalUsers property.
    */
    public function setIncludeGuestsOrExternalUsers(?ConditionalAccessGuestsOrExternalUsers $value): void {
        $this->getBackingStore()->set('includeGuestsOrExternalUsers', $value);
    }

    /**
     * Sets the includeRoles property value. Role IDs in scope of policy unless explicitly excluded.
     * @param array<string>|null $value Value to set for the includeRoles property.
    */
    public function setIncludeRoles(?array $value): void {
        $this->getBackingStore()->set('includeRoles', $value);
    }

    /**
     * Sets the includeUsers property value. User IDs in scope of policy unless explicitly excluded, None, All, or GuestsOrExternalUsers.
     * @param array<string>|null $value Value to set for the includeUsers property.
    */
    public function setIncludeUsers(?array $value): void {
        $this->getBackingStore()->set('includeUsers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
