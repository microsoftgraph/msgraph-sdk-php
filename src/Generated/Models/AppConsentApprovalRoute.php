<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppConsentApprovalRoute extends Entity implements Parsable 
{
    /**
     * Instantiates a new AppConsentApprovalRoute and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConsentApprovalRoute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConsentApprovalRoute {
        return new AppConsentApprovalRoute();
    }

    /**
     * Gets the appConsentRequests property value. A collection of appConsentRequest objects representing apps for which admin consent has been requested by one or more users.
     * @return array<AppConsentRequest>|null
    */
    public function getAppConsentRequests(): ?array {
        $val = $this->getBackingStore()->get('appConsentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppConsentRequest::class);
            /** @var array<AppConsentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appConsentRequests'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appConsentRequests' => fn(ParseNode $n) => $o->setAppConsentRequests($n->getCollectionOfObjectValues([AppConsentRequest::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appConsentRequests', $this->getAppConsentRequests());
    }

    /**
     * Sets the appConsentRequests property value. A collection of appConsentRequest objects representing apps for which admin consent has been requested by one or more users.
     * @param array<AppConsentRequest>|null $value Value to set for the appConsentRequests property.
    */
    public function setAppConsentRequests(?array $value): void {
        $this->getBackingStore()->set('appConsentRequests', $value);
    }

}
