<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChatMessagePolicyViolationPolicyTip implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new chatMessagePolicyViolationPolicyTip and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessagePolicyViolationPolicyTip
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessagePolicyViolationPolicyTip {
        return new ChatMessagePolicyViolationPolicyTip();
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
     * Gets the complianceUrl property value. The URL a user can visit to read about the data loss prevention policies for the organization. (ie, policies about what users shouldn't say in chats)
     * @return string|null
    */
    public function getComplianceUrl(): ?string {
        return $this->getBackingStore()->get('complianceUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'complianceUrl' => fn(ParseNode $n) => $o->setComplianceUrl($n->getStringValue()),
            'generalText' => fn(ParseNode $n) => $o->setGeneralText($n->getStringValue()),
            'matchedConditionDescriptions' => fn(ParseNode $n) => $o->setMatchedConditionDescriptions($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the generalText property value. Explanatory text shown to the sender of the message.
     * @return string|null
    */
    public function getGeneralText(): ?string {
        return $this->getBackingStore()->get('generalText');
    }

    /**
     * Gets the matchedConditionDescriptions property value. The list of improper data in the message that was detected by the data loss prevention app. Each DLP app defines its own conditions, examples include 'Credit Card Number' and 'Social Security Number'.
     * @return array<string>|null
    */
    public function getMatchedConditionDescriptions(): ?array {
        return $this->getBackingStore()->get('matchedConditionDescriptions');
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
        $writer->writeStringValue('complianceUrl', $this->getComplianceUrl());
        $writer->writeStringValue('generalText', $this->getGeneralText());
        $writer->writeCollectionOfPrimitiveValues('matchedConditionDescriptions', $this->getMatchedConditionDescriptions());
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
     * Sets the complianceUrl property value. The URL a user can visit to read about the data loss prevention policies for the organization. (ie, policies about what users shouldn't say in chats)
     * @param string|null $value Value to set for the complianceUrl property.
    */
    public function setComplianceUrl(?string $value): void {
        $this->getBackingStore()->set('complianceUrl', $value);
    }

    /**
     * Sets the generalText property value. Explanatory text shown to the sender of the message.
     * @param string|null $value Value to set for the generalText property.
    */
    public function setGeneralText(?string $value): void {
        $this->getBackingStore()->set('generalText', $value);
    }

    /**
     * Sets the matchedConditionDescriptions property value. The list of improper data in the message that was detected by the data loss prevention app. Each DLP app defines its own conditions, examples include 'Credit Card Number' and 'Social Security Number'.
     * @param array<string>|null $value Value to set for the matchedConditionDescriptions property.
    */
    public function setMatchedConditionDescriptions(?array $value): void {
        $this->getBackingStore()->set('matchedConditionDescriptions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
