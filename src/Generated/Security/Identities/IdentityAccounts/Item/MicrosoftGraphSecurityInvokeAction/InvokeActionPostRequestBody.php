<?php

namespace Microsoft\Graph\Generated\Security\Identities\IdentityAccounts\Item\MicrosoftGraphSecurityInvokeAction;

use Microsoft\Graph\Generated\Models\Security\Action;
use Microsoft\Graph\Generated\Models\Security\IdentityProvider;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InvokeActionPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new InvokeActionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvokeActionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvokeActionPostRequestBody {
        return new InvokeActionPostRequestBody();
    }

    /**
     * Gets the accountId property value. The accountId property
     * @return string|null
    */
    public function getAccountId(): ?string {
        $val = $this->getBackingStore()->get('accountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountId'");
    }

    /**
     * Gets the action property value. The action property
     * @return Action|null
    */
    public function getAction(): ?Action {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof Action) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(Action::class)),
            'identityProvider' => fn(ParseNode $n) => $o->setIdentityProvider($n->getEnumValue(IdentityProvider::class)),
        ];
    }

    /**
     * Gets the identityProvider property value. The identityProvider property
     * @return IdentityProvider|null
    */
    public function getIdentityProvider(): ?IdentityProvider {
        $val = $this->getBackingStore()->get('identityProvider');
        if (is_null($val) || $val instanceof IdentityProvider) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityProvider'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeEnumValue('identityProvider', $this->getIdentityProvider());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountId property value. The accountId property
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->getBackingStore()->set('accountId', $value);
    }

    /**
     * Sets the action property value. The action property
     * @param Action|null $value Value to set for the action property.
    */
    public function setAction(?Action $value): void {
        $this->getBackingStore()->set('action', $value);
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
     * Sets the identityProvider property value. The identityProvider property
     * @param IdentityProvider|null $value Value to set for the identityProvider property.
    */
    public function setIdentityProvider(?IdentityProvider $value): void {
        $this->getBackingStore()->set('identityProvider', $value);
    }

}
