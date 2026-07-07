<?php

namespace Microsoft\Graph\Generated\Security\Collaboration\AnalyzedEmails\MicrosoftGraphSecurityRemediate;

use Microsoft\Graph\Generated\Models\Security\AnalyzedEmail;
use Microsoft\Graph\Generated\Models\Security\RemediationAction;
use Microsoft\Graph\Generated\Models\Security\RemediationSeverity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RemediatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RemediatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setRemediateSendersCopy(false);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemediatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemediatePostRequestBody {
        return new RemediatePostRequestBody();
    }

    /**
     * Gets the action property value. The action property
     * @return RemediationAction|null
    */
    public function getAction(): ?RemediationAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof RemediationAction) {
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
     * Gets the analyzedEmails property value. The analyzedEmails property
     * @return array<AnalyzedEmail>|null
    */
    public function getAnalyzedEmails(): ?array {
        $val = $this->getBackingStore()->get('analyzedEmails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmail::class);
            /** @var array<AnalyzedEmail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'analyzedEmails'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
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
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(RemediationAction::class)),
            'analyzedEmails' => fn(ParseNode $n) => $o->setAnalyzedEmails($n->getCollectionOfObjectValues([AnalyzedEmail::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'remediateSendersCopy' => fn(ParseNode $n) => $o->setRemediateSendersCopy($n->getBooleanValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(RemediationSeverity::class)),
        ];
    }

    /**
     * Gets the remediateSendersCopy property value. The remediateSendersCopy property
     * @return bool|null
    */
    public function getRemediateSendersCopy(): ?bool {
        $val = $this->getBackingStore()->get('remediateSendersCopy');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediateSendersCopy'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return RemediationSeverity|null
    */
    public function getSeverity(): ?RemediationSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof RemediationSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeCollectionOfObjectValues('analyzedEmails', $this->getAnalyzedEmails());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('remediateSendersCopy', $this->getRemediateSendersCopy());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. The action property
     * @param RemediationAction|null $value Value to set for the action property.
    */
    public function setAction(?RemediationAction $value): void {
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
     * Sets the analyzedEmails property value. The analyzedEmails property
     * @param array<AnalyzedEmail>|null $value Value to set for the analyzedEmails property.
    */
    public function setAnalyzedEmails(?array $value): void {
        $this->getBackingStore()->set('analyzedEmails', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
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
     * Sets the remediateSendersCopy property value. The remediateSendersCopy property
     * @param bool|null $value Value to set for the remediateSendersCopy property.
    */
    public function setRemediateSendersCopy(?bool $value): void {
        $this->getBackingStore()->set('remediateSendersCopy', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param RemediationSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?RemediationSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

}
