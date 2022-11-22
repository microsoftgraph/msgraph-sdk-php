<?php

namespace Microsoft\Graph\Generated\Workbooks\Item\Permissions\Item\Grant;

use Microsoft\Graph\Generated\Models\DriveRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class GrantPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new grantPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GrantPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GrantPostRequestBody {
        return new GrantPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getCollectionOfObjectValues([DriveRecipient::class, 'createFromDiscriminatorValue'])),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<DriveRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->getBackingStore()->get('recipients');
    }

    /**
     * Gets the roles property value. The roles property
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->getBackingStore()->get('roles');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('recipients', $this->getRecipients());
        $writer->writeCollectionOfPrimitiveValues('roles', $this->getRoles());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the recipients property value. The recipients property
     *  @param array<DriveRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

    /**
     * Sets the roles property value. The roles property
     *  @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

}
