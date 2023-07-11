<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserConsentRequest extends Request implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new userConsentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserConsentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserConsentRequest {
        return new UserConsentRequest();
    }

    /**
     * Gets the approval property value. Approval decisions associated with a request.
     * @return Approval|null
    */
    public function getApproval(): ?Approval {
        $val = $this->getBackingStore()->get('approval');
        if (is_null($val) || $val instanceof Approval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approval'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approval' => fn(ParseNode $n) => $o->setApproval($n->getObjectValue([Approval::class, 'createFromDiscriminatorValue'])),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
        ]);
    }

    /**
     * Gets the reason property value. The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby.
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('approval', $this->getApproval());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('reason', $this->getReason());
    }

    /**
     * Sets the approval property value. Approval decisions associated with a request.
     * @param Approval|null $value Value to set for the approval property.
    */
    public function setApproval(?Approval $value): void {
        $this->getBackingStore()->set('approval', $value);
    }

    /**
     * Sets the reason property value. The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

}
