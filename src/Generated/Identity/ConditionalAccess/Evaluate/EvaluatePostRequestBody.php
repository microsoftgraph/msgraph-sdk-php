<?php

namespace Microsoft\\Graph\\Generated\Identity\ConditionalAccess\Evaluate;

use Microsoft\\Graph\\Generated\Models\SignInConditions;
use Microsoft\\Graph\\Generated\Models\SignInContext;
use Microsoft\\Graph\\Generated\Models\SignInIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EvaluatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EvaluatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluatePostRequestBody {
        return new EvaluatePostRequestBody();
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
     * Gets the appliedPoliciesOnly property value. The appliedPoliciesOnly property
     * @return bool|null
    */
    public function getAppliedPoliciesOnly(): ?bool {
        $val = $this->getBackingStore()->get('appliedPoliciesOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedPoliciesOnly'");
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
            'appliedPoliciesOnly' => fn(ParseNode $n) => $o->setAppliedPoliciesOnly($n->getBooleanValue()),
            'signInConditions' => fn(ParseNode $n) => $o->setSignInConditions($n->getObjectValue([SignInConditions::class, 'createFromDiscriminatorValue'])),
            'signInContext' => fn(ParseNode $n) => $o->setSignInContext($n->getObjectValue([SignInContext::class, 'createFromDiscriminatorValue'])),
            'signInIdentity' => fn(ParseNode $n) => $o->setSignInIdentity($n->getObjectValue([SignInIdentity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the signInConditions property value. The signInConditions property
     * @return SignInConditions|null
    */
    public function getSignInConditions(): ?SignInConditions {
        $val = $this->getBackingStore()->get('signInConditions');
        if (is_null($val) || $val instanceof SignInConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInConditions'");
    }

    /**
     * Gets the signInContext property value. The signInContext property
     * @return SignInContext|null
    */
    public function getSignInContext(): ?SignInContext {
        $val = $this->getBackingStore()->get('signInContext');
        if (is_null($val) || $val instanceof SignInContext) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInContext'");
    }

    /**
     * Gets the signInIdentity property value. The signInIdentity property
     * @return SignInIdentity|null
    */
    public function getSignInIdentity(): ?SignInIdentity {
        $val = $this->getBackingStore()->get('signInIdentity');
        if (is_null($val) || $val instanceof SignInIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInIdentity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('appliedPoliciesOnly', $this->getAppliedPoliciesOnly());
        $writer->writeObjectValue('signInConditions', $this->getSignInConditions());
        $writer->writeObjectValue('signInContext', $this->getSignInContext());
        $writer->writeObjectValue('signInIdentity', $this->getSignInIdentity());
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
     * Sets the appliedPoliciesOnly property value. The appliedPoliciesOnly property
     * @param bool|null $value Value to set for the appliedPoliciesOnly property.
    */
    public function setAppliedPoliciesOnly(?bool $value): void {
        $this->getBackingStore()->set('appliedPoliciesOnly', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the signInConditions property value. The signInConditions property
     * @param SignInConditions|null $value Value to set for the signInConditions property.
    */
    public function setSignInConditions(?SignInConditions $value): void {
        $this->getBackingStore()->set('signInConditions', $value);
    }

    /**
     * Sets the signInContext property value. The signInContext property
     * @param SignInContext|null $value Value to set for the signInContext property.
    */
    public function setSignInContext(?SignInContext $value): void {
        $this->getBackingStore()->set('signInContext', $value);
    }

    /**
     * Sets the signInIdentity property value. The signInIdentity property
     * @param SignInIdentity|null $value Value to set for the signInIdentity property.
    */
    public function setSignInIdentity(?SignInIdentity $value): void {
        $this->getBackingStore()->set('signInIdentity', $value);
    }

}
